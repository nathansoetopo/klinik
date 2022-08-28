<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pasien;
use App\Repositories\DokterRepository;
use Illuminate\Http\Request;
use App\Repositories\PasienRepository;

class AdminController extends Controller
{
    private PasienRepository $pasienRepository;
    private DokterRepository $dokterRepository;

    public function __construct(PasienRepository $pasienRepository, DokterRepository $dokterRepository)
    {
        $this->pasienRepository = $pasienRepository;
        $this->dokterRepository = $dokterRepository;
    }

    public function index()
    {
        $dokter = $this->dokterRepository->getAllPagination();
        $pasien = $this->pasienRepository->getAllByDatePagination(Carbon::now()->format('Y-m-d'));
        return view('admin.index', compact('pasien', 'dokter'));
    }

    public function dataPasien()
    {
        $pasien = $this->pasienRepository->getAllPagination();
        return view('admin.data-pasien', compact('pasien'));
    }
}
