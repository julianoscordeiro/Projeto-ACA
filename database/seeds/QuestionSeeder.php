<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'assunto' => Str::random(20),
            'enunciado' => Str::random(20),
            'alternativaA' => Str::random(20),
            'alternativaB' => Str::random(20),
            'alternativaC' => Str::random(20),
            'alternativaD' => Str::random(20),
            'alternativaE' => Str::random(20),
            'resposta' => 'A',
            'user_id' => 1 ,
        ]);
 
    }
}
