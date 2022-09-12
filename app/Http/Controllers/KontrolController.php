<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Models\RiwayatKontrol;
use App\Http\Requests\KontrolRequest;

class KontrolController extends Controller
{
    public function index()
    {
        $pasien = Pasien::latest('id')->paginate(10);
        return view('admin.data-kontrol', compact('pasien'));
    }

    public function store(KontrolRequest $request)
    {
        $payload = $request->validated();
        try {
            RiwayatKontrol::create($payload);
            return redirect()->back()->with('status', 'Data kontrol berhasil ditambahkan');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function lists($pasienID)
    {
        $pasien = Pasien::find($pasienID);
        if (!$pasien) {
            return redirect()->back()->with('error', 'Data pasien tidak ditemukan');
        }
        $kontrol = $pasien->riwayat_kontrol()->paginate(10);
        return view('admin.data-kontrol-list', compact('kontrol'));
    }

    public function detail($kontrolID)
    {
        $kontrol = RiwayatKontrol::find($kontrolID);
        if (!$kontrol) {
            return redirect()->back()->with('error', 'Data riwayat tidak ditemukan');
        }
        $pasien = $kontrol->pasien()->first();
        $jenis = ['UMUM', 'BPJS'];
        return view('admin.data-kontrol-detail', compact('kontrol', 'pasien', 'jenis'));
    }

    public function update(KontrolRequest $request, $kontrolID)
    {
        $kontrol = RiwayatKontrol::find($kontrolID);
        if (!$kontrol) {
            return redirect()->back()->with('error', 'Data riwayat tidak ditemukan');
        }
        $payload = $request->validated();
        try {
            $kontrol->update($payload);
            return redirect()->back()->with('status', 'Data kontrol berhasil diupdate');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
