<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100">
                <div class="p-8 md:p-10 text-gray-900 flex flex-col md:flex-row justify-between items-start md:items-center gap-4 bg-gradient-to-r from-white to-red-50/30">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-1">
                            Selamat Datang kembali, {{ Auth::user()->name ?? 'Admin' }}!
                        </h3>
                        <p class="text-gray-500 font-light text-sm md:text-base">
                            Berikut adalah ringkasan performa sistem Anda hari ini.
                        </p>
                    </div>
                    <div class="bg-white px-5 py-2.5 rounded-xl border border-gray-100 shadow-sm text-sm font-medium text-gray-600">
                        {{ now()->locale('id')->translatedFormat('l, d F Y') }}
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-5 hover:shadow-md transition-all duration-300 group">
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-1">Total Klien</p>
                        <h4 class="text-2xl font-black text-gray-800">1,245</h4>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-5 hover:shadow-md transition-all duration-300 group">
                    <div class="w-14 h-14 bg-red-50 text-red-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-1">Pesanan Baru</p>
                        <h4 class="text-2xl font-black text-gray-800">84</h4>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-5 hover:shadow-md transition-all duration-300 group">
                    <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-1">Pendapatan</p>
                        <h4 class="text-2xl font-black text-gray-800">Rp. 25 Jt</h4>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-5 hover:shadow-md transition-all duration-300 group">
                    <div class="w-14 h-14 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                    </div>
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-1">Pesan Baru</p>
                        <h4 class="text-2xl font-black text-gray-800">12</h4>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100">
                <div class="p-6 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                    <h3 class="font-bold text-lg text-gray-800">Aktivitas Terbaru</h3>
                    <button class="text-sm text-red-600 font-semibold hover:text-red-800 transition-colors">
                        Lihat Semua &rarr;
                    </button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-400 uppercase bg-white border-b border-gray-100">
                            <tr>
                                <th scope="col" class="px-6 py-4 font-bold">Klien / Pengguna</th>
                                <th scope="col" class="px-6 py-4 font-bold">Aktivitas</th>
                                <th scope="col" class="px-6 py-4 font-bold">Status</th>
                                <th scope="col" class="px-6 py-4 font-bold">Waktu</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <tr class="hover:bg-gray-50 transition-colors group">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-600 font-bold text-xs">
                                            BS
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-900 group-hover:text-red-600 transition-colors">Budi Santoso</p>
                                            <p class="text-xs text-gray-400">budi@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-gray-600">Pemesanan Kawat Bronjong</td>
                                <td class="px-6 py-4">
                                    <span class="bg-yellow-50 text-yellow-600 border border-yellow-200 text-[10px] uppercase font-bold px-3 py-1 rounded-full">
                                        Diproses
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-gray-400">Hari ini, 09:30</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors group">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-600 font-bold text-xs">
                                            PT
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-900 group-hover:text-red-600 transition-colors">PT. Pembangunan Jaya</p>
                                            <p class="text-xs text-gray-400">purchasing@jaya.co.id</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-gray-600">Konsultasi via WhatsApp (Landing Page)</td>
                                <td class="px-6 py-4">
                                    <span class="bg-emerald-50 text-emerald-600 border border-emerald-200 text-[10px] uppercase font-bold px-3 py-1 rounded-full">
                                        Selesai
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-gray-400">Kemarin, 14:15</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>