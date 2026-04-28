<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name'      =>  'Admin Bangda',
            'username'  =>  'adminbangda',
            'password'  =>  Hash::make('Bangda123hmmyaa')
        ]);
    }
}
