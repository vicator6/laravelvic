<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creation de 40 commentaires aléatoire
        factory(App\Models\Comment::class, 40)->create();
    }
}

