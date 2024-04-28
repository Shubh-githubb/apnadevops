<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Questions extends Migration
{
    public function up()
    {
        // Define the quiz table schema
        $this->forge->addField([
            'qid' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'question' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'opt1' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'opt2' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'opt3' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'opt4' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'answer' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'description' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'correct' => [
                'type'       => 'INT',
                'null'       => false,
            ],
            'attempts' => [
                'type'       => 'INT',
                'null'       => false,
            ],
            'paper_code' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'test_id' => [
                'type'       => 'INT',
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
            'difficultly_level' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'type' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'marks' => [
                'type'       => 'INT',
                'null'       => false,
            ],
            'negative_mark' => [
                'type'       => 'INT',
                'null'       => false,
            ],
            'created_at' => [
                'type'       => 'TIMESTAMP',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'TIMESTAMP',
                'null'       => true,
            ],
        ]);
        $this->forge->addPrimaryKey('qid');
        $this->forge->createTable('questions');
    }

    public function down()
    {
        // Drop the quiz table if it exists
        $this->forge->dropTable('questions');
    }
}