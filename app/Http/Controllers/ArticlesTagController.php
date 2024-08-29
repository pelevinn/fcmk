<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticlesTagController extends Controller
{
    //
    public function __invoke($tag)
    {
        $pagination = Articles::where('tags', 'LIKE', '%' . $tag . '%')->orderBy('created_at', 'desc')->paginate(10, page:request()->get('page')??1);
        return view("catalog", [
            "pagination" => $pagination,
            "tag" => htmlspecialchars($tag, ENT_QUOTES, 'UTF-8')

        ]);
    }
}
