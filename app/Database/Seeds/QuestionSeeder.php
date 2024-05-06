<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;
class QuestionSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        $data = [];
        
        for ($i = 0; $i < 5100; $i++) {
            $paper_code   = $faker->randomElement(['java', 'cpp', 'php', 'mysql']);
            $subject_code = $this->getPaperSubjectCode($paper_code);
            
            $data[] = [
                'question' => $faker->sentence,
                'opt1'     => $faker->word,
                'opt2'     => $faker->word,
                'opt3'     => $faker->word,
                'opt4'     => $faker->word,
                'answer'      => $faker->randomElement(['opt1', 'opt2', 'opt3', 'opt4']),
                'description' => $faker->paragraph,
                'correct'     => rand(99, 299),
                'attempts'    => rand(299, 899),
                'paper_code'  => $paper_code,
                'subject_code' => $faker->randomElement($subject_code),
                'test_id'      => 0,
                'likes'        => rand(199,299),
                "difficulty_level" => $faker->randomElement(['easy', 'medium', 'hard']),
                "type"              => 'mcq',
                "marks"             => $faker->randomElement([100, 125, 150, 200, 250, 500 ]),
                "negative_mark"     => $faker->randomElement([0,25,50, 100, 150,]),
                'views'             => rand(999, 1111),
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s')
            ];
        }

        $this->db->table('questions')->insertBatch($data);
    }

    private function getPaperSubjectCode($paperCode)
    {
        switch ($paperCode) {
            case 'java':
                return [1,2,3,4];
            case 'cpp':
                return [5,6,7,8,];
            case 'php':
                return [9,10,11,12];
            case 'mysql':
                return [13,14,15,16];
            default:
                return [];
        }
    }
}
