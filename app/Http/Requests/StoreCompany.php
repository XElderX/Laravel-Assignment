<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreCompany extends FormRequest
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
            'name' => 'required|string|unique:companies|max:50',
            'email' => 'nullable|email|unique:companies',
            'website' => 'nullable',
        ];
    }

    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
protected function failedValidation(Validator $validator)
{
    throw new HttpResponseException(response()->json([
        'errors' => $validator->errors(),
        'status' => true
    ], 422));
}
public function messages()
{
    return [
        'name.required' => 'A company name required',
        'name.unique' => 'A company name already in use',
        'email.email' => 'invalid email',
        'email.unique' => 'email already in use',
    ];
}
}
