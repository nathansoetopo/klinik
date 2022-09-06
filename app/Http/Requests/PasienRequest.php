<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;

class PasienRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string',
            'alamat' => 'required|string',
            'pekerjaan' => 'required|string',
            'jenis_pembayaran' => 'required|in:UMUM,BPJS',
        ];
    }

    // protected function failedValidation(ValidationValidator $validator)
    // {
    //     return redirect()->back()->withInput()->withErrors($validator);
    // }
}
