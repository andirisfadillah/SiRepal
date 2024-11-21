<?php

namespace App\Http\Controllers;

use App\Models\PaymentAccount;
use Illuminate\Http\Request;

class PaymentAccountController extends Controller
{
    public function index(){
        $paymentAccounts = PaymentAccount::get();

        return view('rekening-pembayaran-retribusi.index', compact('paymentAccounts'));
    }
}
