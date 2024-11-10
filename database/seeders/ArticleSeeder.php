<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Article;
use App\Models\Writer;
use App\Models\Category;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        $writerIds = Writer::pluck('id')->toArray();
        $categoryIds = Category::pluck('id')->toArray();

        foreach(range(1,7) as $index){
            Article::create([
                'title'=> $faker->text(10),
                'image' => $faker->imageURL(1200, 628,'scenery'),
                'summary' => $faker->paragraph,
                'writer_id' => $faker->randomElement($writerIds),
                'category_id' => $faker->randomElement($categoryIds),
                'description' => $faker->sentence,
                'published_date' => $faker->date,
            ]);
        }
    }
}
