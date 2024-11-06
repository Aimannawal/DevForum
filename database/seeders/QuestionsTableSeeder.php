<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
        Question::create([
            'title' => 'Mengapa kode saya ini error?',
            'image' => 'assets/img/forum/z5DeI2cGvyU3nZOAoyyf1QC3eFD7LJPKMBi7vRPH.png',
            'body' => 'Bisakah seseorang membantu saya untuk menyelasaikan eror saya ini?',
            'user_id' => 1,
            'category_id' => 2,
        ]);
    }
}
