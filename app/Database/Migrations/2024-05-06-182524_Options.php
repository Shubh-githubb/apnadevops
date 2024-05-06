<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Options extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'oid' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'option_key' => [
                'type'       => 'VARCHAR',
                'constraint' => 300,
                'null'       => false,
            ],
            'option_value' => [
                'type'       => 'TEXT',
                'constraint' => 50,
                'null'       => false,
            ]
        ]);
        $this->forge->addPrimaryKey('oid');
        $this->forge->createTable('options');
    
    }

    public function down()
    {
        $this->forge->dropTable('options');
    }
}
