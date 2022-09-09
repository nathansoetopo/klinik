<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ResepRequest extends FormRequest
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
            'obat' => 'required|array',
            'obat.*.pasien_id' => 'required',
            'obat.*.medicine_id' => 'required',
            'obat.*.desc' => 'required|string',
            'obat.*.jml_obat' => 'required|numeric',
            'obat.*.aturan_pakai' => 'required|numeric',
            'obat.*.tanggal' => 'required|date',
        ];
    }
}
