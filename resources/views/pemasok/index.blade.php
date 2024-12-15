<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Pemasok') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4">
                        <a href="{{ route('pemasok.create') }}" class="inline-flex items-center px-4 py-2 border border-blue-600 rounded-md font-semibold text-xs text-blue-600 uppercase tracking-widest hover:bg-blue-500 hover:text-white active:bg-blue-700 active:text-white transform active:scale-95 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">
                            {{ __('Buat Pemasok') }}
                        </a>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    ID Pemasok
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    Nama Pemasok
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    Alamat
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    No Telepon
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    Email
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">
                                    Kontak Person
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
                            @foreach($pemasoks as $pemasok)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $pemasok->ID_pemasok }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $pemasok->Nama_pemasok }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $pemasok->Alamat }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $pemasok->No_telp }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $pemasok->Email }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                        {{ $pemasok->Kontak_person }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        {{ $pemasok->created_at }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        {{ $pemasok->updated_at }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray - **Aksi**
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        <a href="{{ route('pemasok.edit', $pemasok->ID_pemasok) }}" class="text-indigo-600 hover:text-indigo-900">
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