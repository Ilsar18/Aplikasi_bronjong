@extends('layouts.frontend')

@section('content')
<div class="font-mollen text-black bg-white">

{{-- Bagian Banner --}}
<section class="relative pt-6 md:pt-10 pb-6 md:pb-10 px-4 md:px-10">
    <div class="max-w-7xl mx-auto border border-gray-100 rounded-[30px] md:rounded-[40px] p-6 md:p-20 text-left relative shadow-xl shadow-gray-200 overflow-hidden min-h-[300px] md:min-h-[450px] flex flex-col items-center justify-center">
        
        @if($page && $page->image)
        <div class="absolute inset-0 z-0">
            {{-- Tambahkan object-cover agar gambar memenuhi area tanpa distorsi, dan object-center agar fokus di tengah --}}
            <img src="{{ asset('storage/'.$page->image) }}" 
                 alt="Banner {{ $page->title }}" 
                 class="w-full h-full object-cover object-center">
            
            {{-- Overlay gelap agar teks putih tetap terbaca jelas di atas gambar apapun (opsional tapi disarankan) --}}
            <div class="absolute inset-0"></div>
        </div>
        @endif
        
        <div class="relative z-10 w-full text-center md:text-left">
            {{-- Ukuran teks disesuaikan: 4xl di mobile, 8xl di desktop --}}
            <h1 class="text-5xl md:text-8xl font-bold mb-4 md:mb-6 tracking-tight leading-tight animate-fade-in-up text-white drop-shadow-2xl">
                Galeri
            </h1>
        </div>
    </div>
</section>
{{-- Bagian Banner --}}


{{-- Bagian deskripsi --}}
<div class="relative pt-6 md:pt-10 pb-6 md:pb-10 px-6 md:px-10 max-w-7xl mx-auto">
    <h1 class="text-lg md:text-xl text-justify leading-relaxed md:leading-loose text-gray-800">
        Jelajahi portofolio produk unggulan kami yang dirancang dengan presisi tinggi untuk menghadapi tantangan alam. Di bawah ini, kami menampilkan galeri produk siap kirim serta dokumentasi aktivitas produksi harian kami—bukti nyata komitmen Bronjong Berkah Mandiri dalam menjaga standar kekuatan material demi keamanan infrastruktur Anda di masa depan.
    </h1>
</div>
{{-- Bagian deskripsi --}}

{{-- Bagian Galeri --}}
<section class="py-6 bg-white overflow-hidden" x-data="{ open: false, activeImage: '' }">
    <div class="max-w-7xl mx-auto pb-2 px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-black">Galeri Kami</h2>
            <div class="w-20 h-1.5 bg-red-600 mx-auto rounded-full"></div>
        </div>

        {{-- Container Swiper --}}
        <div class="swiper galeriSwiper bg-white">
            <div class="swiper-wrapper">
                
                {{-- UBAH DI SINI: Gunakan 12 (untuk mobile 2x6) atau 16 (untuk desktop 4x4) --}}
                @foreach ($galleries->chunk(12) as $chunk)
                <div class="swiper-slide h-auto"> 
                    
                    {{-- UBAH DI SINI: grid-cols-2 (Mobile) dan lg:grid-cols-4 (Desktop) --}}
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 items-start"> 
                        @foreach ($chunk as $item)
                        {{-- Trigger Overlay Alpine.js --}}
                        <div @click="open = true; activeImage = '{{ asset('storage/'.$item->image) }}'" 
                            class="group relative overflow-hidden rounded-xl bg-gray-100 cursor-pointer shadow-sm hover:shadow-md transition-shadow">                           
                            <img src="{{ asset('storage/'.$item->image) }}" 
                                class="w-full h-auto object-contain rounded-xl relative z-0">
                        </div>
                        @endforeach
                    </div> 
                </div>
                @endforeach
                
            </div>

            {{-- NAVIGASI --}}
            <div class="flex items-center justify-center gap-6 mt-6 py-2 bg-white">
                <button class="prev-galeri bg-white text-gray-800 p-2 rounded-full shadow-md border border-gray-100 active:scale-95 transition-transform hover:bg-red-600 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                
                <div class="swiper-pagination-custom !static !w-auto font-bold text-gray-800 text-sm tracking-widest"></div>
                
                <button class="next-galeri bg-white text-gray-800 p-2 rounded-full shadow-md border border-gray-100 active:scale-95 transition-transform hover:bg-red-600 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- ================= OVERLAY MODAL ALIpNE.JS ================= --}}
    <div x-show="open" 
         x-cloak
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 backdrop-blur-none"
         x-transition:enter-end="opacity-100 backdrop-blur-sm"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 backdrop-blur-sm"
         x-transition:leave-end="opacity-0 backdrop-blur-none"
         @keydown.escape.window="open = false"
         class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/80 p-4" 
         style="display: none;">
        
        {{-- Tombol Close (X) --}}
        <button @click="open = false" class="absolute top-4 right-4 md:top-8 md:right-8 text-white hover:text-red-500 transition-colors z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 md:h-12 md:w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        {{-- Gambar yang di-klik --}}
        <img :src="activeImage" 
             @click.outside="open = false"
             class="max-w-full max-h-[85vh] object-contain rounded-lg shadow-2xl relative z-40">
             
    </div>
    {{-- ================= END OVERLAY MODAL ================= --}}

</section>
{{-- Bagian Galeri --}}

<div class="flex justify-center mb-10">
    <a href="https://maps.app.goo.gl/CRbcr9KsZRhsbWkV8" 
        target="_blank"
        class="inline-flex items-center gap-3 bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl font-semibold transition-all shadow-md active:scale-95 mb-10">
        
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>

        Lihat Lokasi Kami di Google Maps
    </a> 
</div>
                    
</div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const swiperGaleri = new Swiper('.galeriSwiper', {
            // Pengaturan Dasar
            slidesPerView: 1,
            spaceBetween: 20,
            loop: false,
            grabCursor: true, // Mengubah kursor menjadi tangan saat hover
            speed: 600,       // Kecepatan transisi (ms)

            // Navigasi Tombol
            navigation: {
                nextEl: '.next-galeri',
                prevEl: '.prev-galeri',
            },

            // Paginasi Custom (Tipe Angka/Fraction)
            pagination: {
                el: '.swiper-pagination-custom',
                type: 'fraction',
                renderFraction: function (currentClass, totalClass) {
                    return '<span class="' + currentClass + '"></span>' +
                           ' <span class="mx-2">/</span> ' +
                           '<span class="' + totalClass + '"></span>';
                }
            },

            // Mendukung swipe di layar sentuh
            touchEventsTarget: 'container',
            simulateTouch: true,
            
            // Pengaturan tambahan untuk performa
            observer: true,
            observeParents: true,
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.galeriSwiper', {
            // Ini kuncinya agar tidak ada ruang kosong di bawah:
            autoHeight: true, 

            navigation: {
                nextEl: '.next-galeri',
                prevEl: '.prev-galeri',
            },
            pagination: {
                el: '.swiper-pagination-custom',
                type: 'fraction',
                renderFraction: function (currentClass, totalClass) {
                    return '<span class="' + currentClass + '"></span>' +
                           ' / ' +
                           '<span class="' + totalClass + '"></span>';
                }
            },
        });
    });
</script>