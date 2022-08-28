<?php

namespace App\Repositories;

use App\Models\Dokter;
use App\Models\Pasien;
use App\Interfaces\DokterRepositoryInterface;
use App\Interfaces\PasienRepositoryInterface;

class DokterRepository implements DokterRepositoryInterface
{
    public function getAllPagination()
    {
        return Dokter::paginate(5);
    }
}
