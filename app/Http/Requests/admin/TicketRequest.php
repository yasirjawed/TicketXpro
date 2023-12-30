<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {

            $rules = [
                'subject'=>[
                 'required',
                 'string'
                ],
                'description'=>[
                'required',
                'string'
                ],
                'active_status'=>[
                 'required',
                 'integer'
                ]
            ];

             return $rules;

    }
}
