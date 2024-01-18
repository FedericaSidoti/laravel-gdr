<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = ['Druido', 'Barbaro', 'Guerriero', 'Stregone', 'Ladro', 'Mago', 'Monaco', 'Ranger', 'Paladino'];


        foreach ($types as $type_name) {
            $new_type = new Type();

            $new_type->name = $type_name;
            $new_type->description = $faker->paragraph();

            $new_type->save();
        }
    }
}
