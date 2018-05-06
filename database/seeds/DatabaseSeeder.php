<?php

use Illuminate\Database\Seeder;
use App\Dish;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('dishes')->delete();
        $json = File::get("database/data/meals.json");
        $data = json_decode($json);

        foreach($data as $obj)
        {
            Dish::create([
                'name' => $obj->name,
                'name_trans' => $obj->name_trans,
            ]);
        } */
/* 
        $this->call([
            IngredientsSeed::class,
        ]); */

        
        $dishes = factory(App\Dish::class, 20)
            ->create()
            ->each(function ($d) {            
                $d->ingredients()->save(factory(App\Ingredient::class)->make());
                $d->category()->save(factory(App\Category::class)->make());
                $d->tags()->save(factory(App\Tag::class)->make());
        });  
    }
}
