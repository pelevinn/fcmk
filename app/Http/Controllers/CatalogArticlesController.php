<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class CatalogArticlesController extends Controller
{
    //
    public function __invoke()
    {
        $pagination = Articles::orderBy('id', 'desc')->paginate(10, page:request()->get('page')??1);
        // dd(compact('posts'));
        return view( "catalog", compact('pagination') );
    }
}

