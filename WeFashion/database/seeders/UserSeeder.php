<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create the first user
        DB::table('users')->insert([
            'name' => 'Edouard',
            'email' => 'edouard@admin.com',
            'password' => Hash::make('password'),
        ]);

        // Create the second user
        User::create([
            'name' => 'John',
            'email' => 'john@doe.com',
            'password' => Hash::make('password'),
        ]);
    }
}
