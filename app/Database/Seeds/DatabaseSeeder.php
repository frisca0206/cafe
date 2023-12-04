<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('DrinkTableSeeder');
        $this->call('FoodTableSeeder');
        $this->call('OrderTableSeeder');
    }
}
