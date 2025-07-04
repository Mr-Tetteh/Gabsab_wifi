@php use App\Models\Router;use Illuminate\Support\Facades\Auth; @endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800">
<flux:sidebar sticky stashable class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
    <flux:sidebar.toggle class="lg:hidden" icon="x-mark"/>
    @if(Auth::user())
        <a href="{{ route('admin.dashboard') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse"
           wire:navigate>
            <x-app-logo/>
        </a>
    @else
        <a href="{{ route('home') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
            <x-app-logo/>
        </a>
    @endif

    <div class="flex flex-col gap-2">
        <div>
            Your Unique ID:
        </div>
        <div>
            {{Auth::user()->unique_id}}
        </div>
    </div>
    <br>
    @if(Auth::user()->role == 'admin' || Auth::user()->role == 'super_admin')

        <flux:navlist variant="outline">
            <flux:navlist.group :heading="__('Platform')" class="grid">
                <flux:navlist.item icon="home" :href="route('admin.dashboard')"
                                   :current="request()->routeIs('admin.dashboard')"
                                   wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
                <flux:navlist.item icon="wifi" :href="route('admin.router')"
                                   :current="request()->routeIs('admin.router')"
                                   wire:navigate>{{ __('Routers') }}</flux:navlist.item>
                <flux:navlist.item icon="currency-dollar" :href="route('admin.price')"
                                   :current="request()->routeIs('admin.price')"
                                   wire:navigate>{{ __('Set Price') }}</flux:navlist.item>

                <flux:navlist.item icon="pencil" :href="route('admin.customer_issues')"
                                   :current="request()->routeIs('admin.customer_issues')"
                                   wire:navigate>{{ __('Customer_Issue') }}</flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>

        <flux:navlist variant="outline">
            <flux:navlist.group :heading="__('Users')" class="grid">
                <flux:navlist.item icon="user" :href="route('admin.users')" :current="request()->routeIs('admin.users')"
                                   wire:navigate>{{ __('Users') }}</flux:navlist.item>

                <flux:navlist.item icon="users" :href="route('admin.customers')"
                                   :current="request()->routeIs('admin.customers')"
                                   wire:navigate>{{ __('Customers') }}</flux:navlist.item>

                <flux:navlist.item icon="wrench" :href="route('admin.engineer')"
                                   :current="request()->routeIs('admin.engineer')"
                                   wire:navigate>{{ __('Engineer') }}</flux:navlist.item>

            </flux:navlist.group>
        </flux:navlist>
    @endif


    @if(Auth::user()->role == 'admin' || Auth::user()->role == 'super_admin' || Auth::user()->role == 'engineer')
        <flux:navlist variant="outline">
            <flux:navlist.group :heading="__('Engineers Hub')" class="grid">
                <flux:navlist.item icon="pencil-square" :href="route('admin.engineer_doc')"
                                   :current="request()->routeIs('admin.engineer_doc')"
                                   wire:navigate>{{ __('Engineer Documentation') }}</flux:navlist.item>

                <flux:navlist.item icon="document" :href="route('admin.documented_reports')"
                                   :current="request()->routeIs('admin.documented_reports')"
                                   wire:navigate>{{ __('Documented Reports') }}</flux:navlist.item>

            </flux:navlist.group>
        </flux:navlist>
    @endif


    <flux:navlist variant="outline">
        <flux:navlist.group :heading="__('Panel')" class="grid">
            <flux:navlist.item icon="home" :href="route('customer.dashboard')"
                               :current="request()->routeIs('customer.dashboard')"
                               wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
            <flux:navlist.item icon="wifi" :href="route('customer.routers')"
                               :current="request()->routeIs('customer.routers')"
                               wire:navigate>{{ __('Routers') }}</flux:navlist.item>


            @if(Auth::user()->unique_id && \App\Models\Router::where('unique_id', Auth::user()->unique_id)->first())
                <flux:navlist.item icon="credit-card" :href="route('customer.subscriptions')"
                                   :current="request()->routeIs('customer.subscriptions')"
                                   wire:navigate>{{ __('Subscribe') }}</flux:navlist.item>

            @endif

        </flux:navlist.group>
    </flux:navlist>



    <flux:navlist variant="outline">
        <flux:navlist.group :heading="__('UX')" class="grid">
            <flux:navlist.item icon="home-modern" :href="route('home')" :current="request()->routeIs('home')"
                               wire:navigate>{{ __('Home') }}</flux:navlist.item>
        </flux:navlist.group>
    </flux:navlist>





    <flux:spacer/>


    {{--    <flux:navlist variant="outline">--}}
    {{--        <flux:navlist.item icon="folder-git-2" href="https://github.com/laravel/livewire-starter-kit" target="_blank">--}}
    {{--            {{ __('Repository') }}--}}
    {{--        </flux:navlist.item>--}}

    {{--        <flux:navlist.item icon="book-open-text" href="https://laravel.com/docs/starter-kits#livewire" target="_blank">--}}
    {{--            {{ __('Documentation') }}--}}
    {{--        </flux:navlist.item>--}}
    {{--    </flux:navlist>--}}

    <!-- Desktop User Menu -->
    <flux:dropdown position="bottom" align="start">
        <flux:profile
            :name="auth()->user()->first_name . ' ' .auth()->user()->last_name"
            :initials="auth()->user()->initials()"
            icon-trailing="chevrons-up-down"
        />

        <flux:menu class="w-[220px]">
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
</flux:sidebar>

<!-- Mobile User Menu -->
<flux:header class="lg:hidden">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left"/>

    <flux:spacer/>

    <flux:dropdown position="top" align="end">
        <flux:profile
            :initials="auth()->user()->initials()"
            icon-trailing="chevron-down"
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
</flux:header>

{{ $slot }}

@fluxScripts
</body>
</html>
