<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
{
    protected function prepareForValidation()
    {
        if ($this->has('terms')) {
            $this->merge(['terms'=> true]);
        } else {
            $this->merge(['terms'=> false]);
        }
    }
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
                'phone' => 'required|numeric|regex:/79[0-9]{9}/',
            'email' => ['required', 'string', 'email', 'max:255',
                Rule::unique('users')->ignore($this->id),
            ],
            'education_id' => 'required|integer|exists:education_levels,id',
            'terms' => 'sometimes|boolean'
        ];
    }
}
