<?php

namespace App\Livewire;

use App\Models\Anime;
use App\Models\Donghua;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;

class Nonton extends Component
{
    use WithFileUploads;
    public $detailNonton;
    public $Kategori = 'anime';
    public $Menu = 'lihat';
    public $kategori;
    public $title;
    public $genre;
    public $deskripsi;
    public $episode;
    public $status;
    public $tahun_rilis;
    public $studio;
    public $rating;
    public $gambar;

    public function tampilkanDetail($id, $kategori)
    {
        if ($kategori === 'anime') {
            $this->detailNonton = Anime::findOrFail($id);
        } else {
            $this->detailNonton = Donghua::findOrFail($id);
        }

        $this->Menu = 'detail';
    }

    public function simpan() {
        $this->validate([
            'kategori' => 'required|in:anime,donghua',
            'title' => 'required|string|max:255',
            'genre' => 'required|string',
            'deskripsi' => 'required|string',
            'episode' => 'required|integer|min:1',
            'status' => 'required|in:watching,completed,dropped,on-hold,plan-to-watch',
            'tahun_rilis' => ['required', 'date_format:d-m-Y'],
            'studio' => 'required|string|max:255',
            'rating' => 'nullable|numeric|min:1|max:10',
        ]);

        $namagambar = null;
        if ($this->gambar) {
            $folder = $this->kategori === 'anime' ? 'img/anime' : 'img/donghua';
            $namagambar = $this->gambar->store($folder, 'public');
        }

        $simpan = $this->kategori === 'anime' ? new Anime() : new Donghua();
        $simpan->kategori = $this->kategori;
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

        $this->reset(['title', 'genre', 'deskripsi', 'episode', 'status', 'tahun_rilis', 'studio', 'rating', 'gambar']);
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
        return view('livewire.nonton')->with([
            'animes' => Anime::all(),
            'donghuas' => Donghua::all(),
        ]);
    }
}
