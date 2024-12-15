<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Buat Transaksi Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('transaksi.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="Tanggal_transaksi" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Tanggal Transaksi') }}</label>
                            <input type="datetime-local" name="Tanggal_transaksi" id="Tanggal_transaksi" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                            @error('Tanggal_transaksi')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="Jenis_transaksi" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Jenis Transaksi') }}</label>
                            <select name="Jenis_transaksi" id="Jenis_transaksi" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                                <option value="masuk">{{ __('Masuk') }}</option>
                                <option value="keluar">{{ __('Keluar') }}</option>
                            </select>
                            @error('Jenis_transaksi')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="ID_barang" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('ID Barang') }}</label>
                            <select name="ID_barang" id="ID_barang" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" onchange="updateHargaSatuan(this)">
                                <option value="">{{ __('Pilih Barang') }}</option>
                                @foreach($barangs as $barang)
                                    <option value="{{ $barang->ID_barang }}" data-harga="{{ $barang->Harga_jual }}">{{ $barang->Nama_barang }}</option>
                                @endforeach
                            </select>
                            @error('ID_barang')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="Harga_satuan" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Harga Satuan') }}</label>
                            <input type="number" step="0.01" name="Harga_satuan" id="Harga_satuan" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan harga satuan" readonly>
                            @error('Harga_satuan')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="jumlah" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Jumlah') }}</label>
                            <input type="number" name="jumlah" id="jumlah" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan jumlah" oninput="updateTotalHarga()">
                            @error('jumlah')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="Total_harga" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Total Harga') }}</label>
                            <input type="number" step="0.01" name="Total_harga" id="Total_harga" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan total harga" readonly>
                            @error('Total_harga')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="ID_pemasok" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Pemasok') }}</label>
                            <select name="ID_pemasok" id="ID_pemasok" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                                <option value="">{{ __('Pilih Pemasok') }}</option>
                                @foreach($pemasoks as $pemasok)
                                    <option value="{{ $pemasok->ID_pemasok }}">{{ $pemasok->Nama_pemasok }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label for="ID_customer" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Customer') }}</label>
                            <select name="ID_customer" id="ID_customer" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                                <option value="">{{ __('Pilih Customer') }}</option>
                                @foreach($customers as $customer)
                                    <option value="{{ $customer->ID_customer }}">{{ $customer->Nama_customer }}</option>
                                @endforeach
                            </select>
                        </div>                        

                        <div>
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">
                                {{ __('Simpan Transaksi') }}
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


<script>
    function updateHargaSatuan(selectElement) {
        const selectedOption = selectElement.options[selectElement.selectedIndex];
        const hargaJual = selectedOption.getAttribute('data-harga');
        document.getElementById('Harga_satuan').value = hargaJual;
        updateTotalHarga(); // Update total harga when harga satuan changes
    }

    function updateTotalHarga() {
        const hargaSatuan = parseFloat(document.getElementById('Harga_satuan').value) || 0;
        const jumlah = parseInt(document.getElementById('jumlah').value) || 0;
        const totalHarga = hargaSatuan * jumlah;
        document.getElementById('Total_harga').value = totalHarga.toFixed(2); // Set total harga with 2 decimal places
    }
</script>