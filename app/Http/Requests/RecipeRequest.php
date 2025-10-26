<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'regex:/^[\p{Arabic}A-Za-z\s]+$/u'],

            'ingredients' => 'required|string',
            'steps' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'حقل اسم الوصفة مطلوب',
            'name.max' => 'اسم الوصفة لا يمكن أن يزيد عن 255 حرف',
            'name.regex' => 'اسم الوصفة يجب أن يحتوي حروفًا فقط (عربية أو إنجليزية) والمسافات فقط — لا يسمح بالأرقام أو الرموز.',
            'ingredients.required' => 'حقل المكونات مطلوب',
            'steps.required' => 'حقل الخطوات مطلوب',
        ];
    }
}
