<?php

use App\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories =['spiritoso',  'samu', 'sei', 'strano', 'oggi', 'regressione', 'della', 'cresta', 'lupoLucio', 'fantabosco'];
        for ($i = 0; $i < count($categories); $i++){
            $newCategory = new Category();
            $newCategory->name = $categories[$i];
            $newCategory->color = $faker->unique()->hexColor();
            $newCategory->save();
        }
    }
}
