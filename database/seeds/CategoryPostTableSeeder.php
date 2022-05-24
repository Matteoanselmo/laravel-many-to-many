<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Category;

class CategoryPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $category_ids = Category::pluck('id')->toArray();

        $posts = Post::all();
        foreach($posts as $post){
            $post->categories()->sync($faker->randomElement($category_ids, 2));
        }
    }
}

