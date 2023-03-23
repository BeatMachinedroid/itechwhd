<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            [
            'username'=>'IT WHD-Bakauheni',
            'email'=>'it.whdbakauheni@indonesiaferry.co.id',
            'location'=>'KANTOR CABANG - BAKAUHENI',
            'password'=>bcrypt('@K4mun4ny4?'),
            'role'=>'Admin',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
            ]
        ]);

        DB::table('request_types')->insert([
            [
                'name' => 'Cyber Security',
            ],
            [
                'name' => 'KSO TELKOM',
            ],
            [
                'name' => 'Layanan Akses Server',
            ],
            [
                'name' => 'Layanan Aplikasi',
            ],
            [
                'name' => 'Layanan Data Center',
            ],
            [
                'name' => 'Layanan Dukungan Pengguna',
            ],
            [
                'name' => 'Layanan End User Computing',
            ],
            [
                'name' => 'Layanan Jaringan dan Komunikasi',
            ],
            [
                'name' => 'Layanan Solusi Bisnis',
            ],
            [
                'name' => 'Layanan Teknis Internal',
            ],
            [
                'name' => 'Layanan Ticketing',
            ],
            [
                'name' => 'Parking secure',
            ],
        ]);
    }
}
