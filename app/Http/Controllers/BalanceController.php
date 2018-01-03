<?php

namespace App\Http\Controllers;

use App\Balance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BalanceController extends Controller
{
    public function index(){

        $saldo = auth()->user()->balance;
        $amount = $saldo ? $saldo->amount : 0;

        return view('balance.index', compact('amount'));
    }

    public function deposit(){
        return view('balance.deposit');
    }

    public function depositStore(Request $request, Balance $balance){

       // $balance->deposit($request->value);
        $balance = Auth::user()->balance()->firstOrCreate([]);
        $balance->deposit($request->value);
        return redirect('balance');
    }
}
