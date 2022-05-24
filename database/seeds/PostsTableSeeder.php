<?php
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Models\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){
            $newPost = new Post();
            $newPost->title = $faker->word(3, true);
            $newPost->author = $faker->word(3, true);
            $newPost->description = $faker->paragraphs(7, true);
            $newPost->image_url = "https://picsum.photos/id/$i/350/350";
            $newPost->slug = Str::slug($newPost->title, '-') . "-$i";
            $newPost->save();

        }
    }
}
