<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Prakerja;

use Illuminate\Http\Request;


class PraKerjaRequest extends FormRequest
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

    /**;
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Prakerja $request)
    {
        return [
            'no_ktp' => 'required|unique:prakerjas,no_ktp,'.$request->no_ktp,
            'nama' => 'required|string|min:3',
            'orang_tua' => 'required|string',
            'nominal' => 'required|integer',
            'program'=> 'required',
            'foto' => 'required_without:nama|file|image|max:1000'
        ];
    }
}
