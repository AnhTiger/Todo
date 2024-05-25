<?php

namespace Modules\Todo\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\RequiredIf;

class TodoRequest extends FormRequest
{

    public function rules($id) 
    {
        return [
            'user_id'           =>  'required',
            'time'              =>  'required',   
            'title'              =>  'required',   
        ];

    }

    public function messages() 
    {
        return [
            'user_id.required' 		=>  __('Require :: The').' :attribute '.__('are missing'),
            'time.required' 		=>  __('Require :: The').' :attribute '.__('are missing'),           
            'title.required' 		=>  __('Require :: The').' :attribute '.__('are missing'),           
        ];
    }

	public function validationAttributes() 
    {
        return [
            'user_id'       => __('User'),
            'time'          => __('Time'),
            'title'          => __('Title'),
        ];
    }
    
    public function authorize()
    {
        return true;
    }
}
