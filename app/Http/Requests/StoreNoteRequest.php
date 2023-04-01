<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string,mixed>
     */
    public function rules(): array
    {
        return [
            'id' => 'sometimes|numeric',
            'title' => 'required|string|min:3|max:50',
            'content' => 'required|string|min:6',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:4096',
        ];
    }
}
