<div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg h-full">
        <div class="mb-6 text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Routers</h2>
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
        </div>
    </div>
</div>
