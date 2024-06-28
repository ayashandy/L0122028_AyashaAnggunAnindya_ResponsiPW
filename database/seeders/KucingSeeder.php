<?php

namespace Database\Seeders;

use App\Models\Kucing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KucingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kucing::factory(10)->create();
    }
}
