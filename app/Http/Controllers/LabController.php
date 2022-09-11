<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Lab;
use App\Models\User;
use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Http\Requests\LabRequest;

class LabController extends Controller
{
    public function index()
    {
        $pasien = Pasien::latest('id')->paginate(10);
        return view('admin.data-lab', compact('pasien'));
    }

    public function store(LabRequest $request)
    {
        $payload = $request->validated();
        try {
            Lab::create($payload);
            return redirect()->back()->with('status', 'Data diagnosis lab berhasil ditambahkan');
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
        $labs = $pasien->diagnosis_lab()->paginate(10);
        return view('admin.data-lab-list', compact('labs'));
    }

    public function detail($labID)
    {
        $lab = Lab::find($labID);
        if (!$lab) {
            return redirect()->back()->with('error', 'Data lab tidak ditemukan');
        }
        $pasien = $lab->pasien()->first();
        return view('admin.data-lab-detail', compact('lab', 'pasien'));
    }

    public function update(LabRequest $request, $labID)
    {
        $lab = Lab::find($labID);
        if (!$lab) {
            return redirect()->back()->with('error', 'Data lab tidak ditemukan');
        }
        $payload = $request->validated();
        try {
            $lab->update($payload);
            return redirect()->back()->with('status', 'Data lab berhasil diupdate');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
