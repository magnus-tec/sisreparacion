<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder 
{
    public function run() 
    {
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'Sistema',
            'username' => 'admin',
            'password' => Hash::make('password'),
            'role_id' => 1, // Rol de administrador
        ]);    
    }
}