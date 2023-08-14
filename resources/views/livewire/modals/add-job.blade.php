<div class="">
    <form wire:submit.prevent="addJob" autocomplete="off">
        @csrf
        <div class="bg-primary-dark p-3">
            <h2 class>Add Job Form</h2>
        </div>
        <div class="notes">
            <p>Plese Fill All Details.</p>
        </div>
        <div class="modal-body">

            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="mb-3">
                        <label id="job_title_label" for="job_title" class="block text-gray-700 text-sm font-bold">Job
                            Title</label>
                        <input id="job_title" wire:model.defer="title" type="text" placeholder="Job Title"
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                        @error('title')
                            <div class="col-md-12 col-md-12 col-12">
                                <label class="text-danger">{{ $message }}</label>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="mb-3">
                        <label id="address_label" for="address">Job Location</label>
                        <input id="address" wire:model.defer="address" type="text"
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                        @error('address')
                            <div class="col-md-12 col-md-12 col-12">
                                <label class="text-danger">{{ $message }}</label>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="mb-3">
                        <label id="cateogry_label" for="cateogry">Job Type</label>
                        <select id="vecancy_category_id" wire:model="vacancy_category_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value=""></option>
                            @foreach ($jobCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('vacancy_category_id')
                            <div class="col-md-12 col-md-12 col-12">
                                <label class="text-danger">{{ $message }}</label>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>{{ __('form-elements.job-role') }}</label>
                        <select wire:model.defer="vacancy_role_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected disabled></option>
                            @foreach ($vacancyRoles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                        @error('vacancy_role_id')
                            <div class="col-md-12 col-md-12 col-12">
                                <label class="text-danger">{{ $message }}</label>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>{{ __('form-elements.job-opening-date') }}</label>
                        <input type="date" wire:model.defer="opening_date" min="{{ $opening_date }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('opening_date')
                            <div class="col-md-12 col-md-12 col-12">
                                <label class="text-danger">{{ $message }}</label>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>{{ __('form-elements.keep-job-open-till') }}</label>
                        <input type="date" wire:model.defer="closing_date" min="{{ $opening_date }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        @error('closing_date')
                            <div class="col-md-12 col-md-12 col-12">
                                <label class="text-danger">{{ $message }}</label>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label>{{ __('form-elements.min-education-needed') }}</label>
                        <select wire:model.defer="education_type_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected disabled></option>
                            @foreach ($educationTypes as $education)
                                <option value="{{ $education->id }}">{{ $education->name }}</option>
                            @endforeach
                        </select>
                        @error('education_type_id')
                            <div class="col-md-12 col-md-12 col-12">
                                <label class="text-danger">{{ $message }}</label>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label>{{ __('form-elements.min-experience-needed') }}</label>
                        <select wire:model.defer="vacancy_experience_type_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected disabled></option>
                            @foreach ($vacancyExperienceTypes as $experience)
                                <option value="{{ $experience->id }}">{{ $experience->name }}</option>
                            @endforeach
                        </select>
                        @error('vacancy_experience_type_id')
                            <div class="col-md-12 col-md-12 col-12">
                                <label class="text-danger">{{ $message }}</label>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>{{ __('form-elements.permanent-or-temporary') }}</label>
                        <select wire:model.defer="is_permanent"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="1">{{ __('form-elements.permanent') }}</option>
                            <option value="0">{{ __('form-elements.temporary') }}</option>
                        </select>
                        @error('is_permanent')
                            <div class="col-md-12 col-md-12 col-12">
                                <label class="text-danger">{{ $message }}</label>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>{{ __('form-elements.full-time-or-part-time') }}</label>
                        <select wire:model.defer="is_full_time"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="1">{{ __('form-elements.full-time') }}</option>
                            <option value="0">{{ __('form-elements.part-time') }}</option>
                        </select>
                        @error('is_full_time')
                            <div class="col-md-12 col-md-12 col-12">
                                <label class="text-danger">{{ $message }}</label>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label>{{ __('form-elements.number-of-open-positions') }}</label>
                        <select wire:model.defer="number_of_open_positions"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected disabled></option>
                            @foreach (\App\Models\Job::$numberOfOpenPositions as $numberOfPosition)
                                <option value="{{ $numberOfPosition }}">{{ $numberOfPosition }}</option>
                            @endforeach
                        </select>
                        @error('number_of_open_positions')
                            <div class="col-md-12 col-md-12 col-12">
                                <label class="text-danger">{{ $message }}</label>
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mt-2 mb-2">
                <h2>{{ __('form-elements.job-benefits') }}</h2>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>Salary </label>
                        <div
                            class="flex items-center whitespace-nowrap pb-[0.27rem] pt-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700 dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200">
                            <div class="input-group-prepend">
                                <select wire:model.defer="currency_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected disabled>Select Salary</option>
                                    @foreach ($currencies as $currency)
                                        <option value="{{ $currency->id }}">{{ $currency->code }}
                                            ({{ $currency->symbol }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <input
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                id="salary" onKeyPress="return check(event,value)" onInput="checkLength()"
                                wire:model.defer="salary_amount" type="number" />
                            @error('salary_amount')
                                <div class="col-md-12 col-md-12 col-12">
                                    <label class="text-danger">{{ $message }}</label>
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label>{{ __('form-elements.pay-period') }} (hr./wk./mth.)</label>
                        <select wire:model.defer="pay_period"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected disabled></option>
                            @foreach (\App\Models\Job::$payPeriods as $payPeriod)
                                <option value="{{ $payPeriod }}">{{ $payPeriod }}</option>
                            @endforeach
                        </select>
                        @error('pay_period')
                            <div class="col-md-12 col-md-12 col-12">
                                <label class="text-danger">{{ $message }}</label>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="custom-switch-blk">
                        <div class="custom-switch">
                            <input type="checkbox" class="" id="medical_benefits"
                                wire:model.defer="medical_benefits" value="1">
                            <label for="medical_benefits">{{ __('form-elements.medical-benefits') }}</label>
                        </div>
                    </div>
                    <div class="custom-switch-blk">
                        <div class="custom-switch">
                            <input type="checkbox" class="" id="other_benefits"
                                wire:model.defer="other_benefits" value="1">
                            <label for="other_benefits">{{ __('form-elements.other-benefits') }}</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label>{{ __('form-elements.about-salary-benefits') }}</label>
                        <input type="text" wire:model.defer="salary_description"
                            placeholder="{{ __('form-elements.about-benefits') }}" class="form-control" />
                        @error('salary_description')
                            <div class="col-md-12 col-md-12 col-12">
                                <label class="text-danger">{{ $message }}</label>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label>{{ __('form-elements.about-job-requirements') }}</label>
                        <textarea class="form-control" wire:model.defer="description"></textarea>
                        @error('description')
                            <div class="col-md-12 col-md-12 col-12">
                                <label class="text-danger">{{ $message }}</label>
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group mb-3 job-post-group">
                <hr>
                @if (!$disableForm)
                    <button type="submit"
                        class="btn common-btn big-btn hvr-sweep-to-right">{{ __('form-elements.review') }}</button>
                @endif
            </div>
        </div>
</div>
<div class="modal-footer">
    <button class="btn btn-sm">Cancel</button>
    <button class="btn btn-primary btn-sm " type="submit">Submit</button>
</div>
</form>
</div>
