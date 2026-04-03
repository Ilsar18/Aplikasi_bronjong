<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Galeri') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                @if(session('success'))
                    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Tombol Tambah -->
                <div class="mb-6">
                    <a href="{{ route('admin.galleries.create') }}"
                        class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg shadow">
                        + Tambah Gambar
                    </a>
                </div>

                <!-- Grid Galeri -->
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6">

                    @forelse($galleries as $item)
                    <div class="border rounded-lg p-3 shadow-sm">

                        <img src="{{ asset('storage/'.$item->image) }}"
                             class="w-full h-40 object-cover rounded mb-3">

                        <p class="text-sm text-gray-700 text-center">
                            {{ $item->title ?? '-' }}
                        </p>

                        <!-- Hapus -->
                        <form action="{{ route('admin.galleries.destroy',$item->id) }}"
                              method="POST"
                              class="mt-3 text-center">
                            @csrf
                            @method('DELETE')

                            <button class="text-red-600 hover:underline text-sm">
                                Hapus
                            </button>
                        </form>

                    </div>
                    @empty
                        <p class="text-gray-500">Belum ada data galeri</p>
                    @endforelse

                </div>

            </div>

        </div>
    </div>
</x-app-layout>