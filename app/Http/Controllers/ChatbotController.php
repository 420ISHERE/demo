<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\RequestException;

class ChatbotController extends Controller
{
    /**
     * Handle the incoming chat message from the user.
     */
    public function handleMessage(Request $request)
    {
        $message = $request->input('message');

        if (!$message) {
            return response()->json(['reply' => 'Please type a message.']);
        }

        try {

            $apiKey = env('GEMINI_API_KEY');


            if (!$apiKey || $apiKey === 'YOUR_API_KEY_GOES_HERE') {
                Log::error('GEMINI_API_KEY is not set in ChatbotController.php file. Please replace the placeholder.');

                return response()->json(['reply' => '🙏 Server configuration error. Please contact the administrator.'], 500);
            }


            $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash-preview-09-2025:generateContent?key=" . $apiKey;


            $systemInstruction = "You are a friendly ISKCON HKM Dehradun Temple chatbot. 
Answer politely about temple location, darshan timings, donations, and Krishna consciousness.
Always begin with '🙏 Hare Krishna!'.

Here is the temple's official information:
- Address: Khasra No. 801, Suddhowala, Near IIM Kashipur Satellite Campus, Dehradun 248015
- Phone: +91 8121151508
- Email: contact@hkmdehradun.org
- Website: https://www.hkmdehradun.org/
You can search the internet, particularly the official website, to find the most up-to-date information if the user's question isn't covered by the static info above.

IMPORTANT: Do not use Markdown formatting (like **, ###, *, or links in []() format). Respond in plain text only. Use new lines for separation.";


            $payload = [
                'contents' => [

                    ['parts' => [['text' => $message]]]
                ],

                'systemInstruction' => [
                    'parts' => [
                        ['text' => $systemInstruction]
                    ]
                ],

                'tools' => [
                    ['google_search' => new \stdClass()]
                ]
            ];

            $response = Http::post($url, $payload)->throw();

            $data = $response->json();

            if (empty($data['candidates']) || empty($data['candidates'][0]['content']['parts'][0]['text'])) {


                $blockReason = $data['promptFeedback']['blockReason'] ?? 'No content returned';
                Log::warning('Gemini API returned no valid content.', [
                    'reason' => $blockReason,
                    'response_data' => $data
                ]);

                if ($blockReason !== 'No content returned') {
                    return response()->json(['reply' => "🙏 My apologies, your request could not be processed due to safety settings."]);
                }

                return response()->json(['reply' => '🙏 I\'m sorry, I couldn\'t generate a response. Please try rephrasing.']);
            }

            $reply = $data['candidates'][0]['content']['parts'][0]['text'];

            return response()->json(['reply' => $reply]);
        } catch (RequestException $e) {
            Log::error('Gemini API HTTP Error: ' . $e->getMessage(), [
                'status' => $e->response->status(),
                'response' => $e->response->body()
            ]);
            return response()->json(['reply' => "🙏 Sorry, I’m having trouble connecting to the AI service. Please try again later."], 500);
        } catch (\Exception $e) {
            Log::error('ChatbotController Error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);
            return response()->json(['reply' => "🙏 Sorry, an unexpected error occurred. Please try again."], 500);
        }
    }
}
