<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSaleRequest extends FormRequest
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
            'agent_name' => ['required','min:3','max:25'],
            'client_name' => ['required','min:3','max:25'],            
            'developer' => ['required','min:5','max:25'],
            'branch' => ['required','min:5','max:50'],
            'date_reserved' => ['required','date'],
            'price' => ['required','numeric','min:1000000','max:5000000000'],
            'property_name' => ['required','min:5','max:25'],
            'number_of_unit' => ['required','numeric','min:1'],
            'category' => ['required'],
            'user_id' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'price.required' => 'Price is required',
            'property_name.required' => 'Property Name is required',
            'client_name.required' => 'Client Name is required',
            'agent_name.required' => 'Agent Name is required',
            'branch.required' => 'Branch is required',
            'developer.required' => 'Developer is required',
            'date_reserved.required' => 'Date is required',
            'number_of_unit.required' => 'Number of Unit is required',
            'category.required' => 'Model Unit is required'
            
        ];
    }
}
