<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tests extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'test_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'paper_code' => [
                'type'           => 'VARCHAR',
                'constraint'     => "200",
                'null'       => false,
            ],
            'subject_code' => [
                'type'           => 'VARCHAR',
                'constraint'     => "500",
                'null'       => false,
            ],
            'test_name' => [
                'type'           => 'VARCHAR',
                'constraint'     => "500",
                'null'       => false,
            ],
            'test_description' => [
                'type'           => 'TEXT',
                'null'       => false,
            ],
            'views' => [
                'type'       => 'INT',
                'null'       => false,
            ],
            'likes' => [
                'type'       => 'INT',
                'null'       => false,
            ],
            'attempts' => [
                'type'       => 'INT',
                'null'       => false,
            ],
            'created_at TIMESTAMP default current_timestamp',
            'updated_at TIMESTAMP default current_timestamp on update current_timestamp',
            'deleted_at TIMESTAMP default current_timestamp on update current_timestamp'
        ]);
        $this->forge->addPrimaryKey('test_id');
        $this->forge->createTable('tests');
    }

    public function down()
    {
        $this->forge->dropTable('tests');
    }
}
