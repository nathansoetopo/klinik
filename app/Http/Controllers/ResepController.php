<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResepRequest;
use App\Models\Resep;
use App\Repositories\ResepRepository;
use Exception;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    private ResepRepository $resepRepository;

    public function __construct(ResepRepository $resepRepository)
    {
        $this->resepRepository = $resepRepository;
    }

    public function store(ResepRequest $request)
    {
        $payload = $request->validated();
        try {
            foreach ($payload['obat'] as $resep) {
                $this->resepRepository->store($resep);
            }
            return redirect()->back()->with('status', 'Data resep berhasil diinputkan');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
