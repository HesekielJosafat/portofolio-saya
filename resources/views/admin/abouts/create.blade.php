<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Data Profil & Identitas</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <form action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- BAGIAN 1: HERO & BANNER -->
                    <h3 class="text-lg font-bold text-gray-700 mb-4 border-b pb-2">Bagian 1: Hero & Banner Depan</h3>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
                        <input type="text" name="name" class="w-full border-gray-300 rounded focus:ring focus:ring-blue-200" required placeholder="Contoh: Hesekiel Josafat">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Profesi Utama (Pisahkan dengan koma)</label>
                        <input type="text" name="hero_titles" class="w-full border-gray-300 rounded focus:ring focus:ring-blue-200" required placeholder="Contoh: Designer, Developer, Freelancer">
                    </div>

                    <div class="mb-6 border-b pb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Upload Foto Banner (Background Depan)</label>
                        <input type="file" name="hero_image" class="w-full border-gray-300 rounded focus:ring focus:ring-blue-200" accept="image/*">
                        <p class="text-sm text-gray-500 mt-1">Sangat disarankan menggunakan gambar landscape/lebar.</p>
                    </div>

                    <!-- BAGIAN 2: DATA DIRI -->
                    <h3 class="text-lg font-bold text-gray-700 mb-4 border-b pb-2">Bagian 2: Data Diri (About)</h3>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Upload Foto Profil (Bentuk Lingkaran)</label>
                        <input type="file" name="profile_image" class="w-full border-gray-300 rounded focus:ring focus:ring-blue-200" accept="image/*">
                        <p class="text-sm text-gray-500 mt-1">Disarankan menggunakan foto kotak (1:1) agar lingkaran presisi.</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Judul Penjelasan Diri</label>
                        <input type="text" name="about_title" class="w-full border-gray-300 rounded focus:ring focus:ring-blue-200" required placeholder="Contoh: UI/UX Designer & Web Developer">
                    </div>

                    <!-- GRID 2 KOLOM UNTUK IDENTITAS -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-gray-700 text-sm font-semibold mb-1">Tanggal Lahir</label>
                            <input type="date" name="birthday" class="w-full border-gray-300 rounded focus:ring focus:ring-blue-200">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-semibold mb-1">Umur (Angka)</label>
                            <input type="number" name="age" class="w-full border-gray-300 rounded focus:ring focus:ring-blue-200" placeholder="Contoh: 25">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-semibold mb-1">Website URL</label>
                            <input type="text" name="website" class="w-full border-gray-300 rounded focus:ring focus:ring-blue-200" placeholder="Contoh: www.contoh.com">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-semibold mb-1">Gelar Pendidikan</label>
                            <input type="text" name="degree" class="w-full border-gray-300 rounded focus:ring focus:ring-blue-200" placeholder="Contoh: Sarjana Komputer">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-semibold mb-1">No. Handphone / WA</label>
                            <input type="text" name="phone" class="w-full border-gray-300 rounded focus:ring focus:ring-blue-200" placeholder="Contoh: +62 812 3456 7890">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-semibold mb-1">Email Publik</label>
                            <input type="email" name="email" class="w-full border-gray-300 rounded focus:ring focus:ring-blue-200" placeholder="Contoh: kontak@saya.com">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-semibold mb-1">Kota / Domisili</label>
                            <input type="text" name="city" class="w-full border-gray-300 rounded focus:ring focus:ring-blue-200" placeholder="Contoh: Jakarta, Indonesia">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-semibold mb-1">Status Freelance</label>
                            <input type="text" name="freelance_status" class="w-full border-gray-300 rounded focus:ring focus:ring-blue-200" placeholder="Contoh: Available / Not Available">
                        </div>
                    </div>

                    <div class="mb-8">
                        <label class="block text-gray-700 font-semibold mb-2">Deskripsi Panjang Tentang Anda</label>
                        <textarea name="about_description" rows="5" class="w-full border-gray-300 rounded focus:ring focus:ring-blue-200" required placeholder="Ceritakan pengalaman, keahlian, dan tujuan karir Anda secara singkat di sini..."></textarea>
                    </div>

                    <div class="flex items-center space-x-4 border-t pt-4">
                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded shadow transition duration-150 ease-in-out">
                            Simpan Data Profil
                        </button>
                        <a href="{{ route('abouts.index') }}" class="text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out">Batal</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>