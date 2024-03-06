<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'image' => 'required|image',
            'description' => 'required|string',
            'date' => 'required|date|after_or_equal:today',
            'location' => 'required|string|max:255',
            'capacity' => 'required|integer|min:1',
            'category_id' => 'required|exists:categories,id',
            'organizer_id' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The event title is required.',
            'image.required' => 'The event image is required.',
            'image.image' => 'The event image must be an image file.',
            'description.required' => 'The event description is required.',
            'date.required' => 'The event date is required.',
            'date.date' => 'The event date is not a valid date.',
            'date.after_or_equal' => 'The event date must be today or a future date.',
            'location.required' => 'The event location is required.',
            'capacity.required' => 'The event capacity is required.',
            'capacity.integer' => 'The event capacity must be an integer.',
            'capacity.min' => 'The event capacity must be at least 1.',
            'category_id.required' => 'The event category is required.',
            'category_id.exists' => 'The selected event category is invalid.',
        ];
    }
}
