<?php

namespace Database\Seeders;


use App\Models\Post;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        foreach (range(1, 23) as $index){
            $name =$faker->name;
            Post::create([
                'user_id' => rand(1,24),
                'category_id' => rand(1,5),
                'title'    => $name,
                'slug'   => strtolower(str_replace(' ', '-', $name)),
                'desc' => $faker->paragraph(),
                'image' => $faker->imageUrl(),
                'status' => 'active'
            ]);
        }
    }
}
