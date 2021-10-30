<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 99; $i++)
            DB::table('posts')->insert([
                'title' => Str::random('30'),
                'intro' => Str::random('50'),
                'image' => Str::random('10'),
                'detail' => 'Đây là nội dung của bài viết',
                'category_id' => rand(103, 202)
            ]);

        $query = "INSERT INTO posts(title, intro, image, detail, category) VALUES ('".Str::random('30')."') ";


    }
}
