<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    private $table = 'category';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'category' => 'jus',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
