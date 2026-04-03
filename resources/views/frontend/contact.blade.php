@extends('layouts.frontend')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-12 md:py-20">
    <div class="mb-16 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-black mb-4 tracking-tight">
            Hubungi <span class="text-red-600">Kami </span>
        </h1>
        <p class="text-gray-500 max-w-xl mx-auto text-base md:text-lg font-light">
            Solusi kawat bronjong berkualitas untuk proyek Anda. Kami siap melayani konsultasi dan pemesanan.
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 items-start">
        
        <div class="lg:col-span-2 space-y-4">
            <div class="bg-white p-8 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-50">
                <h3 class="text-xl font-bold text-gray-900 mb-8">Informasi Kontak</h3>
                
                <div class="space-y-8">
                    <div class="flex items-center gap-5">
                        <div class="w-12 h-12 bg-gray-50 text-[#e3242b] flex items-center justify-center rounded-2xl shrink-0">
                            <i class="fa-solid fa-location-dot text-lg"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-1">Lokasi</p>
                            <p class="text-sm text-gray-700 leading-snug">Cugenang, Kabupaten Cianjur, Jawa Barat</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-5">
                        <div class="w-12 h-12 bg-gray-50 text-[#e3242b] flex items-center justify-center rounded-2xl shrink-0">
                            <i class="fa-solid fa-phone text-lg"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-1">Telepon</p>
                            <p class="text-sm text-gray-700">+62 877 4936 4717</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-5">
                        <div class="w-12 h-12 bg-gray-50 text-[#e3242b] flex items-center justify-center rounded-2xl shrink-0">
                            <i class="fa-solid fa-envelope text-lg"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-1">Email</p>
                            <p class="text-sm text-gray-700">feriengkink@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 pt-8 border-t border-gray-100">
                    <a href="https://wa.me/6287749364717" target="_blank" class="flex items-center justify-center gap-3 bg-[#25D366] text-white font-bold py-4 rounded-2xl hover:scale-[1.02] transition-all duration-300 shadow-lg shadow-green-100">
                        <i class="fa-brands fa-whatsapp text-xl"></i>
                        <span class="text-sm">Konsultasi via WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="lg:col-span-3">
            <div class="bg-white p-8 md:p-10 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-50">
                <form id="waForm" class="space-y-6">
                    <h1 class="text-xl font-bold text-gray-900">Konsultasi dan Penawaran</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-wider text-gray-400 ml-1">Nama</label>
                            <input type="text" id="name" name="name" required class="w-full bg-gray-50 border-none rounded-2xl px-5 py-4 text-sm focus:ring-2 focus:ring-red-500/20 transition-all outline-none" placeholder="Nama lengkap">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-wider text-gray-400 ml-1">Email</label>
                            <input type="email" id="email" name="email" required class="w-full bg-gray-50 border-none rounded-2xl px-5 py-4 text-sm focus:ring-2 focus:ring-red-500/20 transition-all outline-none" placeholder="Alamat email">
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-bold uppercase tracking-wider text-gray-400 ml-1">Pesan</label>
                        <textarea id="message" name="message" rows="4" required class="w-full bg-gray-50 border-none rounded-2xl px-5 py-4 text-sm focus:ring-2 focus:ring-red-500/20 transition-all outline-none resize-none" placeholder="Apa yang bisa kami bantu?"></textarea>
                    </div>
                    
                    <button type="submit" class="w-full md:w-auto bg-red-600 text-white font-bold py-4 px-10 rounded-2xl hover:bg-black transition-all duration-300 shadow-xl shadow-red-100 text-sm">
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="mt-16 group">
        <div class="relative rounded-xl overflow-hidden shadow-2xl shadow-gray-200 h-[400px]">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.35345711648!2d107.0651709!3d-6.7876006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e694d444e930a51%3A0x11397ecbff188402!2sBronjong%20Berkah%20Mandiri%20%7C%20Menjual%20Bronjong%20Berkualit%20-%20Cianjur!5e0!3m2!1sid!2sid!4v1711732000000!5m2!1sid!2sid" 
                class="w-full h-full grayscale group-hover:grayscale-0 transition-all duration-1000 ease-in-out"
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <div class="absolute bottom-6 left-1/2 -translate-x-1/2 bg-white/90 backdrop-blur-md px-6 py-3 rounded-xl shadow-xl border border-white/50">
                <p class="text-[11px] font-bold text-gray-800 flex items-center gap-2">
                    <span class="w-2 h-2 bg-red-600 rounded-full animate-pulse"></span>
                    Workshop: Cibeureum, Cugenang, Cianjur
                </p>
            </div>
        </div>
    </div>

</div>

<script>
    document.getElementById('waForm').addEventListener('submit', function(event) {
        // Mencegah form reload halaman
        event.preventDefault();

        // Mengambil nilai dari input
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        // Nomor WhatsApp tujuan (Pastikan menggunakan format 62 tanpa +)
        const phoneNumber = "6287749364717";

        // Format pesan yang akan masuk ke WhatsApp
        const waText = `Halo, saya ingin berkonsultasi mengenai kawat bronjong.%0A%0A*Nama:* ${name}%0A*Email:* ${email}%0A*Pesan:* ${message}`;

        // Membuat URL WhatsApp API
        const waUrl = `https://wa.me/${phoneNumber}?text=${waText}`;

        // Membuka tab baru yang langsung mengarah ke WhatsApp
        window.open(waUrl, '_blank');
    });
</script>
@endsection

