<?php

namespace App\Repositories;

use App\Models\Dokter;
use App\Models\Pasien;
use App\Interfaces\SOAPRepositoryInterface;
use App\Interfaces\PasienRepositoryInterface;
use App\Models\Soap;

class SOAPRepository implements SOAPRepositoryInterface
{
    public function store($payload, $userID)
    {
        $payload['user_id'] = $userID;
        return Soap::create($payload);
    }
}
