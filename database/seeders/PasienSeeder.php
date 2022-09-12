<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            // [
            //     'user_id' => 5,
            //     'ttl' => 'Unknown, ' . Carbon::now()->format('d-m-Y'),
            //     'alamat' => 'Ngemplak',
            //     'pekerjaan' => 'Geh Developer',
            //     'jenis_pembayaran' => 'UMUM',
            // ],
            [
                'user_id' => 6,
                'ttl' => 'Unknown, ' . Carbon::now()->format('d-m-Y'),
                'alamat' => 'Ngehe',
                'pekerjaan' => 'Female Dancer',
                'jenis_pembayaran' => 'BPJS',
            ],
            [
                'user_id' => 7,
                'ttl' => 'Unknown, ' . Carbon::now()->format('d-m-Y'),
                'alamat' => 'Zimbabwe',
                'pekerjaan' => 'Hardcore Killer',
                'jenis_pembayaran' => 'UMUM',
            ],
            [
                'user_id' => 8,
                'ttl' => 'Unknown, ' . Carbon::now()->format('d-m-Y'),
                'alamat' => 'Saudi Arabia',
                'pekerjaan' => 'Chicken Cutter',
                'jenis_pembayaran' => 'BPJS',
            ],
        ])->each(function ($pasien) {
            Pasien::firstOrCreate($pasien);
        });
    }
}
