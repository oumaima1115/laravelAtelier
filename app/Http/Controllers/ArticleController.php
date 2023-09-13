<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($n)
    {
        $articleNumber = $n;
        return view('article.show')->with('articleNumber', $articleNumber);
    }
}
