<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VerifyBvnRequest extends FormRequest
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
            'bvn' => 'required|digits:11'
        ];
    }

    public function messages()
    {
        return [
            'bvn.required' => 'Your Bank Verification Number is required!',
        ];
    }
}
