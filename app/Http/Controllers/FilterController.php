<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilterController extends Controller
{
    function filter(Request $req)

    {        
        return view('child', ['role' => $req->input('role'), 'active' => $req->input('active')]);
    }
}
