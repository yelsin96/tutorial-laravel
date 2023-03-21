<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tareaRequest extends FormRequest
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
            'nombre' => 'required|max:60',
            'descripcion' => 'nullable|max:55',
            'finalizada' => 'nullable',
            'urgencia' => 'required|numeric|min:0|max:2',
            'fecha_limite' => 'required|date_format:Y-m-d\TH:i'
        ];
    }
}
