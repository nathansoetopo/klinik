<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RadRequest extends FormRequest
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
            'pasien_id' => 'required|numeric',
            'diagnosis_klinis' => 'required|string',
            'info_tambahan' => 'required|string',
            'nama_pemeriksaan' => 'required|string',
        ];
    }
}
