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
            'corret_count' => [
                'type'       => 'INT',
                'null'       => false,
            ],
            'wrong_count' => [
                'type'       => 'INT',
                'null'       => false,
            ],
            'view' => [
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
        $this->forge->dropTable('quiz');
    }
}