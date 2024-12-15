<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4">
                        <a href="{{ route('barang.create') }}" class="inline-flex items-center px-4 py-2 border border-blue-600 rounded-md font-semibold text-xs text-blue-600 uppercase tracking-widest hover:bg-blue-500 hover:text-white active:bg-blue-700 active:text-white transform active:scale-95 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">
                            {{ __('Buat Barang') }}
                        </a>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    ID Barang
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    Nama Barang
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    Kode Barang
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    Kategori
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    Stok
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    Harga Beli
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    Harga Jual
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    Deskripsi
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    Dibuat Pada
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    Diperbarui Pada
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800">
                            @foreach($barangs as $barang)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $barang->ID_barang }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $barang->Nama_barang }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $barang->Kode_barang }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $barang->kategori->Nama_kategori }} <!-- Mengambil nama kategori -->
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $barang->Stok }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ number_format($barang->Harga_beli, 2, ',', '.') }} <!-- Format harga beli -->
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ number_format($barang->Harga_jual, 2, ',', '.') }} <!-- Format harga jual -->
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $barang->Deskripsi }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        {{ $barang->created_at }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        {{ $barang->updated_at }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        <a href="{{ route('barang.edit', $barang->ID_barang) }}" class="text-indigo-600 hover:text-indigo-900">
                                            {{ __('Edit') }}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>