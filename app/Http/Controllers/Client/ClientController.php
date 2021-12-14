<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ClientController extends Controller
{
    public function showLoan(){
        $datetimeToday = Carbon::now('Asia/Manila');

        return view('client.loan',compact('datetimeToday'));
    }

    public function storeLoan(Request $request){
        dd($request->all());
    }
}
