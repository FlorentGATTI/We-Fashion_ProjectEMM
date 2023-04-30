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
        // Crée le premier utilsateur
        DB::table('users')->insert([
            'name' => 'Edouard',
            'email' => 'edouard@admin.com',
            'password' => Hash::make('password'),
        ]);
    }
}
