<?php
namespace App\Http\Request;

use Illuminate\Http\Request;

class CalculatorRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstNumber' => 'required|unique:posts|max:255',
            'body' => 'required',
        ];
    }
}