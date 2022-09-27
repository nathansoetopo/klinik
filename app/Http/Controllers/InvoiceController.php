<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Lab;
use App\Models\Rad;
use App\Models\Soap;
use App\Models\Resep;
use App\Models\Pasien;
use App\Models\Invoice;
// use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Http\Requests\InvoiceRequest;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Carbon\Carbon;

class InvoiceController extends Controller
{
    public function index()
    {
        $pasien = Pasien::latest('id')->paginate(10);
        return view('admin.data-invoice', compact('pasien'));
    }

    public function lists($pasienID)
    {
        $pasien = Pasien::find($pasienID);
        if (!$pasien) {
            return redirect()->back()->with('error', 'Data pasien tidak ditemukan');
        }
        $invoices = $pasien->invoices()->paginate(10);
        return view('admin.data-invoice-list', compact('invoices', 'pasienID'));
    }

    public function create($pasienID)
    {
        $pasien = Pasien::find($pasienID);
        if (!$pasien) {
            return redirect()->back()->with('error', 'Data pasien tidak ditemukan');
        }
        $soap = $pasien->users()->first()->soap()->whereDate('created_at', Carbon::now())->latest('id')->paginate(5);
        $labs = $pasien->diagnosis_lab()->whereDate('created_at', Carbon::now())->latest('id')->paginate(5);
        $rads = $pasien->diagnosis_rad()->whereDate('created_at', Carbon::now())->latest('id')->paginate(5);
        $reseps = $pasien->resep()->whereDate('created_at', Carbon::now())->latest('id')->paginate(5);
        $kontrol = $pasien->riwayat_kontrol()->whereDate('created_at', Carbon::now())->latest('id')->paginate(5);
        return view('admin.data-invoice-create', compact('pasien', 'soap', 'labs', 'rads', 'reseps', 'kontrol'));
    }

    public function store(InvoiceRequest $request)
    {
        $payload = $request->validated();
        $payload['payment_total'] = 0;
        // return $payload;
        foreach ($payload['biaya_soap'] as $item) {
            $payload['payment_total'] += $item;
        }
        foreach ($payload['biaya_lab'] as $item) {
            $payload['payment_total'] += $item;
        }
        foreach ($payload['biaya_rad'] as $item) {
            $payload['payment_total'] += $item;
        }
        foreach ($payload['biaya_kontrol'] as $item) {
            $payload['payment_total'] += $item;
        }
        foreach ($payload['biaya_resep'] as $item) {
            $payload['payment_total'] += $item;
        }
        // return $payload['payment_total'];
        try {
            Invoice::create($payload);
            return redirect('admin/invoice/' . request('pasien_id') . '/list')->with('status', 'Data invoice berhasil dibuat');
        } catch (Exception $e) {
            return redirect('admin/invoice/' . request('pasien_id') . '/list')->with('error', $e->getMessage());
        }
    }

    public function createInvoice($invCode)
    {
        $invoice = Invoice::where('inv_code', $invCode)->first();
        if (!$invoice) {
            return redirect()->back()->with('error', 'Data invoice tidak ditemukan');
        }
        $pdf = PDF::loadview('admin.tagihan-invoice', compact('invoice'));
        return $pdf->download('invoice.pdf');
    }
}
