<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('barang.update', $barang->ID_barang) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Menambahkan metode PUT untuk update -->
                        
                        <div class="mb-4">
                            <label for="Nama_barang" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Nama Barang') }}</label>
                            <input type="text" name="Nama_barang" id="Nama_barang" value="{{ old('Nama_barang', $barang->Nama_barang) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan nama barang">
                            @error('Nama_barang')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="Kode_barang" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Kode Barang') }}</label>
                            <input type="text" name="Kode_barang" id="Kode_barang" value="{{ old('Kode_barang', $barang->Kode_barang) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan kode barang">
                            @error('Kode_barang')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="Kategori_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Kategori') }}</label>
                            <select name="Kategori_id" id="Kategori_id" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                                @foreach($kategoris as $kategori)
                                    <option value="{{ $kategori->ID_kategori }}" {{ $barang->Kategori_id == $kategori->ID_kategori ? 'selected' : '' }}>
                                        {{ $kategori->Nama_kategori }}
                                    </option>
                                @endforeach
                            </select>
                            @error('Kategori_id')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="Stok" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Stok') }}</label>
                            <input type="number" name="Stok" id="Stok" value="{{ old('Stok', $barang->Stok) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan stok barang">
                            @error('Stok')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="Harga_beli" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Harga Beli') }}</label>
                            <input type="number" step="0.01" name="Harga_beli" id="Harga_beli" value="{{ old('Harga_beli', $barang->Harga_beli) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan harga beli">
                            ```blade
                            @error('Harga_beli')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="Harga_jual" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Harga Jual') }}</label>
                            <input type="number" step="0.01" name="Harga_jual" id="Harga_jual" value="{{ old('Harga_jual', $barang->Harga_jual) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan harga jual">
                            @error('Harga_jual')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="Deskripsi" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Deskripsi') }}</label>
                            <textarea name="Deskripsi" id="Deskripsi" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan deskripsi barang">{{ old('Deskripsi', $barang->Deskripsi) }}</textarea>
                        </div>

                        <div>
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">
                                {{ __('Perbarui Barang') }}
                            </button>
                        </div>
                        <div class="mb-4">
                            <button onclick="window.history.back()" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-100 uppercase tracking-widest hover:bg-gray-400 active:bg-gray-500 focus:outline-none focus:border-gray-700 focus:ring focus:ring-gray-200 disabled:opacity-25 transition">
                                {{ __('Kembali') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>