<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post([
            'title'   => 'DPGU em Altamira',
            'content' => 'Post realizado pelo DPGF, Dr. Carlos Eduardo Barbosa Paz.'
        ]);
        $post->save();

        $post = new \App\Post([
            'title'   => 'DPU Intinerante no Ceará',
            'content' => 'Este é uma postagem do Diretor da ESDPU, Dr. Fernando Mauro de O. Junior, que esteve no estado por 1 semana.'
        ]);
        $post->save();
    }
}
