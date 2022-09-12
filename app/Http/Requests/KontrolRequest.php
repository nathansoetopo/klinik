<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KontrolRequest extends FormRequest
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
            'diagnosis' => 'required|string',
            'tindakan' => 'required|string',
            'alasan' => 'required|string',
            'rencana' => 'required|string',
            'tgl_kontrol' => 'required|date',
            'jenis_bayar' => 'required|in:BPJS,UMUM',
        ];
    }
}
