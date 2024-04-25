<?php

namespace Database\Seeders;

use App\Models\staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class staffSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        staff::factory(8)->create();
    }
}
