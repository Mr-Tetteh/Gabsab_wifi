<div>
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
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Price Details</h2>
                    <p class="text-gray-600">Add new router information to the system</p>
                </div>

                <form class="space-y-4" wire:submit.prevent="{{$Edit ? 'update' : 'create'}}">
                    <div>
                        <label for="model" class="block text-sm font-medium text-gray-700 mb-1">Package Name</label>
                        <input
                            id="model"
                            wire:model="name"
                            type="text"
                            placeholder="Enter router model"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none
                         focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                        >
                        @error('name')
                        <div class="text-red-600">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <label for="mac_address" class="block text-sm font-medium text-gray-700 mb-1">Price</label>
                        <input
                            id="mac_address"
                            wire:model="price"
                            type="text"
                            placeholder="Enter price"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                        >
                    </div>
                    @error('price')
                    <div class="text-red-600">
                        {{$message}}
                    </div>
                    @enderror

                    <div>
                        <label for="serial_number" class="block text-sm font-medium text-gray-700 mb-1">Quantity
                        </label>
                        <input
                            id="serial_number"
                            wire:model="quantity"
                            type="text"
                            placeholder="Enter quantity"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"

                        >
                        @error('quantity')
                        <div class="text-red-600">
                            {{$message}}
                        </div>
                        @enderror
                    </div>


                    <div>
                        <label for="antenna_number" class="block text-sm font-medium text-gray-700 mb-1">Advantage 1
                        </label>
                        <input
                            id="antenna_number"
                            wire:model="adv_1"
                            type="text"
                            placeholder="Enter First advantage"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                        >
                        @error('adv_1')
                        <div class="text-red-600">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div>
                        <label for="antenna_number" class="block text-sm font-medium text-gray-700 mb-1">Advantage 2
                        </label>
                        <input
                            id="antenna_number"
                            wire:model="adv_2"
                            type="text"
                            placeholder="Enter First advantage"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                        >
                        @error('adv_2')
                        <div class="text-red-600">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div>
                        <label for="antenna_number" class="block text-sm font-medium text-gray-700 mb-1">Advantage 3
                        </label>
                        <input
                            id="antenna_number"
                            wire:model="adv_3"
                            type="text"
                            placeholder="Enter First advantage"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                        >
                        @error('adv_3')
                        <div class="text-red-600">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div>
                        <label for="antenna_number" class="block text-sm font-medium text-gray-700 mb-1">Advantage 4
                        </label>
                        <input
                            id="antenna_number"
                            wire:model="adv_4"
                            type="text"
                            placeholder="Enter First advantage"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                        >
                        @error('adv_4')
                        <div class="text-red-600">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <label for="antenna_number" class="block text-sm font-medium text-gray-700 mb-1">Advantage 5
                        </label>
                        <input
                            id="antenna_number"
                            wire:model="adv_5"
                            type="text"
                            placeholder="Enter First advantage"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                        >
                        @error('adv_5')
                        <div class="text-red-600">
                            {{$message}}
                        </div>
                        @enderror
                    </div>


                    <button
                        type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                    >
                        {{$Edit ? 'Update Price' : 'Add Price'}}
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
                            <th class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                Package Name
                            </th>
                            <th class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                Price
                            </th>
                            <th class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                Quantity
                            </th>

                            <th class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                Advantage 1
                            </th>
                            <th class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                Advantage 2
                            </th>
                            <th class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                Advantage 3
                            </th>
                            <th class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                Advantage 4
                            </th>
                            <th class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                Advantage 5
                            </th>
                            <th class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                Date
                            </th>
                            <th class="px-6 py-3.5 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
                                Action
                            </th>

                        </tr>
                        </thead>
                        <tbody id="routerTableBody" class="bg-white divide-y divide-gray-200">
                        @foreach($datas as $data)

                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    {{$data->name}}
                                </span>
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                    {{$data->price}}

                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                    {{$data->quantity}}
                                </td>


                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                    {{$data->adv_1}}
                                </td>

                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                    {{$data->adv_2}}
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                    {{$data->adv_3}}
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                    {{$data->adv_4}}
                                </td>

                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                    {{$data->adv_5}}
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                    {{$data->created_at->format('d-m-Y')}}
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500 space-x-5">

                                    <button
                                        wire:click="edit({{$data->id}})"
                                        class="text-blue-600 hover:text-blue-900 focus:outline-none"
                                    >
                                        Edit
                                    </button>
                                    <button
                                        wire:click="delete({{$data->id}})"
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
</div>
