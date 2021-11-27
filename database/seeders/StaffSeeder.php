<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StaffSeeder extends Seeder
{
    public function run()
    {
        Staff::Create([
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('password'),
            'email' => 'admin@gmail.com',
            'phone' => '+994553336699',
            'address' => 'Baku',
            'gender' => 0,
            'salary' => 1000,
            'join_date' => now(),
            'identity_no' => 'AA1111111'
        ]);
    }
}
