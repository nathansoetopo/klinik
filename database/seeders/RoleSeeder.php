<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
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
                'name' => 'admin',
                'guard_name' => 'web',
            ],
            [
                'name' => 'dokter',
                'guard_name' => 'web',
            ],
            [
                'name' => 'pasien',
                'guard_name' => 'web',
            ],
            [
                'name' => 'kasir',
                'guard_name' => 'web',
            ],
        ])->each(function ($roles) {
            Role::firstOrcreate($roles);
        });
    }
}
