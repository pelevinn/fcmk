<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class ArticleCommentsController extends Controller
{
    //
    public function __invoke($id)
    {
        Comments::setComment([ "article_id" => $id, "title" => request("title"), "text" => request("text") ]);
    }
}
