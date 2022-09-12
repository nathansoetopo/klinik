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
            'biaya_soap' => 'required|array',
            'biaya_soap.*' => 'numeric|min:0',
            'biaya_lab' => 'required|array',
            'biaya_lab.*' => 'numeric|min:0',
            'biaya_rad' => 'required|array',
            'biaya_rad.*' => 'numeric|min:0',
            'biaya_kontrol' => 'required|array',
            'biaya_kontrol.*' => 'numeric|min:0',
            'biaya_resep' => 'required|array',
            'biaya_resep.*' => 'numeric|min:0',
        ];
    }
}
