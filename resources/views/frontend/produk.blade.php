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
            <h1 class="font-mollen text-5xl md:text-8xl font-bold mb-4 md:mb-6 tracking-tight leading-tight animate-fade-in-up text-white drop-shadow-2xl">
                Spesifikasi Produk
            </h1>
        </div>
    </div>
</section>
{{-- Bagian Banner --}}


{{-- Bagian deskripsi --}}
<div class="relative pt-6 md:pt-10 pb-6 md:pb-10 px-6 md:px-10 max-w-7xl mx-auto">
    <h1 class="text-lg md:text-xl text-justify leading-relaxed md:leading-loose text-gray-800">
        Kawat Bronjong adalah kotak yang terbuat dari anyaman kawat Galvanis dan PVC yang pada penggunaannya diisi batu – batu untuk mencegah erosi yang dipasang pada tebing – tebing, tepi – tepi sungai, yang proses pengayamannya menggunakan mesin ataupun manual ( Hand made ).<br>Pekerjaan bronjong meliputi pekerjaan-pekerjaan :<br>penyediaan, pengangkutan dan pemasangan kawat bronjong yang diisi dengan batu kali seperti yang ditunjuk pada gambar rencana.
        <br>
        <br>
        Kawat Bronjong anyaman umum yang sering di gunakan ,dengan ukuran sangkar adalah :
        <br>
        Tinggi : 0,50 meter
        <br>
        Lebar : 1,00 meter
        <br>
        Panjang : 2,00 meter
        <br>
        <br>
        Ukuran-ukuran bronjong disesuaikan dengan kondisi lapangan dan permintaan konsumen dari mulai ukuran,lubang/mesh dan ring .
        <br>
        <br>
        Bentuk dan ukuran kawat bronjong berbeda-beda dari mulai ukuran ,lubang/mesh dan ring tergantung kebutuhan di lapangan dan pemesanan konsumen .
    </h1>
</div>
{{-- Bagian deskripsi --}}

{{-- Bagian spesifikasi --}}
<section class="relative pt-6 md:pt-10 pb-6 md:pb-10 px-4 md:px-10">
    <div class="flex justify-center items-center mb-10 md:mb-20">
        {{-- Di mobile lebar 100% (w-full), di desktop kembali ke 10/12 --}}
        <div class="relative w-full md:w-10/12 group">
            
            @php
                $spec = $specifications->first();
            @endphp

            @if($spec)
                {{-- 
                    1. Tambahkan 'overflow-x-auto' pada pembungkus jika gambar adalah tabel yang sangat lebar.
                    2. 'max-w-none' pada img memastikan gambar tidak menyusut paksa jika berada di dalam container scroll (opsional).
                --}}
                <div class="overflow-hidden rounded-xl md:rounded-2xl shadow-xl md:shadow-2xl shadow-gray-300 border border-gray-100">
                    <img src="{{ asset('storage/'.$spec->image) }}" 
                        alt="Spesifikasi Produk" 
                        class="w-full h-auto object-contain transition-transform duration-500 group-hover:scale-[1.01]">
                </div>
            @endif

            {{-- Efek shadow inner hanya muncul di desktop agar tidak mengganggu fokus di mobile --}}
            <div class="hidden md:block absolute inset-0 rounded-2xl shadow-inner pointer-events-none"></div>
        </div>
    </div>
</section>
{{-- Bagian spesifikasi --}}

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
