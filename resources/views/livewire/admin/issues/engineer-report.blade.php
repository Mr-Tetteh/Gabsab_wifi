@php use App\Models\User; @endphp
<div class="container mx-auto lg:p-6">
    <div class="grid grid-cols-1 lg:grid-cols-1 gap-8">
        <!-- Table Section -->
        <div class="bg-white rounded-lg shadow-md lg:p-6">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Customer Complains</h2>
                <p class="text-gray-600">List of all customer complains</p>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Customer Issue
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Engineer Assigned
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Engineer_report
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Engineer Solution
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Fixed By
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Created At
                        </th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                    </thead>
                    <tbody id="routerTableBody" class="bg-white divide-y divide-gray-200">
                    @foreach($datas as $data)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">

                                {{$data->customer_issue}}
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                {{$data->engineer_first_name}}
                            </td>

                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                @if($data->engineer_report)
                                    <span>
                                    {{$data->engineer_report}}
                                    </span>
                                @else
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Not Attended to
                                    </span>
                                @endif
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                @if($data->engineer_solution)
                                    {{$data->engineer_solution}}
                                @else
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Not Attended to
                                    </span>
                                @endif
                            </td>

                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                @if($data->user_id)
                                    {{$data->fix->first_name}} {{$data->fix->last_name}}
                                @else
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Not Attended to
                                    </span>
                                @endif
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                {{$data->created_at->diffForHumans()}}
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500 space-x-5">
                                <button
                                    wire:click="edit({{$data->id}})"
                                    class="text-blue-600 hover:text-blue-900 focus:outline-none"
                                >
                                    Upload Report
                                </button>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{$datas->links()}}


    @if($modal)
        <div class="relative z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-900/75 backdrop-blur-sm transition-opacity"></div>

            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex min-h-full items-center justify-center p-4">
                    <div
                        class="relative w-full max-w-4xl transform overflow-hidden rounded-2xl bg-white shadow-2xl transition-all">
                        <!-- Header -->


                        <div class="bg-white rounded-lg shadow-md p-6">

                            <div class="mb-6">
                                <h2 class="text-2xl font-bold text-gray-800 mb-2">Customer Complains</h2>
                                <p class="text-gray-600">Add new Customer Complain</p>
                            </div>
                            @if (session()->has('message'))
                                <div
                                    class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow-md">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <form class="space-y-4" wire:submit.prevent="update">
                                <div>
                                    <label for="model" class="block text-sm font-medium text-gray-700 mb-1">Customer
                                        Issue</label>
                                    <textarea
                                        id="model"
                                        wire:model="customer_issue"
                                        type="text"
                                        placeholder="Enter Customer Issue"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none
                         focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                        disabled
                                    >
                    </textarea>
                                    @error('customer_issue')
                                    <div class="text-red-600">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div>
                                    <label for="model" class="block text-sm font-medium text-gray-700 mb-1">Engineer's
                                        Report
                                    </label>
                                    <textarea
                                        id="model"
                                        wire:model="engineer_report"
                                        type="text"
                                        placeholder="Enter Customer Issue"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none
                         focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                    >
                                </textarea>
                                    @error('engineer_report')
                                    <div class="text-red-600">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>


                                <div>
                                    <label for="model" class="block text-sm font-medium text-gray-700 mb-1">Engineer's
                                        Solution
                                    </label>
                                    <textarea
                                        id="model"
                                        wire:model="engineer_solution"
                                        type="text"
                                        placeholder="Enter Customer Issue"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none
                         focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                    >
                                </textarea>
                                    @error('engineer_solution')
                                    <div class="text-red-600">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <button
                                    type="submit"
                                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                                >
                                    Upload Report
                                </button>
                            </form>


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





