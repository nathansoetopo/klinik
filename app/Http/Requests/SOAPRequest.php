<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SOAPRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'keluhan' => 'required|string',
            'pemeriksaan_objective' => 'required|string',
            'gcs' => 'required|numeric|min:1',
            'tensi' => 'required|string',
            'nadi' => 'required|numeric',
            'rr' => 'required|numeric',
            'suhu' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'berat' => 'required|numeric',
            'alergi' => 'required|string',
            'spo2' => 'required|numeric',
            'imunisasi' => 'required|string',
            'pemeriksaan_assessment' => 'required|string',
            'tindakan' => 'required|in:Tindakan Observasi,Tindakan Terapeutik,Tindakan Edukasi,Tindakan Kolaborasi',
            'plan' => 'required|string',
            'catatan' => 'required|string',
            'instruksi' => 'required|string',
            'evaluasi' => 'required|string',
            'status' => 'required|in:Sudah Terlayani,Belum Terlayani',
        ];
    }
}
