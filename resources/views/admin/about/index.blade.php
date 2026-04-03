<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Kelola Tentang Kami</h2>
    </x-slot>

    <div class="py-12 max-w-5xl mx-auto">

        <div class="bg-white p-6 rounded shadow">

            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Konten -->
                <textarea name="content" rows="5"
                    class="w-full border rounded p-2 mb-4"
                    placeholder="Isi tentang kami">{{ $about->content }}</textarea>

                <!-- Gambar 1 -->
                <input type="file" name="image1" class="mb-2">
                @if($about->image1)
                    <img src="{{ asset('storage/'.$about->image1) }}" class="w-32 mb-4">
                @endif

                <!-- Gambar 2 -->
                <input type="file" name="image2" class="mb-2">
                @if($about->image2)
                    <img src="{{ asset('storage/'.$about->image2) }}" class="w-32 mb-4">
                @endif

                <!-- Gambar 3 -->
                <input type="file" name="image3" class="mb-2">
                @if($about->image3)
                    <img src="{{ asset('storage/'.$about->image3) }}" class="w-32 mb-4">
                @endif

                <button class="bg-red-600 text-white px-6 py-2 rounded">
                    Simpan
                </button>

            </form>

        </div>
    </div>
</x-app-layout>