<?php

namespace App\Http\Requests;

use App\Models\Job;
use Illuminate\Foundation\Http\FormRequest;

class JobCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->user_type === 2;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'vacancy_role_id' => 'required|exists:vacancy_roles,id',
            'vacancy_category_id' => 'required|exists:vacancy_categories,id',
            // 'vacancy_experience_type_id' => 'required|exists:vacancy_experience_types,id',
            // 'education_type_id' => 'required|exists:education_types,id',
            // 'currency_id' => 'required|exists:currencies,id',
            'title' => 'required|string|max:255',
            // 'description' => 'required|string',
            // 'number_of_open_positions' => 'required|string|in:' . implode(',', Job::$numberOfOpenPositions),
            // 'salary_amount' => 'required|numeric|min:0',
            // 'salary_description' => 'required_if:other_benefits,true|string|max:255',

            //address
            // 'city' => 'required|string|max:255',
            // 'state' => 'required|string|max:255',
            // 'country' => 'required|string|max:255',
            // 'address' => 'required_without_all:country,city,state|string|max:255',

            'medical_benefits' => 'boolean',
            'other_benefits' => 'boolean',
            // 'pay_period' => 'required|string|in:' . implode(',', Job::$payPeriods),
            // 'is_permanent' => 'required|boolean',
            // 'is_full_time' => 'required|boolean',
            // 'opening_date' => 'required|date|after:yesterday',
            // 'closing_date' => 'required|date|after:opening_date',
        ];
    }
}
