<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DokterRepository;
use App\Repositories\PasienRepository;

class PasienController extends Controller
{
    private PasienRepository $pasienRepository;
    private DokterRepository $dokterRepository;

    public function __construct(PasienRepository $pasienRepository, DokterRepository $dokterRepository)
    {
        $this->pasienRepository = $pasienRepository;
        $this->dokterRepository = $dokterRepository;
    }
}
