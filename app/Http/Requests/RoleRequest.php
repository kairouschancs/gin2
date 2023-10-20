<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
     * @return array
     */
    public function rules(): array
    {
        // バリデーションルール
        return [
            // id
            'id' => 'required|integer',
            //Class
            'class' => 'required|string|max:64',
            //権限
            'role' => 'required|string|max:64',
            // 権限名
            'role_summary' => 'required|string|max:64'
        ];
    }
}