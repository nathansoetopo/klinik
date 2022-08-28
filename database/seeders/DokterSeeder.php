<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
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
                'user_id' => 2,
                'ttl' => Carbon::now(),
                'alamat' => 'Unknown',
                'spesialis' => 'Spesialis Dukun Ahli',
            ],
            [
                'user_id' => 3,
                'ttl' => Carbon::now(),
                'alamat' => 'Unknown',
                'spesialis' => 'Spesialis Dukun Senior',
            ],
            [
                'user_id' => 4,
                'ttl' => Carbon::now(),
                'alamat' => 'Unknown',
                'spesialis' => 'Spesialis Dukun Junior',
            ],
        ])->each(function ($dokter) {
            Dokter::create($dokter);
        });
    }
}
