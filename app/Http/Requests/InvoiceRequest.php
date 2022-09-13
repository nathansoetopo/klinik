<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'pasien_id' => 'required',
            'biaya_soap' => 'nullable|array',
            'biaya_soap.*' => 'nullable|numeric|min:0',
            'biaya_lab' => 'nullable|array',
            'biaya_lab.*' => 'nullable|numeric|min:0',
            'biaya_rad' => 'nullable|array',
            'biaya_rad.*' => 'nullable|numeric|min:0',
            'biaya_kontrol' => 'nullable|array',
            'biaya_kontrol.*' => 'nullable|numeric|min:0',
            'biaya_resep' => 'nullable|array',
            'biaya_resep.*' => 'nullable|numeric|min:0',
        ];
    }
}
