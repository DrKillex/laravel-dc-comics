<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|max:100',
            'description' => 'required',
            'thumb' => 'required|url',
            'price' => 'required|max:8',
            'series' => 'required|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|max:50',
            'artists' => 'required',
            'writers' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'required' => 'il campo: ":attribute" è richiesto',
            'max' => 'il canmpo: ":attribute" supera la lunghezza massima',
            'date' => 'il formato di data inserito non è valido',
            'url' => 'il campo: ":attribute" richiedere un URL (esempio: "https://www.esempio.com")'
        ];
    }
}
