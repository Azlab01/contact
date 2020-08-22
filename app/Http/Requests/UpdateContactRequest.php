<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
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
        $id = $this->contact->id;
        return [
            'name' => 'required|string|max:250|unique:contacts,name,'.$id,
            'number' => 'sometimes|nullable|string|max:250',
            'avatar' => 'sometimes|nullable|image',
            'address' => 'sometimes|nullable|string|max:250'
        ];
    }
}
