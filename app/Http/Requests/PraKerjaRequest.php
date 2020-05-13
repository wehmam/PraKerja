<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\model\Prakerja;
use Illuminate\Validation\Rule;

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
    public function rules(Prakerja $prakerja)
    {
        $pengguna = Prakerja::where('no_ktp', '=',$this->no_ktp)->first();
        return [
            'no_ktp' => ['required',Rule::unique('prakerjas','no_ktp')->ignore($pengguna['id'])],
            'nama' => 'required|string|min:3',
            'orang_tua' => 'required|string',
            'nominal' => 'required|integer',
            'program'=> 'required',
            'foto' => 'required_without:nama|file|image|max:1000'
        ];
    }
}
