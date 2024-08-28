<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesLikeController extends Controller
{
    //
    public function __invoke($id)
    {
        return response()->json(
            ["message" => "ok",
            "likes" => 0
            ]
        );
    }
}
