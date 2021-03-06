<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AutomjetiRequest extends FormRequest
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
            'nr_shasise'=>['required','unique:automjeti'],
            'regjistrimi'=>['required','unique:automjeti'],
            'lloji'=>'required',
            'brendi'=>'required',
            'viti'=>'required|integer',
            'kilometrat'=>'required|integer',
        ];
    }
}
