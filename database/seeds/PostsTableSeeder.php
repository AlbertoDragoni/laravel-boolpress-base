<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 30; $i++) {
        $post = new Post;
        $post->title= $faker->sentence(6, true);
        $post->slug = Str::slug($post->title , '-') . $post->id;
        $post->body= $faker->text(200);
        $post->author= $faker->sentence(6, true);
        $post->published= $faker->randomDigitNot(0, 1);
        $post->src= 'https://picsum.photos/200/300';
        $post->save();
      }
    }
}
