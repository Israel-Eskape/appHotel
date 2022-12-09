<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePeopleRequest extends FormRequest
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
            'name' => 'required|min:3|max:50',
            'firstName'=>'required|min:3|max:50',
            'lastName'=>'required|min:3|max:50',
            'password'=>'required|min:3|same:password',
            'birthday'=>'required|date',
            'address'=>'required|min:3|max:100',
            'phone'=>'required|min:3|max:50',
            'email'=>'required|email',
            'hotelRole_id'=>'required',
            'hotelStatusEntity_id'=>'required'
        ];
    }
}
