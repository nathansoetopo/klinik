<?php

namespace App\Repositories;

use App\Models\Pasien;
use App\Interfaces\PasienRepositoryInterface;
use App\Models\User;
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

    public function getTodayData()
    {
        return Pasien::whereDate('created_at', Carbon::now())->get();
    }

    public function getDataPerYear()
    {
        return Pasien::whereYear('created_at', Carbon::now()->format('Y'))->get();
    }

    public function storeDataPasien($payload)
    {
        $user = User::create([
            'name' => $payload['name'],
        ]);
        $payload['user_id'] = $user->id;
        $payload['ttl'] = $payload['tempat_lahir'] . ', ' . $payload['tanggal_lahir'];
        return Pasien::create($payload);
    }

    public function updateDataPasien($payload, $pasienID)
    {
        $pasien = Pasien::find($pasienID);
        $pasien->users()->update([
            'name' => $payload['name'],
        ]);
        $payload['user_id'] = $pasien->users->id;
        $payload['ttl'] = $payload['tempat_lahir'] . ', ' . $payload['tanggal_lahir'];
        return $pasien->update($payload);
    }

    public function deleteDataPasien($pasienID)
    {
        $pasien = Pasien::find($pasienID);
        $pasien->users()->delete();
        return $pasien->delete();
    }

    public function detailDataPasien($pasienID)
    {
        $pasien = Pasien::find($pasienID);
        return $pasien;
    }
}
