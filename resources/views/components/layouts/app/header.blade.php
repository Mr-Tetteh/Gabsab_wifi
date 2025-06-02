@php use Illuminate\Support\Facades\Auth; @endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark" xmlns:flux="http://www.w3.org/1999/html">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800">

<flux:header container class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left"/>


    @if(Auth::user())
        <a href="{{ route('admin.dashboard') }}"
           class="ms-2 me-5 flex items-center space-x-2 rtl:space-x-reverse lg:ms-0"
           wire:navigate>
            <x-app-logo/>
        </a>
    @else
        <a href="{{ route('home') }}" class="ms-2 me-5 flex items-center space-x-2 rtl:space-x-reverse lg:ms-0"
           wire:navigate>
            <x-app-logo/>
        </a>
    @endif
    <flux:spacer/>
    <flux:spacer/>


    @if(Auth::user())
        <flux:navbar class="-mb-px max-lg:hidden">
            <flux:navbar.item icon="layout-grid" :href="route('admin.dashboard')"
                              :current="request()->routeIs('admin.dashboard')"
                              wire:navigate>
                {{ __('Dashboard') }}
            </flux:navbar.item>
        </flux:navbar>
    @endif
    <flux:navbar class="-mb-px max-lg:hidden">
        @if(!Auth::user())
            <flux:navbar.item icon="arrow-left-end-on-rectangle" :href="route('login')"
                              :current="request()->routeIs('login')"
                              wire:navigate>
                {{ __('Login') }}
            </flux:navbar.item>
        @endif
    </flux:navbar>
    <flux:navbar class="-mb-px max-lg:hidden">
        @if(!Auth::user())
            <flux:navbar.item icon="arrow-right-start-on-rectangle" :href="route('register')"
                              :current="request()->routeIs('register')"
                              wire:navigate>
                {{ __('Register') }}
            </flux:navbar.item>
        @endif
    </flux:navbar>
    <flux:spacer/>

    @if(Auth::user())
        <!-- Desktop User Menu -->
        <flux:dropdown position="top" align="end">
            <flux:profile
                class="cursor-pointer"
                :initials="auth()->user()->initials()"
            />
            <flux:menu>
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                            <div class="grid flex-1 text-start text-sm leading-tight">
                                <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                    </div>
                </flux:menu.radio.group>

                <flux:menu.separator/>

                <flux:menu.radio.group>
                    <flux:menu.item :href="route('settings.profile')" icon="cog"
                                    wire:navigate>{{ __('Settings') }}</flux:menu.item>
                </flux:menu.radio.group>

                <flux:menu.separator/>

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                        {{ __('Log Out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    @endif
</flux:header>


<!-- Mobile Menu -->
<flux:sidebar stashable sticky
              class="lg:hidden border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">

    <flux:sidebar.toggle class="lg:hidden" icon="x-mark"/>

    <x-app-logo/>


    <flux:navlist variant="outline">
        @if(Auth::user())

            <flux:navlist.group :heading="__('Platform')">
                <flux:navlist.item icon="layout-grid" :href="route('admin.dashboard')"
                                   :current="request()->routeIs('admin.dashboard')" wire:navigate>
                    {{ __('Dashboard') }}
                </flux:navlist.item>
            </flux:navlist.group>
        @endif
        @if(!Auth::user())

            <flux:navlist.group :heading="__('Platform')">
                <flux:navlist.item icon="arrow-left-end-on-rectangle" :href="route('login')"
                                   :current="request()->routeIs('login')" wire:navigate>
                    {{ __('Login') }}
                </flux:navlist.item>
                <flux:navlist.item icon="arrow-right-start-on-rectangle" :href="route('register')"
                                   :current="request()->routeIs('register')" wire:navigate>
                    {{ __('Register') }}
                </flux:navlist.item>
            </flux:navlist.group>
        @endif

    </flux:navlist>

    <flux:spacer/>
    <flux:spacer/>
    <flux:spacer/>
    <flux:spacer/>
    <flux:spacer/>
    <flux:spacer/>
    <flux:spacer/>
    <flux:spacer/>
    <flux:spacer/>
    <flux:spacer/>
    <flux:spacer/>
    <flux:spacer/>
    <flux:spacer/>


</flux:sidebar>

{{ $slot }}

<flux:footer class="relative bg-gradient-to-b from-gray-900 to-black text-white ">
    <!-- Top Wave Decoration -->
    <div class="absolute inset-x-0 -top-1">
        <svg class="w-full h-8 fill-current text-white" viewBox="0 0 1440 48" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0,48L80,40C160,32,320,16,480,16C640,16,800,32,960,37.3C1120,43,1280,37,1360,34.7L1440,32L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
        </svg>
    </div>

    <div class="container mx-auto px-4 pt-24 pb-12">
        <div class="container mx-auto ">
            <div class="flex flex-col lg:flex-row justify-between gap-10 lg:gap-96 lg:space-x-96 mb-16">
                <!-- About Section (Left) -->
                <div class="space-y-8 flex-1">
                    <div class="flex flex-col items-center md:items-start">
                        <a href="#" class="group relative">
                    <span
                        class="text-3xl font-black tracking-wider bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">Gabsab</span>
                            <span
                                class="absolute -bottom-2 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-400 to-purple-500 transition-all group-hover:w-full"></span>
                        </a>
                        <div class="mt-6 space-y-3 text-gray-300 text-center md:text-left">
                            <p class="flex items-center justify-center md:justify-start gap-2">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                Meduma, Ghana-Kumasi
                            </p>
                            <p class="flex items-center justify-center md:justify-start gap-2">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <a href="tel:0559724772" class="hover:text-blue-400 transition-all duration-300">0559724772</a>
                            </p>
                            <p class="flex items-center justify-center md:justify-start gap-2">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <a href="mailto:gabasf@gmail.com"
                                   class="hover:text-blue-400 transition-all duration-300">gabas@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Useful Links (Right) -->
                <div class="text-center md:text-left flex-1">
                    <h4 class="text-xl font-bold mb-8 relative inline-block">
                        Useful Links
                        <span
                            class="absolute bottom-0 left-0 w-1/2 h-1 bg-gradient-to-r from-blue-400 to-purple-500"></span>
                    </h4>
                    <ul class="space-y-4">
                        <li class="transform transition-transform duration-300 hover:-translate-y-1">
                            <a href="{{route('home')}}"
                               class="group flex items-center justify-center md:justify-start gap-2 text-gray-300 hover:text-blue-400 transition-colors">
                        <span
                            class="w-5 h-0.5 bg-blue-400 transform transition-transform duration-300 group-hover:w-6"></span>
                                Home
                            </a>
                        </li>
                        <li class="transform transition-transform duration-300 hover:-translate-y-1">
                            <a href="#"
                               class="group flex items-center justify-center md:justify-start gap-2 text-gray-300 hover:text-blue-400 transition-colors">
                        <span
                            class="w-5 h-0.5 bg-blue-400 transform transition-transform duration-300 group-hover:w-6"></span>
                                About us
                            </a>
                        </li>
                        <li class="transform transition-transform duration-300 hover:-translate-y-1">
                            <a href="#"
                               class="group flex items-center justify-center md:justify-start gap-2 text-gray-300 hover:text-blue-400 transition-colors">
                        <span
                            class="w-5 h-0.5 bg-blue-400 transform transition-transform duration-300 group-hover:w-6"></span>
                                Contact
                            </a>
                        </li>
                        <li class="transform transition-transform duration-300 hover:-translate-y-1">
                            <a href="{{route('login')}}"
                               class="group flex items-center justify-center md:justify-start gap-2 text-gray-300 hover:text-blue-400 transition-colors">
                        <span
                            class="w-5 h-0.5 bg-blue-400 transform transition-transform duration-300 group-hover:w-6"></span>
                                Login
                            </a>
                        </li>
                        <li class="transform transition-transform duration-300 hover:-translate-y-1">
                            <a href="{{route('register')}}"
                               class="group flex items-center justify-center md:justify-start gap-2 text-gray-300 hover:text-blue-400 transition-colors">
                        <span
                            class="w-5 h-0.5 bg-blue-400 transform transition-transform duration-300 group-hover:w-6"></span>
                                Register
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Copyright Section -->
            <div class="border-t border-gray-800 pt-8">
                <div class="text-center space-y-4">
                    <p class="text-gray-300">
                        © <span class="text-gray-400">Copyright</span>
                        <strong class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">Gabsab</strong>
                        <span class="text-gray-400">All Rights Reserved</span>
                    </p>
                    <p class="text-gray-400">
                        Designed by
                        <a href="mailto:danielstay73@gmail.com" class="relative inline-block group">
                            <span class="text-blue-400 group-hover:text-blue-300 transition-colors">Mr.Tetteh</span>
                            <span
                                class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-400 transition-all group-hover:w-full"></span>
                        </a>
                    </p>
                    @if(! Auth::user())
                        <a href="{{route('login')}}" class="text-gray-400">Login</a>
                    @endif
                </div>
            </div>
        </div>
</flux:footer>

@fluxScripts
</body>
</html>
