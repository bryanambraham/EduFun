<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Writer;
class WriterSeeder extends Seeder
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
        $specialization = ['Spesialis Data Science', 'Spesialis Network Security'];
        foreach(range(1,5) as $index){
            Writer::create([
                'name' => $faker->name,
                'specialization' => $faker->randomElement($specialization),
                'image' => $faker->imageURL(400, 400,'person'),
            ]);
        }
    }
}
