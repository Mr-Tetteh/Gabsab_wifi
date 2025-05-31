<div class="container mx-auto p-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Form Section -->
        <div class="bg-white rounded-lg shadow-md p-6">
            @if (session()->has('message'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow-md">
                    {{ session('message') }}
                </div>
            @endif
            <div class="mb-6 text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Time to Level Up Your Connection! 🚀 </h2>
                <p class="text-gray-600">Subscribe to activate your router and enjoy uninterrupted connectivity.</p>
            </div>

            <form class="space-y-4" wire:submit.prevent="create">
                <div>
                    <label for="model" class="block text-sm font-medium text-gray-700 mb-1">Serial Number</label>
                    <select wire:model="serial_number"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                        <option selected disabled>Select an option</option>
                        @foreach($routers as $router)
                            <option value="{{ $router->serial_number }}">{{ $router->serial_number }}</option>
                        @endforeach
                    </select>


                </div>

                <div>
                    <label for="mac_address" class="block text-sm font-medium text-gray-700 mb-1">Amount</label>
                    <select wire:model="amount"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                        <option selected disabled>Select an option</option>
                        @foreach($prices as $price)
                            <option value="{{ $price->price }}">{{$price->name}}- GHC{{ $price->price }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="serial_number" class="block text-sm font-medium text-gray-700 mb-1">Contact
                    </label>
                    <input
                        id="serial_number"
                        wire:model="contact"
                        type="number"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"

                    >
                    @error('contact')
                    <div class="text-red-600">
                        {{$message}}
                    </div>
                    @enderror
                    <p class="text-sm text-gray-500">Payment request will be sent to the provided number.</p>
                </div>


                <button
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                >
                    Make Payment
                </button>
            </form>
        </div>

        <!-- Table Section -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="mb-6 text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Peep Your Subs 👀</h2>
                <p class="text-gray-600">Get the lowdown on your sub game, no cap!</p>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Serial Number
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Amount
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Contact
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Subscription Date
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Expiry Date
                        </th>
                    </tr>
                    </thead>
                    <tbody id="routerTableBody" class="bg-white divide-y divide-gray-200">
                    @foreach($datas as $data)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                {{$data->serial_number}}
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                               GHC {{$data->amount}}

                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                {{$data->contact}}

                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                @if($router->status === 1)
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                Successful
                                            </span>
                                @else
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-yellow-800">
                                                Pending
                                            </span>
                                @endif
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                {{ \Carbon\Carbon::parse($data->subscription_date)->format('jS F, Y') }}
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                {{ \Carbon\Carbon::parse($data->expiry_date)->format('jS F, Y') }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
