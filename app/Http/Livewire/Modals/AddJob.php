<?php

namespace App\Http\Livewire\Modals;

use App\Actions\JobAction;
use App\Http\Requests\JobCreateRequest;
use App\Models\Currency;
use App\Models\EducationType;
use App\Models\VacancyCategory;
use App\Models\VacancyExperienceType;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use App\Models\VacancyRole;
use LivewireUI\Modal\ModalComponent;


class AddJob extends  ModalComponent
{
    public ?int $currency_id = 124;
    public string|int  $salary_amount = '', $vacancy_category_id = '', $vacancy_role_id = '', $vacancy_experience_type_id = '', $education_type_id = '';
    public string $title = '', $description = '', $number_of_open_positions = '', $salary_description = '', $pay_period = '', $opening_date = '', $closing_date = '';
    public bool $medical_benefits = false, $other_benefits = false, $is_permanent = true, $is_full_time = true;
    public string $address = '', $city = '', $state = '', $country = '';

    public Collection $jobCategories, $vacancyRoles, $educationTypes, $vacancyExperienceTypes, $currencies;

    public bool $disableForm = false;
    function mount()
    {
        $this->jobCategories = VacancyCategory::where('is_active', 1)->get();
        $this->vacancyRoles = VacancyRole::where('is_active', 1)->get();
        $this->educationTypes = EducationType::all();
        $this->vacancyExperienceTypes = VacancyExperienceType::all();
        $this->currencies = Currency::all();
    }
    function addJob(JobAction $jobAction)
    {
        $vacancyCreateRequest = new JobCreateRequest([
            'vacancy_category_id' => $this->vacancy_category_id,
            'vacancy_role_id' => $this->vacancy_role_id,
            'vacancy_experience_type_id' => $this->vacancy_experience_type_id,
            'education_type_id' => $this->education_type_id,
            'currency_id' => $this->currency_id,
            'salary_amount' => $this->salary_amount,
            'title' => $this->title,
            'description' => $this->description,
            'number_of_open_positions' => $this->number_of_open_positions,
            'salary_description' => $this->salary_description,
            'city' => $this->city,
            'state' => $this->state,
            'country' => $this->country,
            'pay_period' => $this->pay_period,
            'opening_date' => $this->opening_date,
            'closing_date' => $this->closing_date,
            'medical_benefits' => $this->medical_benefits,
            'other_benefits' => $this->other_benefits,
            'is_permanent' => $this->is_permanent,
            'is_full_time' => $this->is_full_time,
        ]);

        $this->validate($vacancyCreateRequest->rules());
        $id = $jobAction->addJob($vacancyCreateRequest);
        $this->disableForm = true;
        // $this->emit('jobCreated', route('provider.job-review', ['id' => $id]));
    }
    public function render()
    {
        return view('livewire.modals.add-job');
    }
}
