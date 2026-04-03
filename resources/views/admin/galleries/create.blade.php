<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Galeri') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form action="{{ route('admin.galleries.store') }}"
                      method="POST"
                      enctype="multipart/form-data">
                    @csrf

                    <!-- Judul -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Judul
                        </label>

                        <input type="text" name="title"
                        class="w-full border-gray-300 rounded-lg shadow-sm">
                    </div>

                    <!-- Upload -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Upload Gambar
                        </label>

                        <input type="file" name="image"
                        class="block w-full text-sm text-gray-500">
                    </div>

                    <button
                    class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-lg shadow">
                        Simpan
                    </button>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>