<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $fillable = ['article_id', 'title', 'text'];

    public static function setComment($comment_info){
        self::create([
            "article_id" => $comment_info["article_id"],
            "title" => $comment_info["title"],
            "text" => $comment_info["text"]
        ]);
    }
}
