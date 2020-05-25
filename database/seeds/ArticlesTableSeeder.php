<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker; 
use App\Article;
use Carbon\Carbon;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $article = new Article;
            $article->title = $faker->sentence(6, true); 
            $article->author = $faker->name();
            $article->img = 'https://picsum.photos/200/300';
            $article->body = $faker->paragraph(6, true);
            $article->location = $faker->city();
            $article->published = rand(0,1);
            $now = Carbon::now()->format('Y-m-d-H-i-s');
            $article->slug = Str::slug($article->title, '-') . $now;
            $article->save();
        }
    }
}
