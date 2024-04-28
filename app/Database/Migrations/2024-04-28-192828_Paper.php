<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Paper extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'pid' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'paper_name' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'paper_code' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'free_test' => [
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
        $this->forge->addPrimaryKey('pid');
        $this->forge->createTable('papers');
    }

    public function down()
    {
        $this->forge->dropTable('papers');

    }
}
