<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
            'title' => 'required|max:255',
            'about' => 'required',
            'main_event' => 'required|max:255',
            'language' => 'required|max:255',
            'foods' => 'required|max:255',
            'event_name' => 'required|max:255',
            'meeting_point' => 'required|max:255',
            'pax' => 'required|max:255',
            'price' => 'required|integer'
        ];
    }
}
