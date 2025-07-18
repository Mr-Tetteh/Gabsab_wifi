<div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 text-center">
        <a href="{{ route('admin.users') }}"
            class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 shadow-sm
            transition-all hover:shadow-md dark:border-neutral-700 dark:bg-neutral-800">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20"/>
            <div class="relative z-10 flex flex-col">
                <div class="flex items-center gap-2 text-blue-600 dark:text-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <span class="text-lg font-semibold">Admin Users</span>
                </div>
                <p class="mt-2 text-2xl  font-bold text-gray-700 dark:text-gray-200">{{$admin}}</p>
            </div>
        </a>

        <a href="{{route('admin.customers')}}"
            class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 shadow-sm transition-all hover:shadow-md dark:border-neutral-700 dark:bg-neutral-800">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20"/>
            <div class="relative z-10 flex flex-col">
                <div class="flex items-center gap-2 text-green-600 dark:text-green-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    <span class="text-lg font-semibold">Total Customers</span>
                </div>
                <p class="mt-2 text-2xl font-bold text-gray-700 dark:text-gray-200">{{$customers}}</p>
            </div>
        </a>

        <a href="{{route('admin.new.customers')}}"
            class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 shadow-sm transition-all hover:shadow-md dark:border-neutral-700 dark:bg-neutral-800">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20"/>
            <div class="relative z-10 flex flex-col">
                <div class="flex items-center gap-2 text-purple-600 dark:text-purple-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                    </svg>
                    <span class="text-lg font-semibold">New Customers Today</span>
                </div>
                <p class="mt-2 text-2xl font-bold text-gray-700 dark:text-gray-200">{{$today_customers}}</p>
            </div>
        </a>

        <a href="{{route('admin.router')}}"
            class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 shadow-sm transition-all hover:shadow-md dark:border-neutral-700 dark:bg-neutral-800">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20"/>
            <div class="relative z-10 flex flex-col">
                <div class="flex items-center gap-2 text-red-600 dark:text-red-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"/>
                    </svg>
                    <span class="text-lg font-semibold">Total Routers</span>
                </div>
                <p class="mt-2 text-2xl font-bold text-gray-700 dark:text-gray-200">{{$routers}}</p>
            </div>
        </a>

        <a href="{{route('admin.active.routers')}}"
            class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 shadow-sm transition-all hover:shadow-md dark:border-neutral-700 dark:bg-neutral-800">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20"/>
            <div class="relative z-10 flex flex-col">
                <div class="flex items-center gap-2 text-yellow-600 dark:text-yellow-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M5.636 18.364a9 9 0 010-12.728m12.728 0a9 9 0 010 12.728m-9.9-2.829a5 5 0 010-7.07m7.072 0a5 5 0 010 7.07M13 12a1 1 0 11-2 0 1 1 0 012 0z"/>
                    </svg>
                    <span class="text-lg font-semibold">Active Routers</span>
                </div>
                <p class="mt-2 text-2xl font-bold text-gray-700 dark:text-gray-200">{{$active_routers}}</p>
            </div>
        </a>

        <div
            class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 shadow-sm transition-all hover:shadow-md dark:border-neutral-700 dark:bg-neutral-800">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20"/>
            <div class="relative z-10 flex flex-col">
                <div class="flex items-center gap-2 text-indigo-600 dark:text-indigo-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    <span class="text-lg font-semibold">Active Subscribers</span>
                </div>
                <p class="mt-2 text-2xl font-bold text-gray-700 dark:text-gray-200">0</p>
            </div>
        </div>

        <div
            class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 shadow-sm transition-all hover:shadow-md dark:border-neutral-700 dark:bg-neutral-800">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20"/>
            <div class="relative z-10 flex flex-col">
                <div class="flex items-center gap-2 text-pink-600 dark:text-pink-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-lg font-semibold">Expired Subscribers</span>
                </div>
                <p class="mt-2 text-2xl font-bold text-gray-700 dark:text-gray-200">0</p>
            </div>
        </div>
    </div>

    <div
        class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-800">
        <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20"/>
        <div class="relative z-10">
            <!-- Add your chart or additional content here -->
        </div>
    </div>
</div>
