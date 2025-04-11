<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Nguyễn Văn Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'phone' => '0123456789',
            'address' => 'Hà Nội',
            'role' => 2, // 2 là admin
        ]);

        User::create([
            'name' => 'Trần Thị Khách',
            'email' => 'khach@gmail.com',
            'password' => Hash::make('khach123'),
            'phone' => null,
            'address' => null,
            'role' => 1, // 1 là customer
        ]);
    }
}
