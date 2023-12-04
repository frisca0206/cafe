<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FoodTable extends Migration
{
    private $table = 'food';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'food_name' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'description' => [
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
