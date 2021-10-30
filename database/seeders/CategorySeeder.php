<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++)
            DB::table('categories')->insert([
                'title' => Str::random(10),
                'parent_id' => 0,
                'desc' => Str::random(20)
            ]);
    }
}
