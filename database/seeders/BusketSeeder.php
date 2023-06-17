<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Busket;

class BusketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		  Busket::factory()
			->count(80)
			->create();
    }
}
