<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@test.test',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Dr. Diki Samsudin Jadab',
                'username' => 'diki',
                'email' => 'diki@test.test',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Dr. Nathan Samsudin Jadab',
                'username' => 'nathan',
                'email' => 'nathan@test.test',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Dr. Ridwan Samsudin Jadab',
                'username' => 'ridwan',
                'email' => 'ridwan@test.test',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Refinaldy Keracunan Geh',
                'username' => 'refinaldy',
                'email' => 'refinaldy@test.test',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Revydo Jedag Jedug',
                'username' => 'revydo',
                'email' => 'revydo@test.test',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Mikel Luka Mendalam',
                'username' => 'mikel',
                'email' => 'mikel@test.test',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Ian Ayamnya Terpotong',
                'username' => 'ian',
                'email' => 'ian@test.test',
                'password' => Hash::make('password'),
            ],
        ])->each(function ($users) {
            $user = User::firstOrcreate($users);
            $user->id == 1 ? $user->assignRole('admin') : '';
            $user->id == 2 ? $user->assignRole('dokter') : '';
            $user->id == 3 ? $user->assignRole('dokter') : '';
            $user->id == 4 ? $user->assignRole('dokter') : '';
            $user->id == 5 ? $user->assignRole('kasir') : '';
            $user->id > 5 ? $user->assignRole('pasien') : '';
        });
    }
}
