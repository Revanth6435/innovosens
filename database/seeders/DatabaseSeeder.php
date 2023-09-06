<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $res = new User;
        $res->name = 'Admin';
        $res->email = 'admin@admin.com';
        $res->password = Hash::make('Admin');
        $res->save();
    }
}
