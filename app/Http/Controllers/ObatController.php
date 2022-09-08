<?php

namespace App\Http\Controllers;

use App\Http\Requests\ObatRequest;
use App\Models\Medicine;
use Exception;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obat = Medicine::latest('id')->paginate(10);
        $types = ['Cair', 'Tablet', 'Kapsul', 'Oles', 'Suppositoria', 'Tetes', 'Inhaler', 'Injection', 'Implan'];
        $categories = ['Bebas', 'Bebas Terbatas', 'Keras', 'Narkotika', 'Fitofarmaka', 'Herbal Terstandar', 'Herbal', 'Psikotopika'];
        return view('admin.data-medicine', compact('obat', 'types', 'categories'));
    }

    public function store(ObatRequest $request)
    {
        $payload = $request->validated();
        try {
            Medicine::create($payload);
            return redirect()->back()->with('status', 'Data obat berhasil diinputkan');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update(ObatRequest $request, $medicineID)
    {
        $medicine = Medicine::find($medicineID);
        if (!$medicine) {
            return redirect()->back()->with('error', 'Data obat tidak ditemukan');
        }
        $payload = $request->validated();
        try {
            $medicine->update($payload);
            return redirect()->back()->with('status', 'Data obat berhasil diupdate');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function delete($medicineID)
    {
        $medicine = Medicine::find($medicineID);
        if (!$medicine) {
            return redirect()->back()->with('error', 'Data obat tidak ditemukan');
        }
        try {
            $medicine->delete();
            return redirect()->back()->with('status', 'Data obat berhasil dihapus');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
