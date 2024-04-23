<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('articles')->insert([
                'title' => 'Sample Article ' . ($i + 1),
                'url' => 'https://example.com/article_' . ($i + 1),
                'comment' => 'This is a sample comment for article1 ' . ($i + 1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            DB::table('articles')->insert([
                'title' => 'Sample Google ' . ($i + 1),
                'url' => 'hhttps://www.google.com/' . ($i + 1),
                'comment' => 'This is a sample comment for article2 ' . ($i + 1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            DB::table('articles')->insert([
                'title' => 'Sample Yahoo! JAPAN' . ($i + 1),
                'url' => 'https://www.yahoo.co.jp/' . ($i + 1),
                'comment' => 'This is a sample comment for article3 ' . ($i + 1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            DB::table('articles')->insert([
                'title' => 'Sample Qiita' . ($i + 1),
                'url' => 'https://qiita.com/' . ($i + 1),
                'comment' => 'This is a sample comment for article4 ' . ($i + 1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
