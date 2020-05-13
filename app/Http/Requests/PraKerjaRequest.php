<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
    public function rules()
    {
        return [
            'no_ktp' => 'required',
            'nama' => 'required',
            'nominal' => 'required',
            'program'=> 'required',
            'foto' => 'required_with:no_ktp,nama,nominal,program|file|image|max:1000'
        ];
    }
}
