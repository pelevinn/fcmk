<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Articles;

class ArticleSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        $tags = ['#город', '#новости', '#статья', '#транспорт'];

        for ($i = 0; $i < 20; $i++) {
            Articles::create([
                'title' => $faker->sentence,
                'views' => $faker->numberBetween(0, 50),
                'favorite' => $faker->numberBetween(0, 50),
                'image' => 'cat.png',
                'article_bg' => 'spb_bg.jpg',
                'tags' => implode(' ', $faker->randomElements($tags, $faker->numberBetween(1, count($tags)))),
                'info' => $faker->text(200),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
