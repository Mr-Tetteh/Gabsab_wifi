<div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg h-full">
        <div class="mb-6 text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Router(s)</h2>
            <p class="text-gray-600">Your current  routers in the system</p>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
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
                <tbody id="routerTableBody" class="bg-white divide-y divide-gray-200">
                @foreach($routers as $router)

                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                            {{$router->model}}
                        </td>

                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                            {{$router->mac_address}}
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                            {{$router->serial_number}}
                        </td>

                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                            {{$router->antenna_number}}
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                            @if($router->status == 1)
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Active
                                </span>
                            @else
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    Inactive
                                </span>
                            @endif
                        </td>
                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500 space-x-5">
                            {{$router->created_at->format('d-M-Y')}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            @if(empty($routers) || !$routers->where('serial_number')->count())
                <div class="bg-white rounded-lg border border-gray-200 p-12 text-center">
                    <div
                        class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No Router</h3>
                    <p class="text-gray-500">No Router has been assigned to you yet</p>
                </div>
            @endif
        </div>
    </div>
</div>
