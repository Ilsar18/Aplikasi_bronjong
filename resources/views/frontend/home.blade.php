@extends('layouts.frontend')

@section('content')
<div class="font-mollen text-gray-900 bg-white">

{{-- Bagian Banner --}}
    <section class="relative pt-6 md:pt-10 pb-6 md:pb-10 px-4 md:px-10">
        <div class="max-w-7xl mx-auto border border-gray-100 rounded-[30px] md:rounded-[40px] p-6 md:p-20 text-center relative shadow-xl shadow-gray-200 overflow-hidden min-h-[450px] md:min-h-[400px] flex flex-col items-center justify-center">
            
            @if($page && $page->image)
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('storage/'.$page->image) }}" alt="Banner {{ $page->title }}" class="w-full h-full object-cover">
                <div class="absolute inset-0"></div>
            </div>
            @endif
            
            <div class="relative z-10 w-full">
                <h1 class="text-4xl md:text-8xl font-bold mb-4 md:mb-6 tracking-tight leading-tight animate-fade-in-up text-white drop-shadow-xl">
                    {{ $page->title}}
                </h1>
                
                <p class="text-sm md:text-xl text-white mb-8 md:mb-10 max-w-3xl mx-auto leading-relaxed animate-fade-in-up delay-200 drop-shadow-md px-2">
                    {{ $page->content}}
                </p>

                <div class="animate-fade-in-up delay-300">
                    <a href="https://wa.me/6287749364717" target="_blank"
                        class="group relative inline-flex items-center justify-center w-full sm:w-auto px-8 py-4 font-bold text-white transition-all duration-300 bg-red-600 rounded-xl hover:bg-red-700 shadow-lg hover:shadow-red-500/40 transform hover:-translate-y-1">
                        
                        <i class="fab fa-whatsapp mr-2 text-xl group-hover:rotate-12 transition-transform"></i>
                        WhatsApp Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>
{{-- Bagian Banner --}}

{{-- Bagian Keunggulan --}}
<section class="relative pt-6 md:pt-10 pb-6 md:pb-10 px-4 md:px-10">
<div class="max-w-7xl mx-auto pb-2">
    <div class="text-center mb-20">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-black">Mengapa Harus Memilih Kami?</h2>
        <div class="w-20 h-1.5 bg-red-600 mx-auto rounded-full"></div>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">

        @foreach($advantages as $item)
        <div class="relative h-80 bg-white border border-gray-200 rounded-[2rem] p-8 pt-12 group hover:border-red-500 transition-all duration-300 shadow-sm hover:shadow-xl">
            
            <div class="absolute -top-10 left-14 -translate-x-1/2 w-20 h-20 bg-red-600 rounded-full border-4 border-white flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                
                <img src="{{ asset('storage/'.$item->icon) }}" 
                     alt="{{ $item->title }}" 
                     class="w-10 h-10 object-contain brightness-0 invert"> 
            </div>
            
            <h3 class="text-xl font-bold text-gray-900 mb-4">
                {{ $item->title }}
            </h3>

            <p class="text-gray-600 leading-relaxed text-sm">
                {{ $item->content }}
            </p>

        </div>
        @endforeach

    </div>
</div>
</section>
{{-- Bagian Keunggulan --}}

{{-- Bagian Galeri --}}
<section class="py-6 bg-white overflow-hidden" x-data="{ open: false, activeImage: '' }">
    <div class="max-w-7xl mx-auto pb-2 px-4">
        <div class="text-center mb-10">
                <a href="{{ route('galeri') }}">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-black hover:text-red-600 transition">
                        Galeri Kami
                    </h2>
                </a>
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

{{-- Bagian Spesifikasi --}}
    <section class="mt-0 py-3 px-6 md:px-10 bg-white overflow-hidden">
        <div class="max-w-9xl mx-auto">
            <div class="text-center mb-10">
                <a href="{{ route('produk') }}">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-black hover:text-red-600 transition">
                        Spesifikasi Produk Kami
                    </h2>
                </a>
                <div class="w-20 h-1.5 bg-red-600 mx-auto rounded-full"></div>
            </div>

            <div class="flex justify-center items-center">
                <div class="relative w-full md:w-10/12 group">
  
                @php
                    $spec = $specifications->first();
                @endphp

                @if($spec)
                <img src="{{ asset('storage/'.$spec->image) }}" 
                    alt="Spesifikasi Produk" 
                    class="w-full h-auto rounded-2xl shadow-2xl shadow-gray-300 border border-gray-100 transition-transform duration-500 group-hover:scale-[1.01]">
                @endif

                    <div class="absolute inset-0 rounded-2xl shadow-inner pointer-events-none"></div>
                </div>
            </div>
        </div>
    </section>
{{-- Bagian Spesifikasi --}}

