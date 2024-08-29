<?php

namespace App\Http\Controllers;

use App\Models\ArticlesFavorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticlesLikeController extends Controller
{
    //
    public function __invoke($id)
    {
        return response()->json(
            [
                "message" => "ok",
                //DB::raw('favorite + 1') преобразует информацию в sql
                "likes" => ArticlesFavorite::getLikes($id)
            ]
        );
    }
}
