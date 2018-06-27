<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Fresh\Post::class, 500)->create()->each(function ($post) {
            $post->save();
        });
    }
}
