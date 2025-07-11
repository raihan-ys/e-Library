<?php

namespace Database\Seeders;

use App\Models\MemberType;
use Illuminate\Database\Seeder;

class MemberTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MemberType::create(['name' => 'Dosen']);
        MemberType::create(['name' => 'Guru']);
        MemberType::create(['name' => 'Mahasiswa']);
        MemberType::create(['name' => 'Pelajar']);
        MemberType::create(['name' => 'Umum']);
    }
}
