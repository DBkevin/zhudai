<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HuishouReuqest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
            'comname' => 'nullable|string',
            'username' => 'nullable',
            'tel' => 'required|min:11',
            'num'=>'nullable',
            'year'=>'nullable',
            'devtypes'=>'nullable',
            'brand'=>'nullable',
            'bz'=>'nullable',
        ];
    }
}
