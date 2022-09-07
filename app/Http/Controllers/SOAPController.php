<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\SOAPRequest;
use App\Models\Pasien;
use App\Models\Soap;
use App\Repositories\SOAPRepository;
use Exception;

class SOAPController extends Controller
{
    private SOAPRepository $SOAPRepository;

    public function __construct(SOAPRepository $SOAPRepository)
    {
        $this->SOAPRepository = $SOAPRepository;
    }

    public function index()
    {
        $pasien = Pasien::latest('id')->paginate(10);
        return view('admin.data-soap', compact('pasien'));
    }

    public function store(SOAPRequest $request, $userID)
    {
        $user = User::find($userID)->first();
        // return $user;
        if (!$user) {
            return redirect()->back()->with('error', 'Data pasien tidak ditemukan');
        }
        $payload = $request->validated();
        try {
            $this->SOAPRepository->store($payload, $userID);
            return redirect()->back()->with('status', 'Data SOAP berhasil diinputkan');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function lists($userID)
    {
        $user = User::find($userID);
        if (!$user) {
            return redirect()->back()->with('error', 'Data user tidak ditemukan');
        }
        $soap = $user->soap()->get();
        // return $user;
        return view('admin.data-soap-list', compact('soap'));
    }

    public function detail($soapID)
    {
        $soap = Soap::find($soapID);
        if (!$soap) {
            return redirect()->back()->with('error', 'Data SOAP tidak ditemukan');
        }
        $pasien = $soap->users()->first()->pasien()->first();
        $tindakan = ['Tindakan Observasi', 'Tindakan Terapeutik', 'Tindakan Edukasi', 'Tindakan Kolaborasi'];
        $status = ['Sudah Terlayani', 'Belum Terlayani'];
        return view('admin.data-soap-detail', compact('soap', 'pasien', 'tindakan', 'status'));
    }

    public function update(SOAPRequest $request, $soapID)
    {
        $soap = Soap::find($soapID);
        if (!$soap) {
            return redirect()->back()->with('error', 'Data SOAP tidak ditemukan');
        }
        $payload = $request->validated();
        try {
            $soap->update($payload);
            return redirect()->back()->with('status', 'Data SOAP berhasil diupdate');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
