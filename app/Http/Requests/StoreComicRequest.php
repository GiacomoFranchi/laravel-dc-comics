<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'titolo' => 'required|min:5|max:150',
            'descrizione' => 'nullable',
            'img' => 'required',
            'prezzo' => 'required',
            'serie' => 'nullable',
            'tipologia' => 'required',
            'data_pubblicazione' => 'nullable'
        ];
    }

    public function messages(){
        return[
            'titolo.required' => 'Inserisci il titolo del comic',
            'titolo.min' => 'Il titolo può avere minimo :min caratteri',
            'titolo.max' => 'Il titolo può avere al massimo :max caratteri',
            'img.required' => "L'immagine è obbligatoria!",
            'prezzo.required' => 'Ogni comic deve avere un prezzo indicato',
            'tipologia.required'=> 'Va selezionata una categoria per continuare'
        ];
    }
}
