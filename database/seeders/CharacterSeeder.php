<?php

namespace Database\Seeders;

use App\Models\Character;
// use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('it_IT');

        for ($i = 0; $i < 10; $i++) {
            $newCharacter = new Character();

            $newCharacter->name = $faker->name();
            $newCharacter->bio = $faker->paragraph();
            $newCharacter->defence = $faker->numberBetween(1, 100);
            $newCharacter->speed = $faker->numberBetween(1, 100);
            $newCharacter->hp = $faker->numberBetween(1, 100);

            $newCharacter->save();
        }
    }
}
