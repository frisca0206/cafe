<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OrderTable extends Migration
{
    private $table = 'order';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'drink_name_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'food_name_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'date' => [
                'type' => 'date',
                'null' => false,
            ],
            'items' => [
                'type' => 'int',
            ],
            'total_price' => [ 
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'total_paid' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'total_return' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('drink_name_id', 'drink', 'id','CASCADE', 'CASCADE');
        $this->forge->addForeignKey('food_name_id', 'food', 'id','CASCADE', 'CASCADE');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}