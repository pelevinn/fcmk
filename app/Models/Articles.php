<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Articles extends Model
{
    use HasFactory;
    protected $fillable = [
        'views',
    ];

    public static function current($id){
        return self::where( 'id', $id )->get()->first();
    }

    public static function views(int $id){
        self::find($id)->update(['views' => DB::raw('views + 1')]);
        return self::current($id)->views ?? 0;
    }
}
