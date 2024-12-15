<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Transaksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4">
                        <a href="{{ route('transaksi.create') }}" class="inline-flex items-center px-4 py-2 border border-blue-600 rounded-md font-semibold text-xs text-blue-600 uppercase tracking-widest hover:bg-blue-500 hover:text-white active:bg-blue-700 active:text-white transform active:scale-95 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">
                            {{ __('Buat Transaksi') }}
                        </a>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    ID Transaksi
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    Tanggal Transaksi
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    Jenis Transaksi
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    ID Barang
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    Jumlah
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    Harga Satuan
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    Total Harga
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    ID Pemasok
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    ID Customer
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800">
                            @foreach($transaksis as $transaksi)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $transaksi->ID_transaksi }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $transaksi->Tanggal_transaksi }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $transaksi->Jenis_transaksi }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $transaksi->ID_barang }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $transaksi->Jumlah }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $transaksi->Harga_satuan }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $transaksi->Total_harga }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $transaksi->ID_pemasok }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $transaksi->ID_customer }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        <a href="{{ route('transaksi.edit', $transaksi->ID_transaksi) }}" class="text-indigo-600 hover:text-indigo-900">
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