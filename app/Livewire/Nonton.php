<?php

namespace App\Livewire;

use App\Models\Anime;
use App\Models\Donghua;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;

// class Nonton extends Component
// {
//     use WithFileUploads;
//     public $detailNonton;
//     public $Kategori = 'anime';
//     public $Menu = 'lihat';
//     public $kategori;
//     public $title;
//     public $genre;
//     public $deskripsi;
//     public $episode;
//     public $status;
//     public $tahun_rilis;
//     public $studio;
//     public $rating;
//     public $gambar;

//     public function tampilkanDetail($id, $kategori)
//     {
//         if ($kategori === 'anime') {
//             $this->detailNonton = Anime::findOrFail($id);
//         } else {
//             $this->detailNonton = Donghua::findOrFail($id);
//         }

//         $this->Menu = 'detail';
//     }

//     public function simpan() {
//         $this->validate([
//             'kategori' => 'required|in:anime,donghua',
//             'title' => 'required|string|max:255',
//             'genre' => 'required|string',
//             'deskripsi' => 'required|string',
//             'episode' => 'required|integer|min:1',
//             'status' => 'required|in:watching,completed,dropped,on-hold,plan-to-watch',
//             'tahun_rilis' => ['required', 'date_format:d-m-Y'],
//             'studio' => 'required|string|max:255',
//             'rating' => 'nullable|numeric|min:1|max:10',
//         ]);

//         $namagambar = null;
//         if ($this->gambar) {
//             $folder = $this->kategori === 'anime' ? 'img/anime' : 'img/donghua';
//             $namagambar = $this->gambar->store($folder, 'public');
//         }

//         $simpan = $this->kategori === 'anime' ? new Anime() : new Donghua();
//         $simpan->kategori = $this->kategori;
//         $simpan->title = $this->title;
//         $simpan->genre = $this->genre;
//         $simpan->deskripsi = $this->deskripsi;
//         $simpan->episode = $this->episode;
//         $simpan->status = $this->status;
//         $simpan->tahun_rilis = $this->tahun_rilis;
//         $simpan->studio = $this->studio;
//         $simpan->rating = $this->rating;
//         if(isset($this->gambar)){
//             $simpan->gambar = $namagambar;
//         }
//         $simpan->save();

//         $this->reset(['kategori','title', 'genre', 'deskripsi', 'episode', 'status', 'tahun_rilis', 'studio', 'rating', 'gambar']);
//         $this->Menu = 'lihat';
//     }

//     public function lihatKategori($menu1) {
//         $this->Kategori = $menu1;
//     }

//     public function lihatMenu($menu2) {
//         $this->Menu = $menu2;
//     }

//     public function render()
//     {
//         return view('livewire.nonton')->with([
//             'animes' => Anime::all(),
//             'donghuas' => Donghua::all(),
//         ]);
//     }
// }

class Nonton extends Component
{
    use WithFileUploads;

    public $detailNonton;
    public $Kategori = 'anime';
    public $Menu = 'lihat';
<<<<<<< HEAD
    public $title, $genre, $deskripsi, $episode, $status, $tahun_rilis, $studio, $rating, $gambar;
=======
    public $formkategori;
    public $title;
    public $genre;
    public $deskripsi;
    public $episode;
    public $status;
    public $tahun_rilis;
    public $studio;
    public $rating;
    public $gambar;
>>>>>>> 3047866eecbcb1a0fca6cb2b74d00db5d79b8d58

    public function tampilkanDetail($id, $kategori)
    {
        $this->detailNonton = $kategori === 'anime' ? Anime::find($id) : Donghua::find($id);

        dd($this->detailNonton);

        $this->Menu = 'detail';
    }

    public function simpan() {
        $this->validate([
<<<<<<< HEAD
=======
            'formkategori' => 'required|in:anime,donghua',
>>>>>>> 3047866eecbcb1a0fca6cb2b74d00db5d79b8d58
            'title' => 'required|string|max:255',
            'genre' => 'required|string',
            'deskripsi' => 'required|string',
            'episode' => 'required|integer|min:1',
            'status' => 'required|in:watching,completed,dropped,on-hold,plan-to-watch',
<<<<<<< HEAD
            'tahun_rilis' => 'required|date_format:Y-m-d', // Pastikan sesuai format
=======
            'tahun_rilis' => 'required|integer|min:1900|max:' . date('Y'),
>>>>>>> 3047866eecbcb1a0fca6cb2b74d00db5d79b8d58
            'studio' => 'required|string|max:255',
            'rating' => 'nullable|numeric|min:1|max:10',
            'gambar' => 'nullable|image|max:2048', // Pastikan file adalah gambar dan ukurannya tidak terlalu besar
        ]);

        // Proses Upload Gambar (jika ada)
        $namagambar = null;
        if ($this->gambar) {
<<<<<<< HEAD
            $folder = $this->Kategori === 'anime' ? 'img/anime' : 'img/donghua';
            $namagambar = $this->gambar->storeAs($folder, time() . '.' . $this->gambar->extension(), 'public');
        }

        // Simpan ke Model yang Sesuai
        $modelClass = $this->Kategori === 'anime' ? Anime::class : Donghua::class;
        $modelClass::create([
            'title' => $this->title,
            'genre' => $this->genre,
            'deskripsi' => $this->deskripsi,
            'episode' => $this->episode,
            'status' => $this->status,
            'tahun_rilis' => $this->tahun_rilis, // Sudah dalam format Y-m-d
            'studio' => $this->studio,
            'rating' => $this->rating,
            'gambar' => $namagambar,
        ]);
=======
            $folder = $this->formkategori === 'anime' ? 'img/anime' : 'img/donghua';
            $namagambar = $this->gambar->store($folder, 'public');
        }

        $simpan = $this->formkategori === 'anime' ? new Anime() : new Donghua();
        $simpan->kategori = $this->formkategori;
        $simpan->title = $this->title;
        $simpan->genre = $this->genre;
        $simpan->deskripsi = $this->deskripsi;
        $simpan->episode = $this->episode;
        $simpan->status = $this->status;
        $simpan->tahun_rilis = $this->tahun_rilis;
        $simpan->studio = $this->studio;
        $simpan->rating = $this->rating;
        if(isset($this->gambar)){
            $simpan->gambar = $namagambar;
        }
        $simpan->save();
>>>>>>> 3047866eecbcb1a0fca6cb2b74d00db5d79b8d58

        // Reset Input
        $this->reset(['title', 'genre', 'deskripsi', 'episode', 'status', 'tahun_rilis', 'studio', 'rating', 'gambar']);

        // Flash Message
        session()->flash('message', 'Data berhasil disimpan!');

        // Kembali ke tampilan 'lihat'
        $this->Menu = 'lihat';
    }

    public function lihatKategori($menu1) {
        $this->Kategori = $menu1;
    }

    public function lihatMenu($menu2) {
        $this->Menu = $menu2;
    }

    public function render()
    {
        return view('livewire.nonton', [
            'animes' => Anime::all(),
            'donghuas' => Donghua::all(),
        ]);
    }
}
