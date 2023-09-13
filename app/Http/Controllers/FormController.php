<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function getResult(Request $request)
    {
       $pseudo = $request->input('pseudo');
        return view('result')->with('pseudo', $pseudo);
    }
}
