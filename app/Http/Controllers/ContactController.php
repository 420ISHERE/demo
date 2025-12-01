<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReceiptsEmail;
use GuzzleHttp\Client;
use Exception;

class ContactController extends Controller
{
    /**
     * Handles the logic for a standard enquiry.
     */
    public function enquiry(Request $req)
    {
        $rules = [
            'full_name' => 'required|string|max:255',
            'mobile'    => 'required|digits:10',
            'email'     => 'required|email',
            'subject'   => 'nullable|string|max:255',
            'message'   => 'nullable|string',
        ];

        return $this->handleFormSubmission(
            $req,
            $rules,
            'contactdata', // DB table name
            'Thank you for contacting us!'
        );
    }

    /**
     * Handles the logic for a quick enquiry.
     */
    public function quickEnquiry(Request $req)
    {
        $rules = [
            'full_name' => 'required|string|max:255',
            'mobile'    => 'required|digits:10',
            'email'     => 'required|email',
        ];

        return $this->handleFormSubmission(
            $req,
            $rules,
            'quick_enquiries', // DB table name
            'Your quick enquiry has been received!'
        );
    }

    /**
     * Central method to process form submissions.
     */
    private function handleFormSubmission(Request $req, array $rules, string $tableName, string $successMessage)
    {
        // ✅ Validate data
        $validatedData = $req->validate($rules);

        $data = [
            'full_name' => $validatedData['full_name'],
            'mobile'    => $validatedData['mobile'],
            'email'     => $validatedData['email'],
            'subject'   => $req->input('subject', 'No Subject'),
            'message'   => $req->input('message', ''),
            'created_at' => now(),
            'updated_at' => now(),
        ];

        // ✅ Save to database and get ID
        $id = DB::table($tableName)->insertGetId($data);

        // Fetch full record (with id, created_at, updated_at)
        $record = DB::table($tableName)->where('id', $id)->first();

        // ✅ Send confirmation email
        try {
            Mail::to($record->email)->send(new ReceiptsEmail(
                $record->message,
                $record->subject,
                $record->full_name
            ));
        } catch (Exception $e) {
            Log::error("Email sending failed", [
                'error' => $e->getMessage(),
                'email' => $record->email
            ]);
        }

        // ✅ Push full record to Google Sheets
        $this->sendToGoogleSheets((array) $record);

        // ✅ Redirect back with success message
        return back()->with('status', $successMessage);
    }

    /**
     * Send data to Google Sheets Web App.
     */
    private function sendToGoogleSheets(array $record)
    {
        $url = env('GOOGLE_SHEETS_WEBHOOK');

        if (!$url) {
            Log::error('Google Sheets webhook URL missing in .env');
            return;
        }

        // ✅ Exact mapping to MySQL → Google Sheets
        $sheetData = [
            'id'         => $record['id'] ?? '',
            'full_name'  => $record['full_name'] ?? '',
            'mobile'     => $record['mobile'] ?? '',
            'email'      => $record['email'] ?? '',
            'subject'    => $record['subject'] ?? '',
            'message'    => $record['message'] ?? '',
            'created_at' => $record['created_at'] ?? '',
            'updated_at' => $record['updated_at'] ?? '',
        ];

        Log::info('Sending data to Google Sheets', [
            'url'  => $url,
            'data' => $sheetData
        ]);

        $client = new Client([
            'timeout' => 30,
            'connect_timeout' => 10,
        ]);

        try {
            $response = $client->post($url, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
                'json' => $sheetData,
                'verify' => true, // set false if SSL issues
            ]);

            Log::info("Google Sheets response", [
                'status_code' => $response->getStatusCode(),
                'body'        => $response->getBody()->getContents()
            ]);
        } catch (Exception $e) {
            Log::error("Google Sheets sync failed", [
                'error' => $e->getMessage(),
                'data'  => $sheetData,
                'url'   => $url
            ]);
        }
    }
}
