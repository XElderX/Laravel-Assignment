<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

use Illuminate\Validation\Rule;

class UpdateEmployee extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'first_name' => [
                'required',
                'string',
                'max:50',

            ],
            'last_name' => [
                'required',
                'string',
                'max:50',

            ],
            'company' => [
                'required',


            ],
            'email' => [
                'nullable',
                'email',
                Rule::unique('employees')->ignore($this->employee),

            ],
            'phone' => [
                'nullable',
                Rule::unique('employees')->ignore($this->employee),


            ],
            'age' => [
                'nullable'

            ],
            'salary' => [
                'nullable|integer',


            ],
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'errors' => $validator->errors(),
            'status' => true
        ], 422));
    }
}
