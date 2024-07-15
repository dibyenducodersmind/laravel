<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WEB\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'user_name' => 'Admin',
            'email' => 'admin@example.com',
            'password'=>md5(12345678),
            'status' => '1'
        ]);
    }
}
