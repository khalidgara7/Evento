<?php

namespace App\Http\Requests\organizer;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrganizerInfosRequest extends FormRequest
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
            'cin' => 'required|string|regex:/^[a-zA-Z]{2}[0-9]{6}$/',
            'bio' => 'required|string',
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif',
            'phone_number' => 'required|string|regex:/^[0-9]{10}$/',
        ];
    }

    public function messages(): array
    {
        return [
            'cin.regex' => 'The CIN must be 2 letters followed by 6 numbers.',
            'image.required' => 'Please upload an image.',
            'image.image' => 'The uploaded file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'text_area.required' => 'The text area field is required.',
            'phone_number.regex' => 'The phone number must be a 10-digit number.',
        ];
    }
}
