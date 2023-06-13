<?php

namespace App\Http\Controllers;

use App\Models\Consignee;
use App\Models\Consignor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function login(Request $req)
    {
        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];

        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $isConsignee = Consignee::where('email', $req->email)->where('pass', $req->password)->first();
        $isConsignor = Consignor::where('email', $req->email)->where('pass', $req->password)->first();

        if ($isConsignee || $isConsignor) {
            if ($isConsignee) {
                $req->session()->put('isConsignee', true);
            } else {
                $req->session()->put('isConsignor', true);
            }
            return redirect('/');
        }

        return back()->withErrors([
            'notmatch' => 'Your credentials are invalid'
        ]);
    }
}
