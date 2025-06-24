<div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
    <p class="text-center text-2xl font-sans">Customer Crew: The Real MVPs ✨</p>

    <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg h-full">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-4">
                        Unique ID
                    </th>
                    <th scope="col" class="px-6 py-4">
                        Full Name
                    </th>
                    <th scope="col" class="px-6 py-4">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-4">
                        Contact Number
                    </th>
                    <th scope="col" class="px-6 py-4">
                        Address
                    </th>
                    <th scope="col" class="px-6 py-4">
                        Router(s)
                    </th>
                    <th scope="col" class="px-6 py-4">
                        Gender
                    </th>
                    <th scope="col" class="px-6 py-4">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-4">
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($datas as $data)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $data->unique_id }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $data->first_name }} {{ $data->last_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->contact}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->address}}
                        </td>
                        <td class="px-6 py-4">
                            @if($data->routers->isEmpty())
                                <div class="text-red-500">No routers assigned</div>
                            @else
                                @foreach($data->routers as $router)
                                    <div><span class="font-bold">Model: </span> {{ $router->model }}</div>
                                    <div><span class="font-bold">Mac Address: </span> {{ $router->mac_address }}</div>
                                    <div><span class="font-bold">Serial Number: </span> {{ $router->serial_number }}
                                    </div>
                                    <div><span class="font-bold">Antenna Number: </span> {{ $router->antenna_number }}
                                    </div>

                                    <br>
                                @endforeach
                            @endif
                        </td>
                        <td class="px-6 py-4">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight rounded-full {{ $data->gender === 'male' ? 'text-blue-700 bg-blue-100' : 'text-pink-700 bg-pink-100' }}">
                                    {{$data->gender}}
                                </span>
                        </td>
                        <td class="px-6 py-4">
                            {{$data->created_at->format('M d, Y')}}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                                <flux:modal.trigger name="edit-profile">
                                    <flux:button wire:click="edit({{$data->id}})">Edit Role</flux:button>
                                </flux:modal.trigger>

                                <button class="font-medium text-red-600 hover:underline">Delete</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
                <flux:modal name="edit-profile" class="md:w-96">
                    @if (session()->has('message'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow-md">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form wire:submit.prevent="update">

                        <div class="space-y-6">
                            <div>
                                <flux:heading size="lg">Update profile</flux:heading>
                                <flux:text class="mt-2">Make changes to details.</flux:text>
                            </div>
                            <flux:input wire:model="first_name" label="First Name" placeholder="First Name"/>
                            {{--                        <flux:input wire:model="router_id" label="Router_id" placeholder="router_id"/>--}}

                            <flux:select wire:model="role" placeholder="Choose Role...">
                                <flux:select.option>super_admin</flux:select.option>
                                <flux:select.option>admin</flux:select.option>
                                <flux:select.option>customer</flux:select.option>
                                <flux:select.option>engineer</flux:select.option>

                            </flux:select>
                            <div class="flex">
                                <flux:spacer/>
                                <Button type="submit"  class="p-2 rounded-2xl bg-black text-white">Save Changes</Button>
                            </div>
                        </div>
                    </form>
                </flux:modal>
                </tbody>
            </table>
        </div>
    </div>
</div>
