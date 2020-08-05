<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HRRequest extends FormRequest
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
            'hr_mail' => 'required|string|email',
        ];
    }
    public function all ($keys = ["hr_mail"])
    {
        $data = parent::all($keys);
        return $data;
    }
}
