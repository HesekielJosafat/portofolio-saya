<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin Saya') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <!-- Area Judul dan Tombol Tambah -->
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-bold text-gray-700">Daftar Karya Portofolio</h3>
                        
                        <!-- Nanti tombol ini akan diarahkan ke form tambah karya -->
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition">
                            + Tambah Karya Baru
                        </a>
                    </div>

                    <!-- Area Tabel Daftar Karya -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100 border-b border-gray-200">
                                    <th class="p-3 font-semibold text-gray-700 border-r">No</th>
                                    <th class="p-3 font-semibold text-gray-700 border-r">Judul Proyek</th>
                                    <th class="p-3 font-semibold text-gray-700 border-r">Keahlian (Skill)</th>
                                    <th class="p-3 font-semibold text-gray-700 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data Contoh (Nanti ini diambil dari PostgreSQL) -->
                                <tr class="border-b border-gray-200 hover:bg-gray-50">
                                    <td class="p-3 border-r">1</td>
                                    <td class="p-3 border-r">Website Kasir Sederhana</td>
                                    <td class="p-3 border-r">Laravel, Tailwind, PostgreSQL</td>
                                    <td class="p-3 text-center">
                                        <button class="text-sm bg-yellow-400 hover:bg-yellow-500 text-white py-1 px-3 rounded mr-1">
                                            Edit
                                        </button>
                                        <button class="text-sm bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                <!-- Akhir Data Contoh -->
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>