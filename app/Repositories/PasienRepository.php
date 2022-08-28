<?php

namespace App\Repositories;

use App\Models\Pasien;
use App\Interfaces\PasienRepositoryInterface;

class PasienRepository implements PasienRepositoryInterface
{
    public function getAllByDatePagination($date)
    {
        return Pasien::whereDate('created_at', $date)->paginate(5);
    }

    public function getAllPagination()
    {
        return Pasien::latest('id')->paginate(5);
    }
}
