<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    // 1. Menampilkan Halaman Tabel (Read)
    public function index()
    {
        $abouts = About::all(); // Ambil semua data
        return view('admin.abouts.index', compact('abouts'));
    }

    // 2. Menampilkan Halaman Form Tambah Data (Create)
    public function create()
    {
        return view('admin.abouts.create');
    }

    // 3. Memproses Penyimpanan Data ke Database (Store)
    public function store(Request $request)
    {
        $data = $request->all();

        // Logika untuk menyimpan file Foto Profil (jika diupload)
        if ($request->hasFile('profile_image')) {
            $data['profile_image'] = $request->file('profile_image')->store('images/about', 'public');
        }
         // TAMBAHAN UNTUK BANNER
        if ($request->hasFile('hero_image')) {
            $data['hero_image'] = $request->file('hero_image')->store('images/about', 'public');
        }

        About::create($data); // Simpan ke database

        return redirect()->route('abouts.index')->with('success', 'Data About berhasil ditambahkan!');
    }

    // 4. Menampilkan Halaman Form Edit (Edit)
    public function edit(About $about)
    {
        return view('admin.abouts.edit', compact('about'));
    }

    // 5. Memproses Perubahan Data (Update)
    public function update(Request $request, About $about)
    {
        $data = $request->all();

        // Jika user mengupload foto baru saat diedit
        if ($request->hasFile('profile_image')) {
            // Hapus foto lama agar memori tidak penuh
            if ($about->profile_image) {
                Storage::disk('public')->delete($about->profile_image);
                $data['profile_image'] = $request->file('profile_image')->store('images/about', 'public');
            }
        // TAMBAHAN UNTUK BANNER
        if ($request->hasFile('hero_image')) {
            if ($about->hero_image) Storage::disk('public')->delete($about->hero_image);
            $data['hero_image'] = $request->file('hero_image')->store('images/about', 'public');
        }

            $data['profile_image'] = $request->file('profile_image')->store('images/about', 'public');
        }

        $about->update($data); // Update datanya

        return redirect()->route('abouts.index')->with('success', 'Data About berhasil diupdate!');
    }

    // 6. Memproses Hapus Data (Delete)
    public function destroy(About $about)
    {
        // Hapus fotonya juga dari folder
        if ($about->profile_image) {
            Storage::disk('public')->delete($about->profile_image);
        }
        $about->delete();

        return redirect()->route('abouts.index')->with('success', 'Data berhasil dihapus!');
    }
}