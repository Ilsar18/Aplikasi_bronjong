<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Banner') }}
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

                <form action="{{ route('admin.pages.update',$page->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Judul -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Judul
                        </label>

                        <input type="text" name="title"
                        value="{{ $page->title }}"
                        class="w-full border-gray-300 rounded-lg shadow-sm">
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Deskripsi
                        </label>

                        <textarea name="content"
                        rows="5"
                        class="w-full border-gray-300 rounded-lg shadow-sm">{{ $page->content }}</textarea>
                    </div>

                    <!-- Upload Gambar -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Gambar Banner
                        </label>

                        <input type="file" name="image"
                        class="block w-full text-sm text-gray-500">
                    </div>

                    <!-- Preview Gambar -->
                    @if($page->image)
                    <div class="mb-4">
                        <p class="text-sm mb-2 text-gray-600">Preview:</p>

                        <img src="{{ asset('storage/'.$page->image) }}"
                        class="w-96 rounded shadow">
                    </div>
                    @endif

                    <button
                    class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-lg shadow">
                        Simpan
                    </button>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>