<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
         //   'phone' => 'required|integer|regex:/^79[0-9]{9}$/',
            'email' => 'required|email|unique:users',
            'education' => 'required|integer|exists:education_levels,id',
        ];
    }
}
