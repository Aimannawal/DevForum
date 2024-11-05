<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
        Question::create([
            'title' => 'Lebih enak mana, Laravel atau CodeIgniter?',
            'body' => 'Bisakah seseorang membantu saya untuk memilih antara Laravel atau CodeIgniter?',
            'user_id' => 1,
            'category_id' => 2,
        ]);

        Question::create([
            'title' => 'React atau Vue.js?',
            'body' => 'Saya bisa memilih antara React atau Vue.js?',
            'user_id' => 2,
            'category_id' => 1,
        ]);
    }
}
