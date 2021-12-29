<?php

namespace Database\Seeders;

use App\Models\Catagory;
use Faker\Factory;
use Illuminate\Database\Seeder;
use function Symfony\Component\String\replace;

class CatagoiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        foreach (range(1, 20) as $index){
            $name =$faker->name;
            Catagory::create([
               'user_id' => rand(1,24),
               'name'    => $name,
                'slug'   => strtolower(str_replace(' ', '-', $name)),
                'status' => $this->randstatus()
            ]);
        }
    }
    private function randstatus(){
        $status = [
          'active' => 'active',
          'inactive'=>'inactive'
        ];
        return array_rand($status);
    }
}
