<nav class="flex flex-col h-full bg-white text-slate-300 border-r border-gray-200">
    
    <div class="flex items-center justify-center h-20 bg-red-600 shadow-md">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
            <img src="{{ asset('storage/image/logo_bbm.png') }}" alt="BPM" class="h-10 w-10 object-contain">
            <span class="text-white font-bold text-xl tracking-wider uppercase">Admin</span>
        </a>
    </div>

    <div class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
        <p class="px-4 text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em] mb-4">Main Menu</p>
        
        @php
            $navItems = [
                [
                    'route' => 'dashboard', 
                    'label' => 'Dashboard', 
                    'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'
                ],
                [
                    'route' => 'admin.pages.home', 
                    'label' => 'Kelola Banner', 
                    'icon' => 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z'
                ],
                [
                    'route' => 'admin.advantages.index', 
                    'label' => 'Kelola Keunggulan', 
                    'icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-2.06 3.507 3.507 0 015.438 0 3.42 3.42 0 001.946 2.06 3.507 3.507 0 011.912 5.113 3.42 3.42 0 000 2.86 3.507 3.507 0 01-1.912 5.113 3.42 3.42 0 00-1.946 2.06 3.507 3.507 0 01-5.438 0 3.42 3.42 0 00-1.946-2.06 3.507 3.507 0 01-1.912-5.113 3.42 3.42 0 000-2.86 3.507 3.507 0 011.912-5.113z'
                ],
                [
                    'route' => 'admin.galleries.index', 
                    'label' => 'Kelola Galeri', 
                    'icon' => 'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z'
                ], 
                [
                    'route' => 'admin.specifications.index', 
                    'label' => 'Kelola Spesifikasi', 
                    'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01'
                ],
                [
                    'route' => 'admin.about.index', 
                    'label' => 'Kelola Tentang Kami', 
                    'icon' => 'M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
                ],
            ];
        @endphp

        @foreach($navItems as $item)
            @php $isActive = request()->routeIs($item['route']); @endphp
            <x-nav-link :href="route($item['route'])" :active="$isActive" 
                class="flex items-center px-4 py-3 transition-all duration-200 group rounded-lg {{ $isActive ? 'bg-red-50 text-red-600' : 'text-slate-600 hover:bg-gray-50 hover:text-red-600' }}">
                
                <div class="flex items-center justify-center w-8">
                    <svg class="w-5 h-5 transition-colors {{ $isActive ? 'text-red-600' : 'text-slate-400 group-hover:text-red-600' }}" 
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $item['icon'] }}"/>
                    </svg>
                </div>
                
                <span class="mx-3 text-sm font-semibold tracking-wide">{{ __($item['label']) }}</span>
                
                @if($isActive)
                    <div class="ml-auto w-1.5 h-1.5 rounded-full bg-red-600"></div>
                @endif
            </x-nav-link>
        @endforeach
    </div>

    <div class="p-4 border-t border-gray-100">
        <div class="flex items-center p-2 mb-4">
            <div class="h-10 w-10 rounded-full bg-red-100 flex items-center justify-center text-red-600 font-bold shrink-0 border border-red-200 shadow-sm">
                {{ substr(Auth::user()->name, 0, 1) }}
            </div>
            
            <div class="ms-3 overflow-hidden">
                <p class="text-sm font-bold text-slate-800 truncate">{{ Auth::user()->name }}</p>
                <a href="{{ route('profile.edit') }}" class="text-xs text-slate-400 hover:text-red-600 transition underline underline-offset-4">
                    Edit Profile
                </a>
            </div>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="flex items-center justify-center w-full gap-2 px-4 py-2.5 text-xs font-bold text-white bg-red-600 hover:bg-red-700 rounded-lg transition-all duration-200 shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                {{ __('LOG OUT') }}
            </button>
        </form>
    </div>
</nav>