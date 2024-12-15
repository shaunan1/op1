<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Buat Pemasok Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('pemasok.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="Nama_pemasok" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Nama Pemasok') }}</label>
                            <input type="text" name="Nama_pemasok" id="Nama_pemasok" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan nama pemasok">
                            @error('Nama_pemasok')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="Alamat" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Alamat') }}</label>
                            <textarea name="Alamat" id="Alamat" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan alamat pemasok"></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="No_telp" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('No Telepon') }}</label>
                            <input type="text" name="No_telp" id="No_telp" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan nomor telepon">
                        </div>

                        <div class="mb-4">
                            <label for="Email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Email') }}</label>
                            <input type="email" name="Email" id="Email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan email">
                        </div>

                        <div class="mb-4">
                            <label for="Kontak_person" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Kontak Person') }}</label>
                            <input type="text" name="Kontak_person" id="Kontak_person" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan nama kontak person">
                        </div>

                        <div>
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">
                                {{ __('Simpan Pemasok') }}
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