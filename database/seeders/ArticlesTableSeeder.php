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
                'subtitle' => 'Подзаголовок первой статьи',
                'views' => 100,
                'favorite' => 100,
                'image' => 'cat.png',
                'info' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nobis eligendi vitae error asperiores impedit vel, iusto earum enim vero dolorum, minus quaerat sint quod consequuntur quae unde dolore eos illum provident saepe necessitatibus molestias. Saepe distinctio soluta magnam nesciunt possimus? Possimus veniam ipsum nobis provident! Eligendi consequuntur fuga totam quo sequi iusto harum dolorum maiores similique, ex libero. Nostrum optio, tempora voluptates ea quibusdam ex omnis? Unde, aliquid at possimus ipsum dolore quo voluptatibus porro ea ipsam recusandae? Beatae exercitationem ullam provident expedita corporis consequatur suscipit at quam soluta alias natus cum veritatis dicta illum quia, dolore, id obcaecati?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Статья вторая',
                'subtitle' => 'Подзаголовок первой статьи',
                'views' => 100,
                'favorite' => 100,
                'image' => 'cat.png',
                'info' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nobis eligendi vitae error asperiores impedit vel, iusto earum enim vero dolorum, minus quaerat sint quod consequuntur quae unde dolore eos illum provident saepe necessitatibus molestias. Saepe distinctio soluta magnam nesciunt possimus? Possimus veniam ipsum nobis provident! Eligendi consequuntur fuga totam quo sequi iusto harum dolorum maiores similique, ex libero. Nostrum optio, tempora voluptates ea quibusdam ex omnis? Unde, aliquid at possimus ipsum dolore quo voluptatibus porro ea ipsam recusandae? Beatae exercitationem ullam provident expedita corporis consequatur suscipit at quam soluta alias natus cum veritatis dicta illum quia, dolore, id obcaecati?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Статья третья',
                'subtitle' => 'Подзаголовок первой статьи',
                'views' => 100,
                'favorite' => 100,
                'image' => 'cat.png',
                'info' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nobis eligendi vitae error asperiores impedit vel, iusto earum enim vero dolorum, minus quaerat sint quod consequuntur quae unde dolore eos illum provident saepe necessitatibus molestias. Saepe distinctio soluta magnam nesciunt possimus? Possimus veniam ipsum nobis provident! Eligendi consequuntur fuga totam quo sequi iusto harum dolorum maiores similique, ex libero. Nostrum optio, tempora voluptates ea quibusdam ex omnis? Unde, aliquid at possimus ipsum dolore quo voluptatibus porro ea ipsam recusandae? Beatae exercitationem ullam provident expedita corporis consequatur suscipit at quam soluta alias natus cum veritatis dicta illum quia, dolore, id obcaecati?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Статья четвертая',
                'subtitle' => 'Подзаголовок первой статьи',
                'views' => 100,
                'favorite' => 100,
                'image' => 'cat.png',
                'info' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nobis eligendi vitae error asperiores impedit vel, iusto earum enim vero dolorum, minus quaerat sint quod consequuntur quae unde dolore eos illum provident saepe necessitatibus molestias. Saepe distinctio soluta magnam nesciunt possimus? Possimus veniam ipsum nobis provident! Eligendi consequuntur fuga totam quo sequi iusto harum dolorum maiores similique, ex libero. Nostrum optio, tempora voluptates ea quibusdam ex omnis? Unde, aliquid at possimus ipsum dolore quo voluptatibus porro ea ipsam recusandae? Beatae exercitationem ullam provident expedita corporis consequatur suscipit at quam soluta alias natus cum veritatis dicta illum quia, dolore, id obcaecati?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Статья пятая',
                'subtitle' => 'Подзаголовок первой статьи',
                'views' => 100,
                'favorite' => 100,
                'image' => 'cat.png',
                'info' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nobis eligendi vitae error asperiores impedit vel, iusto earum enim vero dolorum, minus quaerat sint quod consequuntur quae unde dolore eos illum provident saepe necessitatibus molestias. Saepe distinctio soluta magnam nesciunt possimus? Possimus veniam ipsum nobis provident! Eligendi consequuntur fuga totam quo sequi iusto harum dolorum maiores similique, ex libero. Nostrum optio, tempora voluptates ea quibusdam ex omnis? Unde, aliquid at possimus ipsum dolore quo voluptatibus porro ea ipsam recusandae? Beatae exercitationem ullam provident expedita corporis consequatur suscipit at quam soluta alias natus cum veritatis dicta illum quia, dolore, id obcaecati?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Статья шестая',
                'subtitle' => 'Подзаголовок первой статьи',
                'views' => 100,
                'favorite' => 100,
                'image' => 'cat.png',
                'info' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nobis eligendi vitae error asperiores impedit vel, iusto earum enim vero dolorum, minus quaerat sint quod consequuntur quae unde dolore eos illum provident saepe necessitatibus molestias. Saepe distinctio soluta magnam nesciunt possimus? Possimus veniam ipsum nobis provident! Eligendi consequuntur fuga totam quo sequi iusto harum dolorum maiores similique, ex libero. Nostrum optio, tempora voluptates ea quibusdam ex omnis? Unde, aliquid at possimus ipsum dolore quo voluptatibus porro ea ipsam recusandae? Beatae exercitationem ullam provident expedita corporis consequatur suscipit at quam soluta alias natus cum veritatis dicta illum quia, dolore, id obcaecati?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Статья седьмая',
                'subtitle' => 'Подзаголовок первой статьи',
                'views' => 100,
                'favorite' => 100,
                'image' => 'cat.png',
                'info' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nobis eligendi vitae error asperiores impedit vel, iusto earum enim vero dolorum, minus quaerat sint quod consequuntur quae unde dolore eos illum provident saepe necessitatibus molestias. Saepe distinctio soluta magnam nesciunt possimus? Possimus veniam ipsum nobis provident! Eligendi consequuntur fuga totam quo sequi iusto harum dolorum maiores similique, ex libero. Nostrum optio, tempora voluptates ea quibusdam ex omnis? Unde, aliquid at possimus ipsum dolore quo voluptatibus porro ea ipsam recusandae? Beatae exercitationem ullam provident expedita corporis consequatur suscipit at quam soluta alias natus cum veritatis dicta illum quia, dolore, id obcaecati?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Статья восьмая',
                'subtitle' => 'Подзаголовок первой статьи',
                'views' => 100,
                'favorite' => 100,
                'image' => 'cat.png',
                'info' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nobis eligendi vitae error asperiores impedit vel, iusto earum enim vero dolorum, minus quaerat sint quod consequuntur quae unde dolore eos illum provident saepe necessitatibus molestias. Saepe distinctio soluta magnam nesciunt possimus? Possimus veniam ipsum nobis provident! Eligendi consequuntur fuga totam quo sequi iusto harum dolorum maiores similique, ex libero. Nostrum optio, tempora voluptates ea quibusdam ex omnis? Unde, aliquid at possimus ipsum dolore quo voluptatibus porro ea ipsam recusandae? Beatae exercitationem ullam provident expedita corporis consequatur suscipit at quam soluta alias natus cum veritatis dicta illum quia, dolore, id obcaecati?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Статья девятая',
                'subtitle' => 'Подзаголовок первой статьи',
                'views' => 100,
                'favorite' => 100,
                'image' => 'cat.png',
                'info' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nobis eligendi vitae error asperiores impedit vel, iusto earum enim vero dolorum, minus quaerat sint quod consequuntur quae unde dolore eos illum provident saepe necessitatibus molestias. Saepe distinctio soluta magnam nesciunt possimus? Possimus veniam ipsum nobis provident! Eligendi consequuntur fuga totam quo sequi iusto harum dolorum maiores similique, ex libero. Nostrum optio, tempora voluptates ea quibusdam ex omnis? Unde, aliquid at possimus ipsum dolore quo voluptatibus porro ea ipsam recusandae? Beatae exercitationem ullam provident expedita corporis consequatur suscipit at quam soluta alias natus cum veritatis dicta illum quia, dolore, id obcaecati?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Статья десятая',
                'subtitle' => 'Подзаголовок первой статьи',
                'views' => 100,
                'favorite' => 100,
                'image' => 'cat.png',
                'info' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis nobis eligendi vitae error asperiores impedit vel, iusto earum enim vero dolorum, minus quaerat sint quod consequuntur quae unde dolore eos illum provident saepe necessitatibus molestias. Saepe distinctio soluta magnam nesciunt possimus? Possimus veniam ipsum nobis provident! Eligendi consequuntur fuga totam quo sequi iusto harum dolorum maiores similique, ex libero. Nostrum optio, tempora voluptates ea quibusdam ex omnis? Unde, aliquid at possimus ipsum dolore quo voluptatibus porro ea ipsam recusandae? Beatae exercitationem ullam provident expedita corporis consequatur suscipit at quam soluta alias natus cum veritatis dicta illum quia, dolore, id obcaecati?',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
