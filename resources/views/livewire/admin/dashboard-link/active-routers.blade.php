<div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg h-full">
            <div class="mb-6 text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">ActiveRouters</h2>
                <p class="text-gray-600">Your current active routers</p>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Serial Number
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            User
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Subscription
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody id="routerTableBody" class="bg-white divide-y divide-gray-200">
                    @foreach($routers as $router)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    {{$router->serial_number}}
                                </span>
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                @if($router->user)
                                    Name: {{$router->user->first_name}} {{$router->user->last_name}} <br>
                                    Contact: {{$router->user->contact}}
                                @else
                                    N/A
                                @endif
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                @if($router->status === 0)
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                        InActive
                                    </span>
                                @else
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Active
                                    </span>
                                @endif
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                {{$router->serial_number}}
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500 space-x-5">
                                <button wire:click="details_view({{$router->id}})"
                                        class="text-blue-600 hover:text-blue-900 focus:outline-none">Details
                                </button>
                                <button
                                    wire:click="edit({{$router->id}})"
                                    class="text-blue-600 hover:text-blue-900 focus:outline-none"
                                >
                                    Edit
                                </button>
                                <button
                                    wire:click="delete({{$router->id}})"
                                    class="text-red-600 hover:text-red-900 focus:outline-none"
                                >
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @if($modal)
                    <div class="relative z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                        <div class="fixed inset-0 bg-gray-900/75 backdrop-blur-sm transition-opacity"></div>

                        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                            <div class="flex min-h-full items-center justify-center p-4">
                                <div
                                    class="relative w-full max-w-4xl transform overflow-hidden rounded-2xl bg-white shadow-2xl transition-all">
                                    <!-- Header -->
                                    <div class="border-b border-gray-100 bg-gray-50/50 px-6 py-4">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-xl font-semibold text-gray-900" id="modal-title">Router
                                                Details</h3>
                                            <button wire:click="closeModal"
                                                    class="rounded-lg p-1.5 text-gray-400 hover:bg-gray-100 hover:text-gray-500">
                                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                                     stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Content -->
                                    <div class="px-6 py-4 overflow-x-auto">
                                        <div class=" rounded-lg border border-gray-200">
                                            <table class="min-w-full divide-y divide-gray-200 scroll-auto">
                                                <thead class="bg-gray-50">
                                                <tr>
                                                    <th class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                                        Router Model
                                                    </th>
                                                    <th class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                                        Mac Address
                                                    </th>
                                                    <th class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                                        Serial Number
                                                    </th>
                                                    <th class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                                        User
                                                    </th>
                                                    <th class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                                        Antenna Number
                                                    </th>
                                                    <th class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                                        Status
                                                    </th>
                                                    <th class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                                        Date
                                                    </th>

                                                </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200 bg-white">
                                                <tr>
                                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-900">{{ $model }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                  <span
                                                      class="inline-flex items-center rounded-full bg-blue-50 px-2.5 py-1 text-xs font-medium text-blue-700">
                                                      {{ $mac_address }}
                                                  </span>
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">{{ $serial_number }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                                        <span class="font-bold">Name: </span>
                                                        {{\App\Models\User::where('unique_id', $unique_id)->first()->first_name ?? 'N/A'}}
                                                        {{\App\Models\User::where('unique_id', $unique_id)->first()->last_name ?? 'N/A'}}
                                                        <br>
                                                        <span class="font-bold">Phone: </span>
                                                        {{\App\Models\User::where('unique_id', $unique_id)->first()->contact ?? 'N/A'}}

                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">{{ $antenna_number }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        @if($status)
                                                            <span
                                                                class="inline-flex items-center rounded-full bg-green-50 px-2 py-1 text-xs font-medium text-green-700">
                                                          Active
                                                      </span>
                                                        @else
                                                            <span
                                                                class="inline-flex items-center rounded-full bg-red-50 px-2 py-1 text-xs font-medium text-red-700">
                                                          Inactive
                                                      </span>
                                                        @endif
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">{{ $created_at->format('d-m-Y') }}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Footer -->
                                    <div class="border-t border-gray-100 bg-gray-50/50 px-6 py-4">
                                        <div class="flex flex-row-reverse gap-3">
                                            <button wire:click="closeModal"
                                                    class="inline-flex items-center rounded-lg bg-gray-900 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>

    </div>
</div>
