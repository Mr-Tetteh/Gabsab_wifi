<div class="container mx-auto p-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Form Section -->
        <div class="bg-white rounded-lg shadow-md p-6">
            @if (session()->has('message'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow-md">
                    {{ session('message') }}
                </div>
            @endif
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Router Details</h2>
                <p class="text-gray-600">Add new router information to the system</p>
            </div>

            <form class="space-y-4" wire:submit.prevent="{{$Edit ? 'update' : 'create'}}">
                <div>
                    <label for="model" class="block text-sm font-medium text-gray-700 mb-1">Model</label>
                    <input
                        id="model"
                        wire:model="model"
                        type="text"
                        placeholder="Enter router model"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none
                         focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                    >
                    @error('model')
                    <div class="text-red-600">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div>
                    <label for="mac_address" class="block text-sm font-medium text-gray-700 mb-1">MAC Address</label>
                    <input
                        id="mac_address"
                        wire:model="mac_address"
                        type="text"
                        placeholder="XX:XX:XX:XX:XX:XX"
                        pattern="^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                    >
                </div>
                @error('mac_address')
                <div class="text-red-600">
                    {{$message}}
                </div>
                @enderror

                <div>
                    <label for="serial_number" class="block text-sm font-medium text-gray-700 mb-1">Serial
                        Number</label>
                    <input
                        id="serial_number"
                        wire:model="serial_number"
                        type="text"
                        placeholder="Enter serial number"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"

                    >
                    @error('serial_number')
                    <div class="text-red-600">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div>
                    <label for="antenna_number" class="block text-sm font-medium text-gray-700 mb-1">Antenna
                        Number</label>
                    <input
                        id="antenna_number"
                        wire:model="antenna_number"
                        type="text"
                        placeholder="Enter antenna count"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                    >
                    @error('antenna_number')
                    <div class="text-red-600">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                @if($Edit)
                    <div>
                        <label for="antenna_number" class="block text-sm font-medium text-gray-700 mb-1">User
                            unique_id</label>
                        <input
                            id="antenna_number"
                            wire:model="unique_id"
                            type="text"
                            placeholder="Enter antenna count"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                        >
                    </div>

                    <div>
                        <label for="antenna_number" class="block text-sm font-medium text-gray-700 mb-1">Status
                        </label>
                        <select
                            id="status"
                            wire:model="status"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none
                        focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                        >
                            <option value="0">Inactive</option>
                            <option value="1">Active</option>
                        </select>
                        @error('status')
                        <div class="text-red-600">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                @endif

                <button
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                >
                    {{$Edit ? 'Update Router' : 'Add Router'}}
                </button>
            </form>
        </div>

        <!-- Table Section -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Router Inventory</h2>
                <p class="text-gray-600">Current routers in the system</p>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Model
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">MAC
                            Address
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Serial Number
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Antennas
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            User
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Date
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody id="routerTableBody" class="bg-white divide-y divide-gray-200">
                    @foreach($routers as $router)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">{{$router->model}}</td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500 font-mono">{{$router->mac_address}}</td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    {{$router->serial_number}}
                                </span>
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                {{$router->antenna_number}}
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
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">{{$router->created_at->format('M d, Y')}}</td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500 space-x-5">
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
            </div>
        </div>
    </div>
</div>

