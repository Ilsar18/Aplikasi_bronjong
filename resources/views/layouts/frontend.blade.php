<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bronjong Berkah Mandiri</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('storage/image/logo_bbm.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">

    <nav class="bg-[#e3242b] text-white py-4 px-6 sticky top-0 z-50 shadow-md">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="bg-white p-1 rounded-full shrink-0">
                    <img src="{{ asset('storage/image/logo_bbm.png') }}" alt="BPM" class="h-10 w-10 object-contain">
                </div>
                <div class="leading-tight">
                    <span class="block font-bold text-base md:text-xs sm:text-3xs">Bronjong</span>
                    <span class="block font-bold text-base md:text-xs sm:text-3xs">Berkah</span>
                    <span class="block font-bold text-base md:text-xs sm:text-3xs">Mandiri</span>
                </div>
            </div>

            <button id="menu-btn" class="md:hidden text-2xl focus:outline-none">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div id="menu" class="hidden absolute top-full left-0 w-full bg-[#e3242b] flex-col items-center gap-4 py-6 shadow-xl md:static md:flex md:flex-row md:w-auto md:bg-transparent md:py-0 md:shadow-none md:gap-6 text-xs font-bold uppercase tracking-wider">
                <a href="{{ route('home') }}" class="px-3 py-2 rounded {{ active('home') }}">Home</a>
                <a href="{{ route('profil') }}" class="px-3 py-2 rounded {{ active('profil') }}">Profil Kami</a>
                <a href="{{ route('produk') }}" class="px-3 py-2 rounded {{ active('produk') }}">Produk Kami</a>
                <a href="{{ route('galeri') }}" class="px-3 py-2 rounded {{ active('galeri') }}">Galeri Foto</a>
                <a href="{{ route('contact') }}" class="px-3 py-2 rounded {{ active('contact') }}">Hubungi Kami</a>
            </div>
        </div>
    </nav>

    <main class="min-h-screen">
        @yield('content')
    </main>

    <footer class="bg-red-600 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <h2 class="text-center text-xl sm:text-2xl md:text-3xl font-extrabold mb-10 tracking-wide">
            BRONJONG BERKAH MANDIRI
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-10 md:gap-x-16 items-start">
            
            <div class="flex flex-col items-center md:items-start text-center md:text-left">
                <h3 class="font-bold text-lg mb-5 uppercase tracking-wider">Our Sosmed</h3>
                
                <div class="flex flex-wrap justify-center md:justify-start gap-4 mb-8">
                    <a href="https://instagram.com/bronjong_berkah_mandiri" target="_blank" class="bg-white p-2.5 rounded-full text-red-600 hover:bg-yellow-400 hover:scale-110 transition-all duration-300 shadow-md">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c.796 0 1.441.645 1.441 1.44s-.645 1.44-1.441 1.44c-.795 0-1.439-.645-1.439-1.44s.644-1.44 1.439-1.44z"/></svg>
                    </a>
                    <a href="mailto:feriengkink@gmail.com" class="bg-white p-2.5 rounded-full text-red-600 hover:bg-yellow-400 hover:scale-110 transition-all duration-300 shadow-md">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12.713l-11.985-9.713h23.97l-11.985 9.713zm0 2.574l12-9.712v15.425h-24v-15.425l12 9.712z"/></svg>
                    </a>
                    <a href="https://facebook.com/feriengking.fery" target="_blank" class="bg-white p-2.5 rounded-full text-red-600 hover:bg-yellow-400 hover:scale-110 transition-all duration-300 shadow-md">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-8.74h-2.94v-3.403h2.94v-2.511c0-2.91 1.777-4.493 4.373-4.493 1.242 0 2.31.093 2.62.134v3.037l-1.797.001c-1.412 0-1.687.672-1.687 1.654v2.168h3.363l-.438 3.403h-2.925v8.74h6.007c.732 0 1.325-.593 1.325-1.325v-21.351c0-.732-.593-1.325-1.325-1.325z"/></svg>
                    </a>
                    <a href="https://www.tiktok.com/@periengkink912" target="_blank" class="bg-white p-2.5 rounded-full text-red-600 hover:bg-yellow-400 hover:scale-110 transition-all duration-300 shadow-md">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.17-2.86-.6-4.12-1.31a6.417 6.417 0 0 1-1.87-1.45v7.5c.02 1.48-.3 3.01-1.12 4.25-1.16 1.86-3.32 3.13-5.54 3.05-2.2-.07-4.29-1.48-5.23-3.47-.94-2.01-.61-4.63.85-6.3 1.17-1.34 3.01-2.12 4.79-2.09.28.01.57.03.85.08v4.1c-.2-.04-.41-.07-.63-.07-1.04-.04-2.11.46-2.68 1.34-.57.88-.54 2.12.06 2.97.6.85 1.68 1.34 2.73 1.23 1.05-.11 1.99-.95 2.19-1.99.04-.2.06-.41.06-.61V.02z"/></svg>
                    </a>
                </div>
                
                <p class="text-yellow-400 font-bold text-base sm:text-lg  tracking-tight">
                    {{ date('Y') }} &copy; Bronjong Berkah Mandiri
                </p>
            </div>

            <div class="w-full sm:max-w-xs mx-auto md:mr-0">
                <h3 class="font-bold text-lg mb-5 text-center md:text-left uppercase tracking-wider text-red-100">Statistik Kunjungan</h3>
                
                <div class="bg-red-700/30 rounded-xl p-5 border border-red-500/50 backdrop-blur-sm">
                    <ul class="space-y-3 text-sm sm:text-base font-medium">
                        <li class="flex justify-between items-center gap-4">
                            <span class="opacity-90">Online Users</span>
                            <span class="bg-white text-red-600 px-2 py-0.5 rounded text-xs font-bold">{{ $online_users ?? 0 }}</span>
                        </li>
                        <li class="flex justify-between items-center border-t border-red-500/30 pt-2">
                            <span class="opacity-90">Today's Visits</span>
                            <span class="font-bold text-yellow-300">{{ number_format($today_visits ?? 0) }}</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <span class="opacity-90">Yesterday's Visits</span>
                            <span class="font-bold">{{ number_format($yesterday_visits ?? 0) }}</span>
                        </li>
                        <li class="flex justify-between items-center border-t border-yellow-400/50 pt-2">
                            <span class="text-yellow-400 font-bold">Last 30 Days</span>
                            <span class="font-bold text-yellow-400">{{ number_format($month_visits ?? 0) }}</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="mt-12 pt-6 border-t border-red-500 text-center">
            <p class="text-[10px] uppercase opacity-60 tracking-[0.2em]">
                Cianjur, Jawa Barat, Indonesia
            </p>
        </div>

    </div>
    </footer>

    <script>
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
        });
    </script>

    @php
    function active($route) {
    return request()->routeIs($route) ? 'bg-red-800 text-white' : 'hover:text-gray-200';
    }
    @endphp

</body>
</html>