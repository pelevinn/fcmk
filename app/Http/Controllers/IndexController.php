<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    //
    public function __invoke()
    {
        return view( "index", [
            "articles" => Articles::orderBy('id', 'desc')->latest()->take(6)->get()
        ] );
    }
}
