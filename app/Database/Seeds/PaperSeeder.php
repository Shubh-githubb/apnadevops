<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class PaperSeeder extends Seeder
{
    public function run()
    {

        $data = [];
        $papers = [
            [
                "paperName" => "Java Programming",
                "paperCode" => "java"
            ],
            [
                "paperName" => "C++/Cpp Language",
                "paperCode" => "cpp",
            ],
            [
                "paperName" => "PHP Scripting Language",
                "paperCode" => "php",
            ],
            [
                "paperName" => "Mysql Database",
                "paperCode" => "mysql",
            ]
        ];
        for ($i = 0; $i < count($papers); $i++) {
            $data[] = [
                'pid' => $i+1,
                'paper_name' => $papers[$i]['paperName'],
                'paper_code' => $papers[$i]['paperCode'],
                'free_test' => rand(3,10),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
        }

        $this->db->table('papers')->insertBatch($data);
    }
}
