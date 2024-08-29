<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticleViewsController extends Controller
{
    //
    public function __invoke($id = 0)
    {
        return response()->json(
            [
                "views" => Articles::views((int)$id)
            ]
        );
    }
}
