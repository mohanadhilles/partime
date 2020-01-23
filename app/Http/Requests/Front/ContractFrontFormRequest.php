<?php

namespace App\Http\Requests\Front;

use App\Http\Requests\Request;

class ContractFrontFormRequest  extends Request
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

                        "date_from" => "required",
                        "date_to" => "required",
                        "contract_days" => "required",
                        "hourly_rate" => "required",

                    ];
                }
            default:break;
        }
    }

    public function messages()
    {
        return [

            'date_from.required' => 'enter date from',
            'date_to.required' => 'enter date to',
            'contract_days.required' => 'enter date to',
            'hourly_rate.required' => 'enter date to',

        ];
    }

}
