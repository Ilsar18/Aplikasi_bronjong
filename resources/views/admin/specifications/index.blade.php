<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Kelola Spesifikasi</h2>
    </x-slot>

    <div class="py-12 max-w-5xl mx-auto">

        <div class="bg-white p-6 rounded shadow">

            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <!-- FORM UPLOAD -->
            <form action="{{ route('admin.specifications.store') }}" method="POST" enctype="multipart/form-data" class="mb-6">
                @csrf

                <input type="file" name="image" class="mb-2">
                <button class="bg-red-600 text-white px-4 py-2 rounded">
                    Upload
                </button>
            </form>

            <!-- LIST GAMBAR -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach($specifications as $item)
                <div class="relative">

                    <img src="{{ asset('storage/'.$item->image) }}" class="w-full rounded shadow">

                    <form action="{{ route('admin.specifications.destroy',$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="absolute top-2 right-2 bg-red-600 text-white px-2 py-1 text-xs rounded">
                            Hapus
                        </button>
                    </form>

                </div>
                @endforeach
            </div>

        </div>
    </div>
</x-app-layout>