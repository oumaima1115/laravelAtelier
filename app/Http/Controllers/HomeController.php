<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        echo"Bonjour 5TWIN.";
    } 
    public function show(){
        $name='oumaima';
        return view('Home.show', ['name'=>$name]);
    }
}
