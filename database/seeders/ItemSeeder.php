<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 15; $i++) {
            $new_item = new Item();

            $new_item->name = $faker->word();
            $new_item->description = $faker->paragraph();
            $new_item->price = $faker->numberBetween(100, 1000);

            $new_item->save();
        }
    }
}
