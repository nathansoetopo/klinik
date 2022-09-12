<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Rad;
use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Http\Requests\RadRequest;

class RADController extends Controller
{
    public function index()
    {
        $pasien = Pasien::latest('id')->paginate(10);
        return view('admin.data-rad', compact('pasien'));
    }

    public function store(RadRequest $request)
    {
        $payload = $request->validated();
        try {
            Rad::create($payload);
            return redirect()->back()->with('status', 'Data diagnosis RAD berhasil ditambahkan');
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
        $labs = $pasien->diagnosis_rad()->paginate(10);
        return view('admin.data-rad-list', compact('labs'));
    }

    public function detail($radID)
    {
        $rad = Rad::find($radID);
        if (!$rad) {
            return redirect()->back()->with('error', 'Data rad tidak ditemukan');
        }
        $pasien = $rad->pasien()->first();
        return view('admin.data-rad-detail', compact('rad', 'pasien'));
    }

    public function update(RadRequest $request, $radID)
    {
        $rad = Rad::find($radID);
        if (!$rad) {
            return redirect()->back()->with('error', 'Data rad tidak ditemukan');
        }
        $payload = $request->validated();
        try {
            $rad->update($payload);
            return redirect()->back()->with('status', 'Data diagnosis RAD berhasil diupdate');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
