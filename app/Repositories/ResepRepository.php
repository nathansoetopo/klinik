<?php

namespace App\Repositories;

use App\Models\Soap;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Interfaces\SOAPRepositoryInterface;
use App\Interfaces\ResepRepositoryInterface;
use App\Interfaces\PasienRepositoryInterface;
use App\Models\Resep;

class ResepRepository implements ResepRepositoryInterface
{
    public function store($payload)
    {
        return Resep::create([
            'pasien_id' => $payload['pasien_id'],
            'medicine_id' => $payload['medicine_id'],
            'desc' => $payload['desc'],
            'jml_obat' => $payload['jml_obat'],
            'aturan_pakai' => $payload['aturan_pakai'],
            'tanggal' => $payload['tanggal'],
        ]);
    }
}
