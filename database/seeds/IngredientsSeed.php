<?php

use Illuminate\Database\Seeder;

class IngredientsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Ingredient::class, 10)->create();
    }
}
