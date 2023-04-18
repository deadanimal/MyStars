<?php

namespace App\Http\Controllers;

use App\Models\Cashout;
use App\Models\Earning;
use App\Models\Invoice;
use App\Models\Wallet;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class WalletController extends Controller
{

    public function show_wallet(Request $request) {
        $user = $request->user();
        $wallet = Wallet::firstOrCreate(['user_id' => $user->id]);        
        return view('wallet', compact('user', 'wallet'));
    }

    public function to_cashout(Request $request) {
        
        $user = $request->user();
        $wallet = Wallet::where('user_id', $user->id)->first();
        $amount = (int)($request->amount * 1000000);

        if($amount >= $wallet->balance) {
            Alert::error('Error', 'Balance is less than the cashout amount');
            return back();
        } else if ($amount >= 10000000000 || $amount < 100000000) {
            Alert::error('Error', 'Cashout amount must be between 100 and 10,000');
            return back();
        }

        $wallet->balance -= $amount;
        $wallet->save();

        Cashout::create([
            'amount' => $amount,
            'wallet_id'=> $wallet->id,
            'user_id'=> $user->id,
            'status'=> 'created'
        ]);

        Alert::success('Success', 'A cashout request has been created!');

        return back();
    }    

    public function approve_earning(Request $request) {
        
        $user = $request->user();
        $user_id = $user->id;

        $wallet = Wallet::where('user_id', $user_id)->first();
        $amount = (int)($request->amount * 1000000);

        if($amount >= 10000000000) {
            Alert::error('Error', 'Earning approve must be less than 10,000');
            return back();
        }

        $wallet->balance += $amount;
        $wallet->save();

        Earning::create([
            'amount' => $amount,
            'wallet_id'=> $wallet->id,
            'user_id'=> $user_id,
            'status'=> 'created'
        ]);        


        Alert::success('Success', 'Earning approval has been created!');

        return back();
    }     

    public function billing(Request $request) {
        $user = $request->user();
        $user->createOrGetStripeCustomer();
        return $request->user()->redirectToBillingPortal(route('dashboard'));        
    }

    public function buy_product(Request $request) {
        $product_name = $request->product_name;
        if($product_name == '1kc') {
            $price_id = 'price_1MxrHXL56wwkJgEVj5dhmqa4';
        } else if ($product_name == '10kc') {
            $price_id = 'price_1MxrIEL56wwkJgEVvzBFQI7u';
        }
        return $request->user()->checkout($price_id);
    }    


}
