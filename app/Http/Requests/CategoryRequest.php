<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() {
        return [
            'name' => 'required|string'
        ];
    }

    function attributes(){
        return [
            'name' => 'Tên danh mục'
        ];
    }

    function messages() {
        return [
            'name.required' => ':attribute không được để trống',
            'name.string' => ':attribute phải là chữ',
            'name.min' => ':attribute ít nhất 8 ký tự'
        ];
    }
}
