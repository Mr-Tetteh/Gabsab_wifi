<div class="bg-gray-50 min-h-screen py-8">
    <div class="container mx-auto px-4 max-w-4xl">
        <!-- Simple Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Service Reports</h1>
            <p class="text-gray-600">Customer issues and engineering solutions</p>
        </div>

        <!-- Simple Cards -->
        @foreach($datas as $data)

            <div class="space-y-6">
                @if($data->engineer_solution)
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                        <!-- Header -->
                        <div class="flex items-center justify-between mb-6">
                            <div
                                class="inline-flex items-center px-4 py-2 rounded-full bg-indigo-50 border border-indigo-100">
                                <svg class="w-4 h-4 text-indigo-500 mr-2" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <time
                                    class="text-sm font-medium text-indigo-700">{{$data->created_at->format('D, M j, Y')}}</time>
                            </div>
                            <div class="w-2 h-2 rounded-full bg-green-400 animate-pulse" title="Resolved"></div>
                        </div>

                        <!-- Content Sections -->
                        <div class="space-y-6">
                            <!-- Issue -->
                            <div class="mb-8">
                                <div class="flex items-center mb-4">
                                    <div class="w-8 h-8 rounded-lg bg-red-100 flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-lg font-bold text-gray-900">Customer Issue</h2>
                                </div>
                                <div class="bg-red-50 border-l-4 border-red-400 p-4 rounded-r-lg">
                                    <p class="text-gray-800 leading-relaxed">{{$data->customer_issue}}</p>
                                </div>
                            </div>

                            <!-- Report -->
                            <div class="mb-8">
                                <div class="flex items-center mb-4">
                                    <div class="w-8 h-8 rounded-lg bg-yellow-100 flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-yellow-600" fill="none" stroke="currentColor"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-lg font-bold text-gray-900">Engineering Report</h2>
                                </div>
                                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded-r-lg">
                                    <p class="text-gray-800 leading-relaxed">{{$data->engineer_report}}</p>
                                </div>
                            </div>

                            <!-- Solution -->
                            <div class="mb-8">
                                <div class="flex items-center mb-4">
                                    <div class="w-8 h-8 rounded-lg bg-green-100 flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-lg font-bold text-gray-900">Solution Implemented</h2>
                                </div>
                                <div class="bg-green-50 border-l-4 border-green-400 p-4 rounded-r-lg">
                                    <p class="text-gray-800 leading-relaxed">{{$data->engineer_solution}}</p>
                                </div>
                            </div>

                            <!-- Engineer Info -->
                            <div class="mt-6 pt-6 border-t border-gray-100">
                                <div class="flex items-center">
                                    <div
                                        class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center mr-3">
                                <span class="text-gray-700 font-medium text-sm">
                                    {{substr($data->fix?->first_name, 0, 1)}}{{substr($data->fix?->last_name, 0, 1)}}
                                </span>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900">{{$data->fix?->first_name}} {{$data->fix?->last_name}}</p>
                                        <a href="tel:{{$data->fix?->contact}}"
                                           class="text-sm text-gray-500 hover:text-blue-400">{{$data->fix?->contact}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    @endforeach

                    <!-- Simple Empty State -->
                    @if(empty($datas) || !$datas->where('engineer_solution')->count())
                        <div class="bg-white rounded-lg border border-gray-200 p-12 text-center">
                            <div
                                class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">No Reports Available</h3>
                            <p class="text-gray-500">Service reports will appear here once available.</p>
                        </div>
                    @endif

                    <div>
                        {{$datas->links()}}
                    </div>

            </div>
    </div>
</div>
