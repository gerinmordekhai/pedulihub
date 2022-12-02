<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'ADMIN BOS',
                'username' => 'admin',
                'password' => bcrypt('admin123'),
                'role_id' => '1',
            ],
        ]);
    }
}
