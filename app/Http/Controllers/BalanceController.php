<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Balance;

class BalanceController extends Controller
{
    public function index()
    {
        $balances = Balance::all();
        //return view('balance', compact('balances'));
        //return $balances;
        return view('balance', ['balances' => $balances]);
    }
}
