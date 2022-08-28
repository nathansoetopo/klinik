<?php

namespace App\Repositories;

use App\Models\Pasien;
use App\Interfaces\PasienRepositoryInterface;
use Carbon\Carbon;

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

    public function getTodayData(){
        return Pasien::whereDate('created_at', Carbon::now())->get();
    }

    public function getDataPerYear(){
        return Pasien::whereYear('created_at', Carbon::now()->format('Y'))->get();
    }
}
