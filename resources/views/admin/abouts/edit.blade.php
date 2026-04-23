<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Data Profil & Identitas</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <form action="{{ route('abouts.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') 
                    
                    <h3 class="text-lg font-bold text-gray-700 mb-4 border-b pb-2">Bagian 1: Hero & Banner Depan</h3>
                    <div class="mb-4">
                        <label class="block text-gray-700">Nama Lengkap</label>
                        <input type="text" name="name" value="{{ $about->name }}" class="w-full border-gray-300 rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Profesi (Pisahkan dengan koma. Contoh: Designer, Developer)</label>
                        <input type="text" name="hero_titles" value="{{ $about->hero_titles }}" class="w-full border-gray-300 rounded" required>
                    </div>

                    <div class="mb-6 border-b pb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Upload Foto Banner (Background Depan)</label>
                        @if($about->hero_image)
                            <img src="{{ asset('storage/' . $about->hero_image) }}" alt="Banner" class="h-32 w-full object-cover rounded mb-2">
                        @endif
                        <input type="file" name="hero_image" class="w-full border-gray-300 rounded">
                    </div>

                    <h3 class="text-lg font-bold text-gray-700 mb-4 border-b pb-2">Bagian 2: Data Diri (About)</h3>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Upload Foto Profil (Bentuk Lingkaran)</label>
                        @if($about->profile_image)
                            <img src="{{ asset('storage/' . $about->profile_image) }}" alt="Profile" class="h-20 w-20 object-cover rounded-full mb-2">
                        @endif
                        <input type="file" name="profile_image" class="w-full border-gray-300 rounded">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Judul Penjelasan Diri (Contoh: UI/UX Designer)</label>
                        <input type="text" name="about_title" value="{{ $about->about_title }}" class="w-full border-gray-300 rounded" required>
                    </div>

                    <!-- GRID 2 KOLOM UNTUK IDENTITAS -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-gray-700 text-sm">Tanggal Lahir</label>
                            <input type="date" name="birthday" value="{{ $about->birthday }}" class="w-full border-gray-300 rounded">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm">Umur</label>
                            <input type="number" name="age" value="{{ $about->age }}" class="w-full border-gray-300 rounded">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm">Website</label>
                            <input type="text" name="website" value="{{ $about->website }}" class="w-full border-gray-300 rounded">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm">Gelar Pendidikan (Degree)</label>
                            <input type="text" name="degree" value="{{ $about->degree }}" class="w-full border-gray-300 rounded">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm">No. Handphone</label>
                            <input type="text" name="phone" value="{{ $about->phone }}" class="w-full border-gray-300 rounded">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm">Email Pribadi</label>
                            <input type="email" name="email" value="{{ $about->email }}" class="w-full border-gray-300 rounded">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm">Kota / Domisili</label>
                            <input type="text" name="city" value="{{ $about->city }}" class="w-full border-gray-300 rounded">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm">Status Freelance (Contoh: Available)</label>
                            <input type="text" name="freelance_status" value="{{ $about->freelance_status }}" class="w-full border-gray-300 rounded">
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700">Deskripsi Panjang Tentang Anda</label>
                        <textarea name="about_description" rows="5" class="w-full border-gray-300 rounded" required>{{ $about->about_description }}</textarea>
                    </div>

                    <div class="flex items-center space-x-4">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded shadow">
                            Update Semua Data
                        </button>
                        <a href="{{ route('abouts.index') }}" class="text-gray-500 hover:text-gray-700">Batal</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>