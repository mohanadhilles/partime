<?php

namespace App\Http\Requests\Front;

use App\Http\Requests\Request;

class BankAccountFrontFormRequest extends Request
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

                    return [

                        "bank_name" => "required",
                        "card_number" => "required",



                    ];
                }
            default:break;
        }
    }

    public function messages()
    {
        return [
            'bank_name.required' => __('Please enter bank name'),
            'card_number.required' => __('Please enter card number'),




        ];
    }

}