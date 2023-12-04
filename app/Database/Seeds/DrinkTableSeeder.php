<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DrinkTableSeeder extends Seeder
{   
    private $table = 'drink';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'drink_name' => 'ice americano',
                'price' => '15000',
            ],
            [
                'id' => 2,
                'drink_name' => 'brown sugar',
                'price' => '21000',
            ],
            [
                'id' => 3,
                'drink_name' => 'cappucino',
                'price' => '18000'
            ],
            [
                'id' => 4,
                'drink_name' => 'mineral water',
                'price' => '3000',
            ],
            [
                'id' => 5,
                'drink_name' => 'banana smoothies',
                'price' => '15000',
            ],
            [
                'id' => 6,
                'drink_name' => 'alpukat juice',
                'price' => '10000',
            ],
            [
                'id' => 7,
                'drink_name' => 'mochacino',
                'price' => '16000'
            ],
            [
                'id' => 8,
                'drink_name' => 'strawberry smoothies',
                'price' => '15000',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
