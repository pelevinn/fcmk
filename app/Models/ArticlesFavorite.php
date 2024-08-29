<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArticlesFavorite extends Model
{
    use HasFactory;

    protected $fillable = [
        'favorite',
    ];

    /**
     * Задаем название
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * Обновляем и получаем результат
     *
     * @param integer $id
     * @return int
     */
    public static function getLikes(int $id) : int{
        if( $id < 0){
            return 0;
        }
        self::find($id)->update([ 'favorite' => DB::raw('favorite + 1')]);
        return self::where( "id", $id  )->get()->first()->favorite ?? 0;
    }
}
