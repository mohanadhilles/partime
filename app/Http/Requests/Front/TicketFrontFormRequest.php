<?php

namespace App\Http\Requests\Front;

use App\Http\Requests\Request;

class TicketFrontFormRequest extends Request
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
						"subject" => "required|max:180",
                        "ticket_department_id" => "required",
                        "ticket_priority_id" => "required",
                        "ticket_status_id" => "required",
                        "contract_id" => "required",

                        "notes" => "required|max:4000",


                    ];
                }
            default:break;
        }
    }

    public function messages()
    {
        return [
            'subject.required' => __('Please enter ticket subject'),
            'subject.max' => __('max ticket subject char'),
            'ticket_department_id.required' => __('Please select ticket department'),
            'ticket_priority_id.required' => __('Please select ticket priority'),
            'ticket_status_id.required' => __('Please select ticket status'),
			'notes.required' => __('Please enter ticket notes'),
			'notes.max' => __('max ticket notes char'),



        ];
    }

}