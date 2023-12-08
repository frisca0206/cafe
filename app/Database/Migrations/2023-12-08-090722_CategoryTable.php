<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoryTable extends Migration
{
    private $table = 'category';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'category' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
        ]);
        $this->forge->addKey('id', true,);
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
