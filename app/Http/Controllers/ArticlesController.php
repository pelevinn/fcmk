<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    public function __invoke($slug)
    {
        return view( "article", [
            "article" => Articles::where("id", "=", $slug)->get()->first()
        ] );
    }
}
