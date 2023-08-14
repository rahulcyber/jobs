<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Jobs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                        My Jobs
                                    </h2>
                                </div>
                                <div class="col-md-6 text-end">
                                    <a href="#" onclick="Livewire.emit('openModal', 'modals.add-job')"
                                        class="btn btn-success btn-sm">
                                        Add Jobs
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <div class="overflow-hidden">
                                <table class="min-w-full text-left text-sm font-light w-full">
                                    <thead class="border-b font-medium dark:border-neutral-500">
                                        <tr>
                                            <th scope="col" class="px-6 py-4">#</th>
                                            <th scope="col" class="px-6 py-4">First</th>
                                            <th scope="col" class="px-6 py-4">Last</th>
                                            <th scope="col" class="px-6 py-4">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                                            <td class="whitespace-nowrap px-6 py-4">Mark</td>
                                            <td class="whitespace-nowrap px-6 py-4">Otto</td>
                                            <td class="whitespace-nowrap px-6 py-4">@mdo</td>
                                        </tr>
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">2</td>
                                            <td class="whitespace-nowrap px-6 py-4">Jacob</td>
                                            <td class="whitespace-nowrap px-6 py-4">Thornton</td>
                                            <td class="whitespace-nowrap px-6 py-4">@fat</td>
                                        </tr>
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">3</td>
                                            <td class="whitespace-nowrap px-6 py-4">Larry</td>
                                            <td class="whitespace-nowrap px-6 py-4">Wild</td>
                                            <td class="whitespace-nowrap px-6 py-4">@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
        <script>
            // let address = document.getElementById('address');
            // new google.maps.event.addDomListener(address, 'keydown', function(event) {
            //     if (event.keyCode === 13) {
            //         event.preventDefault();
            //     }
            // });
        </script>
    @endsection
</x-app-layout>
