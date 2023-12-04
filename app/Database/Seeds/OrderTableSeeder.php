<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    private $table = 'order';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'drink_name_id' => 2,
                'food_name_id' => 4,
                'date' => '2023-12-01',
                'items' => 2,
                'total_price' => '46000',
                'total_paid' => '50000',
                'total_return' => '4000',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
