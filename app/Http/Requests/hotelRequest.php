<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class hotelRequest extends FormRequest
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
            'name' => 'required|min:2',
            'email' => 'required',
            'pass' => 'required',

        ];
    }

    public function messages(){
        return [
            'name.required'=> "Name field can't remain empty",
            'name.min'=> "Name must be at least 3 ch....",
            'pass.required'=> "Password must be filled",

        ];
    }
}
