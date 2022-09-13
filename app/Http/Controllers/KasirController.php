<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
// use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Http\Requests\BillRequest;
use App\Http\Requests\KasirRequest;
use App\Http\Requests\PaymentRequest;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Exception;

class KasirController extends Controller
{
    public function index()
    {
        return view('kasir.index');
    }

    public function search(KasirRequest $request)
    {
        $payload = $request->validated();
        $invoice = Invoice::where('inv_code', $payload['inv_code'])->first();
        if (!$invoice) {
            return redirect()->back()->with('error', 'Data invoice tidak ditemukan');
        }
        if ($invoice->payment_status != 'PENDING') {
            return redirect()->back()->with('error', 'Data invoice sudah pernah diproses');
        }
        return view('kasir.invoice', compact('invoice'));
    }

    public function payBill(BillRequest $request, $invCode)
    {
        $invoice = Invoice::where('inv_code', $invCode)->first();
        if (!$invoice) {
            return redirect()->back()->with('error', 'Data invoice tidak ditemukan');
        }
        $payload = $request->validated();
        if ($payload['bill'] < $invoice->payment_total) {
            return redirect()->back()->with('error', 'Uang pasien tidak mencukupi');
        }
        $cashback = $payload['bill'] - $invoice->payment_total;
        return view('kasir.invoice-overview', compact('invoice', 'cashback'));
    }

    public function payment(PaymentRequest $request)
    {
        $payload = $request->validated();
        $cashback = $payload['cashback'];
        $invoice = Invoice::where('inv_code', $payload['inv_code'])->first();
        if (!$invoice) {
            return redirect()->back()->with('error', 'Data invoice tidak ditemukan');
        }
        try {
            $invoice->update(['payment_status' => 'SUCCESS']);
            $pdf = PDF::loadview('kasir.tagihan-invoice', compact('invoice', 'cashback'));
            return $pdf->download('invoice.pdf');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
