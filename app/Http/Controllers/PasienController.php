<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasienRequest;
use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Repositories\DokterRepository;
use App\Repositories\PasienRepository;
use Exception;

class PasienController extends Controller
{
    private PasienRepository $pasienRepository;
    private DokterRepository $dokterRepository;

    public function __construct(PasienRepository $pasienRepository, DokterRepository $dokterRepository)
    {
        $this->pasienRepository = $pasienRepository;
        $this->dokterRepository = $dokterRepository;
    }

    public function detail($pasienID)
    {
        $pasien = $this->pasienRepository->detailDataPasien($pasienID);
        if (!$pasien) {
            return redirect()->back()->with('error', 'Data pasien tidak ditemukan');
        }
        return view('admin.datapasiendetail', compact('pasien'));
    }

    public function store(PasienRequest $request)
    {
        $payload = $request->validated();
        try {
            $this->pasienRepository->storeDataPasien($payload);
            return redirect()->back()->with('status', 'Data pasien berhasil diinputkan');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update(PasienRequest $request, $pasienID)
    {
        $pasien = $this->pasienRepository->detailDataPasien($pasienID);
        if (!$pasien) {
            return redirect()->back()->with('error', 'Data pasien tidak ditemukan');
        }
        $payload = $request->validated();
        try {
            $this->pasienRepository->updateDataPasien($payload, $pasienID);
            return redirect()->back()->with('status', 'Data pasien berhasil diupdate');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function delete($pasienID)
    {
        $pasien = $this->pasienRepository->detailDataPasien($pasienID);
        if (!$pasien) {
            return redirect()->back()->with('error', 'Data pasien tidak ditemukan');
        }
        try {
            $this->pasienRepository->deleteDataPasien($pasienID);
            return redirect()->back()->with('status', 'Data pasien berhasil dihapus');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
