<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandpagesController extends Controller
{
    public function annadaan()
    {
        return view('lppages.annadaan');
    }

    public function checkout(string $id)
    {
        $feeding = '';
        $seva_amount = 0;
        $seva = '<input type="text" class="form-control" onkeyup="numOnly(this)" name="seva_amount" id="seva_amount" placeholder="Enter amount" required="">';
        $amount = null;

        if ($id == 1) {
            $feeding = "Feed 100 people ";
            $seva = "₹ 2,700";
            $amount = 2700;
            $seva_amount = $amount;
        }
        if ($id == 2) {
            $feeding = "Feed 200 people ";
            $seva = "₹ 5,400";
            $amount = 5400;
            $seva_amount = $amount;
        }
        if ($id == 3) {
            $feeding = "Feed 300 people ";
            $seva = "₹ 8,100";
            $amount = 8100;
            $seva_amount = $amount;
        }
        if ($id == 4) {
            $feeding = "Feed 500 people ";
            $seva = "₹ 13,500";
            $amount = 13500;
            $seva_amount = $amount;
        }
        if ($id == 5) {
            $feeding = "Feed 1000 people ";
            $seva = "₹ 27,000";
            $amount = 27000;
            $seva_amount = $amount;
        }
        if ($id == 6) {
            $feeding = "Feed 1500 people ";
            $seva = "₹ 40,500";
            $amount = 40500;
            $seva_amount = $amount;
        }
        if ($id == 7) {
            $feeding = "Feed 3000 people ";
            $seva = "₹ 81,000";
            $amount = 81000;
            $seva_amount = $amount;
        }
        if ($id == 8) {
            $feeding = "Feed 5000 people ";
            $seva = "₹ 1,35,000";
            $amount = 135000;
            $seva_amount = $amount;
        }
        if ($id == 9) {
            $feeding = "Feed 10,000 people ";
            $seva = "₹ 2,70,000";
            $amount = 270000;
            $seva_amount = $amount;
        }
        if ($id == 10) {
            $feeding = "Donate any other amount ";
            $seva_amount = "ENTER SEVA AMOUNT *";
        }

        // Janmashtami Seva
        if ($id == 11) {
            $feeding = "Archana Seva ";
            $seva = "₹ 1,100";
            $amount = 1100;
            $seva_amount = $amount;
        }
        if ($id == 12) {
            $feeding = "Makhan Mishri Seva ";
            $seva = "₹ 2,100";
            $amount = 2100;
            $seva_amount = $amount;
        }
        if ($id == 13) {
            $feeding = "Pushpa Seva ";
            $seva = "₹ 5,100";
            $amount = 5100;
            $seva_amount = $amount;
        }
        if ($id == 14) {
            $feeding = "Abhishekam Seva";
            $seva = "₹ 11,000";
            $amount = 11000;
            $seva_amount = $amount;
        }
        if ($id == 15) {
            $feeding = "Chappan Bhog Seva ";
            $seva = "₹ 15,000";
            $amount = 15000;
            $seva_amount = $amount;
        }
        if ($id == 16) {
            $feeding = "Prasadam Seva ";
            $seva = "₹ 20,000";
            $amount = 20000;
            $seva_amount = $amount;
        }
        if ($id == 17) {
            $feeding = "Alankara Seva ";
            $seva = "₹ 25,000";
            $amount = 25000;
            $seva_amount = $amount;
        }
        if ($id == 18) {
            $feeding = "Multi-donation Seva";
            $seva = "Custom Amount";
            $amount = request()->query('amount', 0);
            $seva_amount = $amount;
        }
        if ($id == 19) {
            $feeding = "Deep Daan";
            $seva = "₹ 2,100";
            $amount = 2100; // Since it’s a custom donation, initial amount is 0
            $seva_amount = $amount;
        }


        return view('lppages.checkout', [
            'feeding' => $feeding,
            'seva_amount' => $seva_amount,
            'seva' => $seva,
            'amount' => $amount
        ]);
    }
}