<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Data Profil (About)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- ALERT PESAN SUKSES (Akan muncul jika Controller mengirimkan 'success') -->
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <!-- HEADER TABEL & TOMBOL TAMBAH -->
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-bold text-gray-700">Daftar Data Profil</h3>
                        
                        <!-- Logika Bisnis: Karena Profil Pribadi biasanya cuma 1, 
                             kita sembunyikan tombol tambah jika data sudah ada -->
                        @if($abouts->count() == 0)
                            <a href="{{ route('abouts.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-150 ease-in-out">
                                + Tambah Data Profil
                            </a>
                        @else
                            <span class="text-sm text-gray-500 italic">Data profil sudah terisi. Silakan edit data di bawah ini.</span>
                        @endif
                    </div>

                    <!-- TABEL DATA -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100 border-b border-gray-200">
                                    <th class="p-3 font-semibold text-gray-700 border-r w-24 text-center">Foto</th>
                                    <th class="p-3 font-semibold text-gray-700 border-r">Nama Lengkap</th>
                                    <th class="p-3 font-semibold text-gray-700 border-r">Profesi (Title)</th>
                                    <th class="p-3 font-semibold text-gray-700 border-r">Judul About</th>
                                    <th class="p-3 font-semibold text-gray-700 text-center w-48">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($abouts as $item)
                                    <tr class="border-b border-gray-200 hover:bg-gray-50 transition duration-150 ease-in-out">
                                        
                                        <!-- Kolom Foto -->
                                        <td class="p-3 border-r text-center">
                                            @if($item->profile_image)
                                                <img src="{{ asset('storage/' . $item->profile_image) }}" alt="Foto {{ $item->name }}" class="h-12 w-12 object-cover rounded-full mx-auto border border-gray-300 shadow-sm">
                                            @else
                                                <div class="h-12 w-12 rounded-full bg-gray-200 flex items-center justify-center mx-auto text-gray-500 text-xs">
                                                    No Foto
                                                </div>
                                            @endif
                                        </td>

                                        <!-- Kolom Data Text -->
                                        <td class="p-3 border-r font-medium text-gray-900">{{ $item->name }}</td>
                                        <td class="p-3 border-r text-gray-600">{{ $item->hero_titles }}</td>
                                        <td class="p-3 border-r text-gray-600">{{ $item->about_title }}</td>

                                        <!-- Kolom Tombol Aksi (Edit & Hapus) -->
                                        <td class="p-3 text-center">
                                            <div class="flex justify-center space-x-2">
                                                
                                                <!-- Tombol Edit -->
                                                <a href="{{ route('abouts.edit', $item->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white font-semibold py-1 px-3 rounded shadow-sm transition duration-150 ease-in-out text-sm flex items-center">
                                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                                    Edit
                                                </a>

                                                <!-- Tombol Hapus -->
                                                <form action="{{ route('abouts.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data profil ini secara permanen?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-1 px-3 rounded shadow-sm transition duration-150 ease-in-out text-sm flex items-center">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                                        Hapus
                                                    </button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <!-- Jika Database Kosong -->
                                    <tr>
                                        <td colspan="5" class="p-6 text-center text-gray-500 italic bg-gray-50">
                                            Belum ada data profil. Silakan klik tombol "+ Tambah Data Profil" di atas.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>