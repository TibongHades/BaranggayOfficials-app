<?php

namespace Database\Seeders;

use App\Models\BarangayOfficial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangayOfficialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BarangayOfficial::factory()->count(20)->create();
    }
}
