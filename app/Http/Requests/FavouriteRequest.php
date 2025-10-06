<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FavouriteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // مسموح للجميع مثلاً، غيّرها لو عندك تحقق مستخدمين
    }

    public function rules(): array
    {
        return [
            'device_id' => 'required|string|max:255',
            'recipe_id' => 'required|exists:recipes,id',
        ];
    }

    public function messages(): array
    {
        return [
            'device_id.required' => 'يجب إرسال رقم الجهاز.',
            'device_id.string' => 'رقم الجهاز يجب أن يكون نصًا.',
            'recipe_id.required' => 'يجب اختيار وصفة.',
            'recipe_id.exists' => 'الوصفة المختارة غير موجودة.',
        ];
    }
}
