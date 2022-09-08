<?php

namespace Database\Seeders;

use App\Models\Medicine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
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
                'name' => 'Demacolin',
                'desc' => 'Test',
                'type' => 'Tablet',
                'category' => 'Bebas',
            ],
            [
                'name' => 'Bodrex',
                'desc' => 'Test',
                'type' => 'Kapsul',
                'category' => 'Bebas',
            ],
            [
                'name' => 'Mediklin TR',
                'desc' => 'Test',
                'type' => 'Oles',
                'category' => 'Bebas',
            ],
            [
                'name' => 'Laserin',
                'desc' => 'Test',
                'type' => 'Cair',
                'category' => 'Bebas',
            ],
            [
                'name' => 'Herocyn',
                'desc' => 'Test',
                'type' => 'Oles',
                'category' => 'Bebas',
            ],
        ])->each(function ($medicines) {
            Medicine::create($medicines);
        });
    }
}
