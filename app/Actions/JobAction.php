<?php

namespace App\Actions;

use App\Http\Requests\JobCreateRequest;
use App\Models\Job;

class JobAction
{

    public function addJob(JobCreateRequest $request): int
    {
        $vacancy = new Job();
        $vacancy = $vacancy->create(array_merge($request->all(), ['provider_id' => auth()->user()->provider ? auth()->user()->provider->id : 1]));
        return $vacancy->id;
    }
}
