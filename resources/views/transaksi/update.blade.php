<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Transaksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('transaksi.update', $transaksi->ID_transaksi) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Menambahkan metode PUT untuk update -->
                        
                        <div class="mb-4">
                            <label for="Tanggal_transaksi" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Tanggal Transaksi') }}</label>
                            <input type="datetime-local" name="Tanggal_transaksi" id="Tanggal_transaksi" value="{{ old('Tanggal_transaksi', $transaksi->Tanggal_transaksi) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                            @error('Tanggal_transaksi')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="Jenis_transaksi" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Jenis Transaksi') }}</label>
                            <select name="Jenis_transaksi" id="Jenis_transaksi" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                                <option value="masuk" {{ (old('Jenis_transaksi', $transaksi->Jenis_transaksi) == 'masuk') ? 'selected' : '' }}>Masuk</option>
                                <option value="keluar" {{ (old('Jenis_transaksi', $transaksi->Jenis_transaksi) == 'keluar') ? 'selected' : '' }}>Keluar</option>
                            </select>
                            @error('Jenis_transaksi')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="ID_barang" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('ID Barang') }}</label>
                            <input type="text" name="ID_barang" id="ID_barang" value="{{ old('ID_barang', $transaksi->ID_barang) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan ID barang">
                            @error('ID_barang')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="Jumlah" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Jumlah') }}</label>
                            <input type="number" name="Jumlah" id="Jumlah" value="{{ old('Jumlah', $transaksi->Jumlah) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan jumlah">
                            @error('Jumlah')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="Harga_satuan" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Harga Satuan') }}</label>
                            <input type="number" step="0.01" name="Harga_satuan" id="Harga_satuan" value="{{ old('Harga_satuan', $transaksi->Harga_satuan) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray ```blade
-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan harga satuan">
                            @error('Harga_satuan')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="Total_harga" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Total Harga') }}</label>
                            <input type="number" step="0.01" name="Total_harga" id="Total_harga" value="{{ old('Total_harga', $transaksi->Total_harga) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan total harga" readonly>
                        </div>

                        <div class="mb-4">
                            <label for="ID_pemasok" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('ID Pemasok') }}</label>
                            <input type="text" name="ID_pemasok" id="ID_pemasok" value="{{ old('ID_pemasok', $transaksi->ID_pemasok) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan ID pemasok">
                            @error('ID_pemasok')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="ID_customer" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('ID Customer') }}</label>
                            <input type="text" name="ID_customer" id="ID_customer" value="{{ old('ID_customer', $transaksi->ID_customer) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan ID customer">
                            @error('ID_customer')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">
                                {{ __('Perbarui Transaksi') }}
                            </button>
                        </div>
                        <div class="mb-4">
                            <button onclick="window.history.back()" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-100 uppercase tracking-widest hover:bg-gray-400 active:bg-gray-500 focus:outline-none focus:border-gray-700 focus:ring focus:ring-gray-200 disabled:opacity-25 transition">
                                {{ __('Kembali') }}
                            </button>
                        </div>
                        <div class="mb-4">
                            <form action="{{ route('transaksi.destroy', $transaksi->ID_transaksi) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 disabled:opacity-25 transition">
                                    {{ __('Hapus Transaksi') }}
                                </button>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>