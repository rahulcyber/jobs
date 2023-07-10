<x-app-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex flex-col sm:justify-center mt-6 items-center sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div class="login-page-logo-container">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
        </div>
        <section class="w-full sm:max-w-md  px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="top-form-heading">

                            <h3>{{ __('interface.welcome-back') }}</h3>
                            <p>{{ __('interface.slogan') }}.</p>
                        </div>
                        @livewire('forms.login-form')

                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
