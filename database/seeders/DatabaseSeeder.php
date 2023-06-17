<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Category;
use App\Models\Products;
use App\Models\Busket;

use Illuminate\Database\Seeder;
use Database\Seeders\ProductTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
			User::factory(10)->create();

			$this->call([
					CategorySeeder::class,
					BusketSeeder::class
			]);

    }
}
