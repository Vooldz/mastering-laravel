<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'content' => 'required|string',
            'show' => 'required|in:1,0',
            'status' => 'required|in:enable,disable',
        ];
    }
    public function attributes()
    {
        return [
            'title' => 'Title',
            'content' => 'Post Content',
            'show' => 'Show Or Hide',
        ];
    }
}
