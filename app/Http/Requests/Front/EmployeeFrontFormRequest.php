<?php

namespace App\Http\Requests\Front;

use App\Http\Requests\Request;

class EmployeeFrontFormRequest  extends Request
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
        switch ($this->method()) {
            case 'PUT':
            case 'POST': {

                    $id = (int) $this->input('id', 0);
                    $unique_id = ($id > 0) ? ',' . $id : '';

                    return [
                        "name" => "required",

                    ];
                }
            default:break;
        }
    }

    public function messages()
    {
        return [
            'name.required' => 'enter employee name',

        ];
    }

}
