<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Kelola Keunggulan</h2>
    </x-slot>

    <div class="py-12 max-w-5xl mx-auto">

        <div class="bg-white p-6 rounded shadow">

            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.advantages.update') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @foreach ($advantages as $index => $item)
                <div class="mb-6 border-b pb-4">

                    <h3 class="font-bold mb-2">Keunggulan {{ $index + 1 }}</h3>

                    <!-- ID -->
                    <input type="hidden" name="advantages[{{ $index }}][id]" value="{{ $item->id ?? '' }}">

                    <!-- Judul -->
                    <input type="text"
                        name="advantages[{{ $index }}][title]"
                        value="{{ $item->title }}"
                        placeholder="Judul"
                        class="w-full mb-2 border rounded p-2">

                    <!-- Deskripsi -->
                    <textarea
                        name="advantages[{{ $index }}][content]"
                        class="w-full mb-2 border rounded p-2"
                        rows="3"
                        placeholder="Deskripsi">{{ $item->content }}</textarea>

                    <!-- Upload Icon -->
                    <input type="file"
                        name="advantages[{{ $index }}][icon]"
                        class="mb-2">

                    <!-- Preview -->
                    @if($item->icon)
                        <img src="{{ asset('storage/'.$item->icon) }}"
                             class="w-16 mt-2">
                    @endif

                </div>
                @endforeach

                <button class="bg-red-600 text-white px-6 py-2 rounded">
                    Simpan
                </button>

            </form>

        </div>
    </div>
</x-app-layout>