{{-- Bagian tentang kami --}}
    <section class="py-12 bg-white font-sans overflow-hidden">
        <div class="container mx-auto px-4 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start mb-8">
                <div class="space-y-6 order-2 lg:order-1" 
                    data-aos="fade-right">
                <a href="{{ route('profil') }}">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-black hover:text-red-600 transition">
                        Tentang <span class="text-red-600">Kami</span>
                    </h2>
                </a>
                    <p class="text-gray-700 leading-relaxed text-justify lg:text-left">
                        {{ $about->content ?? '' }}
                    </p>
                </div>

                <div class="space-y-4 order-1 lg:order-2" 
                    data-aos="fade-left">
                    <div class="group overflow-hidden rounded-xl shadow-lg transition-transform duration-300 hover:scale-[1.02]">
                        <img src="{{ $about && $about->image1 ? asset('storage/'.$about->image1) : asset('images/bronjong-stok.jpg') }}" 
                            alt="Stok Kawat Bronjong" 
                            class="w-full h-64 lg:h-80 object-cover">
                    </div>
                    
                    <a href="https://maps.app.goo.gl/CRbcr9KsZRhsbWkV8" 
                    target="_blank"
                    class="inline-flex items-center gap-3 bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl font-semibold transition-all shadow-md active:scale-95">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Lihat Lokasi Kami di Google Maps
                    </a>

                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="group relative overflow-hidden rounded-xl shadow-lg" 
                    data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ $about && $about->image2 ? asset('storage/'.$about->image2) : asset('images/pemasangan.jpg') }}" 
                        alt="Proses Pemasangan Bronjong" 
                        class="w-full h-64 md:h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div>
                </div>

                <div class="group relative overflow-hidden rounded-xl shadow-lg" 
                    data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ $about && $about->image3 ? asset('storage/'.$about->image3) : asset('images/pengiriman.jpg') }}" 
                        alt="Pengiriman Bronjong" 
                        class="w-full h-64 md:h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div>
                </div>
            </div>
        </div>
    </section>
{{-- Bagian tentang kami --}}
</div>

   

{{-- Style dan jss --}}

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-in-out'
        });
    });
</script>

<style>
    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
    }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .delay-200 { animation-delay: 0.2s; }
    .delay-300 { animation-delay: 0.4s; }
</style>
@endsection

<style>
    /* Container Pagination */
    .swiper-pagination {
        position: relative !important;
        bottom: 0 !important;
        margin-top: 0px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
    }

    /* Styling Kotak Angka (Default/Tidak Aktif) */
    .swiper-pagination-bullet {
        width: 45px !important;
        height: 45px !important;
        border-radius: 12px !important; /* Membuat sudut membulat/rounded */
        background: #babcbe !important; /* Warna abu-abu muda sesuai gambar */
        opacity: 1 !important;
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
        color: white !important;
        font-weight: bold;
        font-size: 1.2rem;
        transition: all 0.3s ease;
    }

    /* Styling Kotak Angka (Aktif) */
    .swiper-pagination-bullet-active {
        background: #ecabab !important; /* Warna abu-abu tua sesuai gambar */
    }

    /* Menghilangkan background putih pada tombol navigasi bawaan agar hanya sisa panah */
    .swiper-button-next, .swiper-button-prev {
        position: static !important; /* Mengubah posisi agar sejajar dengan angka */
        display: inline-flex !important;
        margin: 0 200px !important;
        padding: 
        color: #000000 !important; /* Warna panah */
    }

    .swiper-button-next::after, .swiper-button-prev::after {
        font-size: 24px !important; /* Ukuran panah */
        font-weight: bold;
    }

    /* Membungkus Navigasi & Pagination dalam satu baris */
    .swiper-controls-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 20px;

    }
</style>

<style>
    /* Tambahan agar kontrol navigasi mengecil di mobile */
    @media (max-width: 640px) {
        .swiper-pagination-bullet {
            width: 35px !important;
            height: 35px !important;
            font-size: 0.9rem !important;
            border-radius: 8px !important;
        }
        .swiper-button-next, .swiper-button-prev {
            margin: 0 5px !important;
        }
        .swiper-button-next::after, .swiper-button-prev::after {
            font-size: 18px !important;
        }
    }

    /* Memastikan section tidak overflow ke samping */
    section {
        overflow-x: hidden;
    }
</style>

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