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
    protected $today;
    protected $year;

    public function __construct(PasienRepository $pasienRepository, DokterRepository $dokterRepository)
    {
        $this->pasienRepository = $pasienRepository;
        $this->dokterRepository = $dokterRepository;
        $this->today = $this->pasienRepository->getTodayData();
        $this->year = $this->pasienRepository->getDataPerYear();
    }

    public function index()
    {
        $dokter = $this->dokterRepository->getAllPagination();
        $pasien = $this->pasienRepository->getAllByDatePagination(Carbon::now()->format('Y-m-d'));
        $today = $this->today;
        $year = $this->year;
        return view('admin.index', compact('pasien', 'dokter', 'today', 'year'));
    }

    public function dataPasien()
    {
        $pasien = $this->pasienRepository->getAllPagination();
        $today = $this->today;
        $year = $this->year;
        return view('admin.datapasien', compact('pasien', 'today', 'year'));
    }
}
