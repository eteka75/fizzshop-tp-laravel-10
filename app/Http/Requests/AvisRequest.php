<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvisRequest extends FormRequest
{
    protected $redirect = "/#avis";
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'produit_id' => 'required|integer|min:1|max:999999',
            'pseudo' => 'required|min:3|max:30|regex:/^[a-zA-Z0-9_\-]*$/',
            'email' => 'required|email:rfc,filter',
            'note' => 'required|integer|min:1|max:5',
            'commentaire' => 'required|min:3|max:255',
            'description' => 'required|min:10|max:5000',
            'photo' =>'nullable|mimes:jpeg,png,jpg,gif',
        ];
    }
}
