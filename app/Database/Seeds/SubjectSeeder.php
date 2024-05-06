<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;


class SubjectSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $paperCodes = ['java', 'cpp', 'php', 'mysql'];
        $data = [];
        $i = 1;
        foreach ($paperCodes as $paperCode) {
            $topics = $this->getPaperSubjectName($paperCode);
            foreach($topics as $topic){
                
                $data[] = [
                    'subject_code'        => $i,
                    'paper_code'          => $paperCode,
                    'subject_description' => $faker->paragraph(rand(3, 6)), 
                    'subject_name'        => $topic,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ];
                $i++;
            }
        }

        $this->db->table('subjects')->insertBatch($data);
    }

    private function getPaperSubjectName($paperCode)
    {
        switch ($paperCode) {
            case 'java':
                return ['array', 'function', 'string', 'oops'];
            case 'cpp':
                return ['pointers', 'classes', 'templates', 'inheritance'];
            case 'php':
                return ['variables', 'arrays', 'functions', 'oop'];
            case 'mysql':
                return ['queries', 'joins', 'indexes', 'transactions'];
            default:
                return [];
        }
    }
}
