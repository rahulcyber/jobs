<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $fillable = [
    //     'provider_id',
    //     'vacancy_role_id',
    //     'vacancy_experience_type_id',
    //     'education_type_id',
    //     'currency_id',
    //     'title',
    //     'description',
    //     'number_of_open_positions',
    //     'salary_amount',
    //     'salary_description',
    //     'city',
    //     'state',
    //     'country',
    //     'medical_benefits',
    //     'other_benefits',
    //     'pay_period',
    //     'is_permanent',
    //     'is_full_time',
    //     'opening_date',
    //     'closing_date',
    //     'is_posted',
    // ];

    public static array $numberOfOpenPositions = [
        'One',
        'Multiple',
    ];

    public static array $payPeriods = [
        'Hourly',
        'Weekly',
        'Monthly',
        'Yearly'
    ];
}
