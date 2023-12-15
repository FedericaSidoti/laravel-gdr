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

            $bios = [
                'Una strega misteriosa con poteri oscuri, vestita con mantelli lunari e capelli argentati. Utilizza incantesimi magici per controllare ombre e illusioni.',
                'Un guerriero coraggioso con una spada infuocata e un armatura pesante. La sua determinazione in battaglia è leggendaria, e la sua forza è amplificata da una fiamma interiore.',
                'Una combattente agile e letale che padroneggia le arti del lancio di lame e frecce. Indossa un abito leggero e ha un abilità straordinaria nell attraversare il terreno con agilità.',
                'Un ladro astuto e abile nell arte dell\'inganno. Indossa un cappuccio oscuro e utilizza trappole e veleni per sconfiggere i suoi nemici, preferendo l\'ombra all\'azione frontale.',
                'Un mago potente con la capacità di controllare i venti e creare tempeste. La sua barba lunga e i suoi occhi elettrici sono indici della sua connessione con le forze naturali.',
                'Una paladina devota con un\'armatura luccicante e un\'ala d\'angelo. Usa una spada benedetta per difendere i deboli e guarire gli alleati durante le battaglie.',
                'Un inventore geniale con un braccio meccanico e gadget tecnologici. La sua intelligenza e la sua abilità nell\'ingegneria lo rendono un avversario formidabile e un alleato prezioso.',
                'Un necromante oscuro con un mantello inquietante e un\'armatura di ossa. Evoca creature dall\'aldilà e utilizza magie nere per infliggere danni devastanti.',
                "Un incantatrice infuocata con capelli ardenti e un vestito che sembra fatto di fiamme. Controlla il potere del fuoco per incenerire i suoi nemici e proteggere gli amici.",
                "Un samurai disciplinato con un armatura tradizionale e una spada fulminante. La sua maestria nel combattimento con la katana è equiparata solo dalla sua abilità nel manipolare il tuono."
            ];

            $newCharacter = new Character();

            $newCharacter->name = $faker->name();
            $newCharacter->bio = $faker->unique->randomElement($bios);
            $newCharacter->defence = $faker->numberBetween(1, 100);
            $newCharacter->speed = $faker->numberBetween(1, 100);
            $newCharacter->hp = $faker->numberBetween(1, 100);

            $newCharacter->save();
        }
    }
}
