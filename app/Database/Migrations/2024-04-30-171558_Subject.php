<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Subject extends Migration
{
    public function up()
    {
         $this->forge->addField([
        'subject_code' => [
            'type'           => 'INT',
            'constraint'     => 11,
            'unsigned'       => true,
            'auto_increment' => true,
        ],
        'paper_code' => [
            'type'       => 'VARCHAR',
            'constraint' => 50,
            'null'       => false,
        ],
        'subject_name' => [
            'type'       => 'VARCHAR',
            'constraint' => 50,
            'null'       => false,
        ],
        'subject_description' => [
            'type'       => 'TEXT',
            'null'       => false,
        ],
        'created_at TIMESTAMP default current_timestamp',
        'updated_at TIMESTAMP default current_timestamp on update current_timestamp',
        'deleted_at TIMESTAMP default current_timestamp on update current_timestamp'
    ]);
    $this->forge->addPrimaryKey('subject_code');
    $this->forge->createTable('subjects');
    }

    public function down()
    {
        $this->forge->dropTable('subjects');
    }
}
