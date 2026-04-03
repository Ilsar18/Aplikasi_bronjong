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
                Tentang Kami
            </h1>
        </div>
    </div>
</section>
{{-- Bagian Banner --}}


{{-- Bagian deskripsi --}}
<div class="relative pt-6 md:pt-10 pb-6 md:pb-10 px-6 md:px-10 max-w-7xl mx-auto">
    <h1 class="text-lg md:text-xl text-justify leading-relaxed md:leading-loose text-gray-800">
        Bronjong Berkah Mandiri Cianjur adalah mitra strategis terpercaya dalam industri manufaktur dan penyedia solusi infrastruktur pengamanan tanah serta tebing di wilayah Cianjur, Jawa Barat Indonesia. Berbekal pengalaman bertahun-tahun, kami mendedikasikan diri untuk memproduksi dan mendistribusikan berbagai jenis kawat bronjong berkualitas tinggi, mulai dari Kawat Bronjong Galvanis hingga Lapis PVC, yang tersedia dalam varian anyaman manual (hand-made) maupun hasil mesin pabrikasi standar nasional.
        <br><br>Kami memahami bahwa kekuatan sebuah konstruksi terletak pada material penyusunnya. Oleh karena itu, setiap produk Bronjong Berkah Mandiri diproses menggunakan bahan baku baja pilihan yang memiliki daya tahan ekstrem terhadap korosi, tekanan air, serta perubahan cuaca yang fluktuatif. Dengan dukungan tenaga ahli yang kompeten dan teknologi produksi yang mumpuni, kami menjamin setiap anyaman kawat memiliki tingkat presisi, kekuatan tarik, dan elastisitas yang sesuai dengan standar keamanan konstruksi modern.
    </h1>
</div>
{{-- Bagian deskripsi --}}
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
