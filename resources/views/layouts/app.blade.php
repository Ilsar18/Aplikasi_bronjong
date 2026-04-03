<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Admin Bronjong</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" type="image/png" href="{{ asset('storage/image/logo_bbm.png') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100" x-data="{ open: false }">
        <div class="flex h-screen overflow-hidden">
            
            <div x-show="open" 
                x-transition:enter="transition-opacity ease-linear duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-linear duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                @click="open = false"
                class="fixed inset-0 z-40 bg-gray-600 bg-opacity-75 md:hidden"></div>

            <aside :class="open ? 'translate-x-0' : '-translate-x-full'" 
                class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-gray-200 transform transition duration-300 ease-in-out md:relative md:translate-x-0 md:flex flex-col flex-shrink-0"> 
                
                <div class="md:hidden absolute top-5 right-4">
                    <button @click="open = false" class="text-gray-500 hover:text-gray-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex-1 h-full overflow-hidden">
                    @include('layouts.navigation')
                </div>
            </aside>

            <div class="flex-1 flex flex-col overflow-hidden">
                
                <header class="bg-white shadow-sm border-b border-gray-200 h-16 flex items-center px-4 md:px-6">
                    <button @click="open = true" class="mr-4 text-gray-500 focus:outline-none md:hidden">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                    <div class="flex-1">
                        @isset($header)
                            <h2 class="font-semibold text-lg md:text-xl text-gray-800 leading-tight">
                                {{ $header }}
                            </h2>
                        @endisset
                    </div>
                </header>

                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-4 md:p-6">
                    <div class="max-w-7xl mx-auto">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>