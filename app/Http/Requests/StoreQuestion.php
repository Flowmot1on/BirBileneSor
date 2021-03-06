<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestion extends FormRequest
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
            'token'       => 'required|string|exists:users,login_token',
            'title'       => 'required|string',
            'description' => 'required|string',
            'tags'        => 'required|string',
        ];
    }

    public function attributes()
    {
        return [
            'title'       => 'Başlık',
            'description' => 'Detay',
            'tags'        => 'Etiketler',
        ];
    }


}
