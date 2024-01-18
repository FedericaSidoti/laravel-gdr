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
        $items = ['Armatura', 'Scudo', 'Ascia', 'Giavellotto', 'Lancia', 'Pugnale', 'Martello Leggero', 'Arco', 'Balestra', 'Fionda', 'Dardo', 'Alabarda', 'Frusta', 'Piccone da Guerra', 'Spada', 'Scimitarra', 'Tridente', 'Cerbottana', 'Abito Comune', 'Veleno', 'Attrezzi da scalatore', 'Cannocchiale', 'Bacchetta', 'Verga', 'Libro', 'Rampino', 'Torcia', 'Tenda', 'Pozione di Guarigione'];

        foreach ($items as $item_name) {
            $new_item = new Item();

            $new_item->name = $item_name;
            $new_item->description = $faker->paragraph();
            $new_item->price = $faker->numberBetween(100, 1000);

            $new_item->save();
        }
    }
}
