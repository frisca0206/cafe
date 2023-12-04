<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    private $table = 'food';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'food_name' => 'burger',
                'description' => 'daging, sayur, saus tomat dan saus cabe',
                'price' => '20000',
            ],
            [
                'id' => 2,
                'food_name' => 'corndog',
                'description' => 'siblings hotdog dan aneka saus',
                'price' => '10000',
            ],
            [
                'id' => 3,
                'food_name' => 'Roti Bakar',
                'description' => 'roti panggang dan selai',
                'price' => '8000',
            ],
            [
                'id' => 4,
                'food_name' => 'Toast',
                'description' => 'roti panggang terdapat beef, sayur dan aneka saus',
                'price' => '25000',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
