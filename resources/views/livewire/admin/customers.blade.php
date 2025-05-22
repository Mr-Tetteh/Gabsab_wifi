<div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
<p class="text-center text-2xl font-sans">List Of Customers</p>
    <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg h-full">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
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
                                <button class="font-medium text-blue-600 hover:underline">Edit</button>
                                <button class="font-medium text-red-600 hover:underline">Delete</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
