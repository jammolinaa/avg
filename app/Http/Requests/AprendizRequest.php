<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AprendizRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'nombre_completo' => 'required|string',
			'pregunta1' => 'required|string',
			'pregunta2' => 'required|string',
			'pregunta3' => 'required|string',
			'pregunta4' => 'required|string',
			'pregunta5' => 'required|string',
			'pregunta6' => 'required|string',
			'pregunta7' => 'required|string',
        ];
    }
}
