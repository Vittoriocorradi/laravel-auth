<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'required|unique:projects|string|max:75',
            'status' => 'required|string|max:30',
            'type' => 'required|string|max:40',
            'starting_date' => 'required|date',
            'finishing_date' => 'nullable|date',
            'overview' => 'required|string',
            'objectives' => 'required|string|max:255',
            'roadmap' => 'nullable|string',
            'priority' => 'nullable|string|max:30',
            'contributors' => 'nullable|string',
            'is_finished' => 'digits:1|integer|between:0,1',
            'image' => 'nullable|image|max:2048'
        ];
    }
}
