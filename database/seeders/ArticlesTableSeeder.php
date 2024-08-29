<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'title' => 'Статья первая',
                'subtitle' => 'Подзаголовок 11 статьи',
                'views' => 100,
                'favorite' => 100,
                'image' => 'cat.png',
                'article_bg' => 'spb_bg.jpg',
                'tags' => '#город #новости #статья #транспорт',
                'info' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nobis eligendi vitae error asperiores impedit vel, iusto earum enim vero dolorum, minus quaerat sint quod consequuntur quae unde dolore eos illum provident saepe necessitatibus molestias. Saepe distinctio soluta magnam nesciunt possimus? Possimus veniam ipsum nobis provident! Eligendi consequuntur fuga totam quo sequi iusto harum dolorum maiores similique, ex libero. Nostrum optio, tempora voluptates ea quibusdam ex omnis? Unde, aliquid at possimus ipsum dolore quo voluptatibus porro ea ipsam recusandae? Beatae exercitationem ullam provident expedita corporis consequatur suscipit at quam soluta alias natus cum veritatis dicta illum quia, dolore, id obcaecati?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Статья вторая',
                'subtitle' => 'Подзаголовок 12 статьи',
                'views' => 100,
                'favorite' => 100,
                'image' => 'cat.png',
                'article_bg' => 'spb_bg.jpg',
                'tags' => '#город',
                'info' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nobis eligendi vitae error asperiores impedit vel, iusto earum enim vero dolorum, minus quaerat sint quod consequuntur quae unde dolore eos illum provident saepe necessitatibus molestias. Saepe distinctio soluta magnam nesciunt possimus? Possimus veniam ipsum nobis provident! Eligendi consequuntur fuga totam quo sequi iusto harum dolorum maiores similique, ex libero. Nostrum optio, tempora voluptates ea quibusdam ex omnis? Unde, aliquid at possimus ipsum dolore quo voluptatibus porro ea ipsam recusandae? Beatae exercitationem ullam provident expedita corporis consequatur suscipit at quam soluta alias natus cum veritatis dicta illum quia, dolore, id obcaecati?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Статья третья',
                'subtitle' => 'Подзаголовок 13 статьи',
                'views' => 100,
                'favorite' => 100,
                'image' => 'cat.png',
                'article_bg' => 'spb_bg.jpg',
                'tags' => '#город #новости',
                'info' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nobis eligendi vitae error asperiores impedit vel, iusto earum enim vero dolorum, minus quaerat sint quod consequuntur quae unde dolore eos illum provident saepe necessitatibus molestias. Saepe distinctio soluta magnam nesciunt possimus? Possimus veniam ipsum nobis provident! Eligendi consequuntur fuga totam quo sequi iusto harum dolorum maiores similique, ex libero. Nostrum optio, tempora voluptates ea quibusdam ex omnis? Unde, aliquid at possimus ipsum dolore quo voluptatibus porro ea ipsam recusandae? Beatae exercitationem ullam provident expedita corporis consequatur suscipit at quam soluta alias natus cum veritatis dicta illum quia, dolore, id obcaecati?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Статья четвертая',
                'subtitle' => 'Подзаголовок 14 статьи',
                'views' => 100,
                'favorite' => 100,
                'image' => 'cat.png',
                'article_bg' => 'spb_bg.jpg',
                'tags' => '#новости #транспорт',
                'info' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nobis eligendi vitae error asperiores impedit vel, iusto earum enim vero dolorum, minus quaerat sint quod consequuntur quae unde dolore eos illum provident saepe necessitatibus molestias. Saepe distinctio soluta magnam nesciunt possimus? Possimus veniam ipsum nobis provident! Eligendi consequuntur fuga totam quo sequi iusto harum dolorum maiores similique, ex libero. Nostrum optio, tempora voluptates ea quibusdam ex omnis? Unde, aliquid at possimus ipsum dolore quo voluptatibus porro ea ipsam recusandae? Beatae exercitationem ullam provident expedita corporis consequatur suscipit at quam soluta alias natus cum veritatis dicta illum quia, dolore, id obcaecati?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Статья пятая',
                'subtitle' => 'Подзаголовок 15 статьи',
                'views' => 100,
                'favorite' => 100,
                'image' => 'cat.png',
                'article_bg' => 'spb_bg.jpg',
                'tags' => '#статья #транспорт',
                'info' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nobis eligendi vitae error asperiores impedit vel, iusto earum enim vero dolorum, minus quaerat sint quod consequuntur quae unde dolore eos illum provident saepe necessitatibus molestias. Saepe distinctio soluta magnam nesciunt possimus? Possimus veniam ipsum nobis provident! Eligendi consequuntur fuga totam quo sequi iusto harum dolorum maiores similique, ex libero. Nostrum optio, tempora voluptates ea quibusdam ex omnis? Unde, aliquid at possimus ipsum dolore quo voluptatibus porro ea ipsam recusandae? Beatae exercitationem ullam provident expedita corporis consequatur suscipit at quam soluta alias natus cum veritatis dicta illum quia, dolore, id obcaecati?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Статья шестая',
                'subtitle' => 'Подзаголовок 16 статьи',
                'views' => 100,
                'favorite' => 100,
                'image' => 'cat.png',
                'article_bg' => 'spb_bg.jpg',
                'tags' => '#транспорт',
                'info' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nobis eligendi vitae error asperiores impedit vel, iusto earum enim vero dolorum, minus quaerat sint quod consequuntur quae unde dolore eos illum provident saepe necessitatibus molestias. Saepe distinctio soluta magnam nesciunt possimus? Possimus veniam ipsum nobis provident! Eligendi consequuntur fuga totam quo sequi iusto harum dolorum maiores similique, ex libero. Nostrum optio, tempora voluptates ea quibusdam ex omnis? Unde, aliquid at possimus ipsum dolore quo voluptatibus porro ea ipsam recusandae? Beatae exercitationem ullam provident expedita corporis consequatur suscipit at quam soluta alias natus cum veritatis dicta illum quia, dolore, id obcaecati?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Статья седьмая',
                'subtitle' => 'Подзаголовок 17 статьи',
                'views' => 100,
                'favorite' => 100,
                'image' => 'cat.png',
                'article_bg' => 'spb_bg.jpg',
                'tags' => '#статья',
                'info' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nobis eligendi vitae error asperiores impedit vel, iusto earum enim vero dolorum, minus quaerat sint quod consequuntur quae unde dolore eos illum provident saepe necessitatibus molestias. Saepe distinctio soluta magnam nesciunt possimus? Possimus veniam ipsum nobis provident! Eligendi consequuntur fuga totam quo sequi iusto harum dolorum maiores similique, ex libero. Nostrum optio, tempora voluptates ea quibusdam ex omnis? Unde, aliquid at possimus ipsum dolore quo voluptatibus porro ea ipsam recusandae? Beatae exercitationem ullam provident expedita corporis consequatur suscipit at quam soluta alias natus cum veritatis dicta illum quia, dolore, id obcaecati?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Статья восьмая',
                'subtitle' => 'Подзаголовок 18 статьи',
                'views' => 100,
                'favorite' => 100,
                'image' => 'cat.png',
                'article_bg' => 'spb_bg.jpg',
                'tags' => '#город #новости #статья #транспорт',
                'info' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nobis eligendi vitae error asperiores impedit vel, iusto earum enim vero dolorum, minus quaerat sint quod consequuntur quae unde dolore eos illum provident saepe necessitatibus molestias. Saepe distinctio soluta magnam nesciunt possimus? Possimus veniam ipsum nobis provident! Eligendi consequuntur fuga totam quo sequi iusto harum dolorum maiores similique, ex libero. Nostrum optio, tempora voluptates ea quibusdam ex omnis? Unde, aliquid at possimus ipsum dolore quo voluptatibus porro ea ipsam recusandae? Beatae exercitationem ullam provident expedita corporis consequatur suscipit at quam soluta alias natus cum veritatis dicta illum quia, dolore, id obcaecati?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Статья девятая',
                'subtitle' => 'Подзаголовок 19 статьи',
                'views' => 100,
                'favorite' => 100,
                'image' => 'cat.png',
                'article_bg' => 'spb_bg.jpg',
                'tags' => '#город #новости #статья #транспорт',
                'info' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nobis eligendi vitae error asperiores impedit vel, iusto earum enim vero dolorum, minus quaerat sint quod consequuntur quae unde dolore eos illum provident saepe necessitatibus molestias. Saepe distinctio soluta magnam nesciunt possimus? Possimus veniam ipsum nobis provident! Eligendi consequuntur fuga totam quo sequi iusto harum dolorum maiores similique, ex libero. Nostrum optio, tempora voluptates ea quibusdam ex omnis? Unde, aliquid at possimus ipsum dolore quo voluptatibus porro ea ipsam recusandae? Beatae exercitationem ullam provident expedita corporis consequatur suscipit at quam soluta alias natus cum veritatis dicta illum quia, dolore, id obcaecati?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Статья десятая',
                'subtitle' => 'Подзаголовок 20 статьи',
                'views' => 100,
                'favorite' => 100,
                'image' => 'cat.png',
                'article_bg' => 'spb_bg.jpg',
                'tags' => '#город #новости #статья #транспорт',
                'info' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nobis eligendi vitae error asperiores impedit vel, iusto earum enim vero dolorum, minus quaerat sint quod consequuntur quae unde dolore eos illum provident saepe necessitatibus molestias. Saepe distinctio soluta magnam nesciunt possimus? Possimus veniam ipsum nobis provident! Eligendi consequuntur fuga totam quo sequi iusto harum dolorum maiores similique, ex libero. Nostrum optio, tempora voluptates ea quibusdam ex omnis? Unde, aliquid at possimus ipsum dolore quo voluptatibus porro ea ipsam recusandae? Beatae exercitationem ullam provident expedita corporis consequatur suscipit at quam soluta alias natus cum veritatis dicta illum quia, dolore, id obcaecati?',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
