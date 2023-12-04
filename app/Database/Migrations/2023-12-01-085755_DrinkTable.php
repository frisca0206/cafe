<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DrinkTable extends Migration
{
    private $table = 'drink';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'drink_name' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'price' => [
                'type' => 'int',
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
