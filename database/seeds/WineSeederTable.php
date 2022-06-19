<?php

use Illuminate\Database\Seeder;
use App\Wine;
use Faker\Generator as Faker;


class WineSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i = 0; $i < 20; $i++){
            $newWine = new Wine();
            $newWine->name = $faker->word(3);
            $newWine->wine_cellar = $faker->word(4);
            $newWine->type = $faker->safeColorName();
            $newWine->price = $faker->randomFloat(2, 1, 250);

            $newWine->save();
        }
    }
}
