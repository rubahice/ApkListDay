<div class="p-4">
    <div>
        <div class="text-gray-900 dark:text-gray-100">
            <button wire:click="lihatKategori('anime')"
                class="{{ $Kategori == 'anime' ? 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800' : 'text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800' }}">
                Anime
            </button>
            <button wire:click="lihatKategori('donghua')"
                class="{{ $Kategori == 'donghua' ? 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800' : 'text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800' }}">
                Donghua
            </button>
            <button wire:loading disabled type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 inline-flex items-center">
                <svg aria-hidden="true" role="status" class="inline w-4 h-4 me-3 text-white animate-spin"
                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                        fill="#E5E7EB" />
                    <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                        fill="currentColor" />
                </svg>
                Loading...
            </button>
        </div>
        <div>
            @if ($Kategori == 'anime')
                <div>
                    <div class="text-gray-900 dark:text-gray-100">
                        <button wire:click="lihatMenu('tambah')"
                            class="{{ $Menu == 'tambah' ? 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800' : 'text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800' }}">
                            Tambah
                        </button>
                    </div>

                    <div class="py-10" wire:click="lihatMenu('detail')"
                        style="display: {{ $Menu === 'lihat' ? 'block' : 'none' }};">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                                <div class="relative group overflow-hidden rounded-lg shadow-lg cursor-pointer">
                                    <img src="{{ asset('resource/img/' . $detailNonton->kategori . '/' . $detailNonton->gambar) }}" alt="Anime"
                                        class="w-full h-auto transition-transform duration-300 group-hover:scale-105">
                                    <div class="absolute top-2 left-2 bg-gray-900 text-white text-xs px-2 py-1 rounded">
                                        {{ ucfirst($detailNonton->kategori) }}</div>
                                    <div
                                        class="absolute bottom-2 left-2 bg-red-600 text-white text-xs px-2 py-1 rounded">
                                        {{ $detailNonton->episode }}</div>
                                    <div
                                        class="absolute bottom-2 right-2 bg-yellow-500 text-white text-xs px-2 py-1 rounded">
                                        ★{{ $detailNonton->rating }}</div>
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 flex items-center justify-center text-white text-lg font-bold transition-opacity duration-300">
                                        {{ $detailNonton->title }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($Menu == 'detail')
                        <button wire:click="lihatMenu('lihat')"
                            class="mb-2 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                            Kembali
                        </button>
                        <div class="md:flex p-6 border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700"
                            style="display: {{ $Menu === 'detail' ? 'flex' : 'none' }};">
                            <div class="md:w-1/3">
                                @if ($detailNonton && $detailNonton->gambar)
                                    <img src="{{ asset('resource/img/' . $detailNonton->kategori . '/' . $detailNonton->gambar) }}"
                                        alt="Gambar" class="w-full h-full object-cover rounded-md">
                                @endif
                            </div>


                            <!-- Bagian Data -->
                            <div class="md:w-2/3 md:pl-6">
                                <div
                                    class="overflow-hidden shadow rounded-lg border border-gray-200 dark:border-gray-700">
                                    <table class="w-full bg-white dark:bg-gray-800">
                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                            <tr>
                                                <td class="px-4 py-2 font-semibold text-gray-700 dark:text-white">
                                                    Kategori</td>
                                                <td class="px-4 py-2 text-gray-600 dark:text-gray-300">
                                                    {{ ucfirst($detailNonton->kategori) }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2 font-semibold text-gray-700 dark:text-white">Judul
                                                </td>
                                                <td class="px-4 py-2 text-gray-600 dark:text-gray-300">
                                                    {{ $detailNonton->title }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2 font-semibold text-gray-700 dark:text-white">Genre
                                                </td>
                                                <td class="px-4 py-2 text-gray-600 dark:text-gray-300">
                                                    {{ $detailNonton->genre }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2 font-semibold text-gray-700 dark:text-white">
                                                    Deskripsi</td>
                                                <td class="px-4 py-2 text-gray-600 dark:text-gray-300">
                                                    {{ $detailNonton->deskripsi }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2 font-semibold text-gray-700 dark:text-white">
                                                    Episode</td>
                                                <td class="px-4 py-2 text-gray-600 dark:text-gray-300">
                                                    {{ $detailNonton->episode }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2 font-semibold text-gray-700 dark:text-white">Status
                                                </td>
                                                <td class="px-4 py-2 text-gray-600 dark:text-gray-300">
                                                    {{ $detailNonton->status }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2 font-semibold text-gray-700 dark:text-white">Tahun
                                                    Rilis</td>
                                                <td class="px-4 py-2 text-gray-600 dark:text-gray-300">
                                                    {{ $detailNonton->tahun_rilis }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2 font-semibold text-gray-700 dark:text-white">Studio
                                                </td>
                                                <td class="px-4 py-2 text-gray-600 dark:text-gray-300">
                                                    {{ $detailNonton->studio }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-4 py-2 font-semibold text-gray-700 dark:text-white">Rating
                                                </td>
                                                <td class="px-4 py-2 text-gray-600 dark:text-gray-300">
                                                    ★{{ $detailNonton->rating }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-4">
                                    <button
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Ubah
                                        Data Saya</button>
                                </div>
                            </div>
                        </div>
                    @elseif ($Menu == 'tambah')
                        <button wire:click="lihatMenu('lihat')"
                            class="mb-2 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                            Kembali
                        </button>
                        <div class="md:flex p-6 border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700"
                            style="display: {{ $Menu === 'tambah' ? 'flex' : 'none' }};">
                            <div class="md:w-full md:pl-6">
                                    <form wire:submit.prevent="simpan">
                                    <div class="mb-4">
                                        <label for="kategori"
                                            class="block text-sm font-medium text-gray-700 dark:text-white">Kategori</label>
                                        <select wire:model="kategori" id="kategori" name="kategori"
                                            class="mt-1 block w-full p-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                            <option value="">Pilih status</option>
                                            <option value="anime">Anime</option>
                                            <option value="donghua">Donghua</option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label for="judul"
                                            class="block text-sm font-medium text-gray-700 dark:text-white">Judul</label>
                                        <input wire:model="title" type="text" id="judul" name="judul"
                                            class="mt-1 block w-full p-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                            placeholder="Masukkan judul anime">
                                    </div>

                                    <div class="mb-4">
                                        <label for="genre"
                                            class="block text-sm font-medium text-gray-700 dark:text-white">Genre</label>
                                        <input wire:model="genre" type="text" id="genre" name="genre"
                                            class="mt-1 block w-full p-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                            placeholder="Contoh: Aksi, Petualangan">
                                    </div>

                                    <div class="mb-4">
                                        <label for="deskripsi"
                                            class="block text-sm font-medium text-gray-700 dark:text-white">Deskripsi</label>
                                        <textarea wire:model="deskripsi" id="deskripsi" name="deskripsi" rows="3"
                                            class="mt-1 block w-full p-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                            placeholder="Ceritakan tentang anime ini"></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label for="episode"
                                            class="block text-sm font-medium text-gray-700 dark:text-white">Episode</label>
                                        <input wire:model="episode" type="number" id="episode" name="episode"
                                            class="mt-1 block w-full p-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                            placeholder="Jumlah episode">
                                    </div>

                                    <div class="mb-4">
                                        <label for="status"
                                            class="block text-sm font-medium text-gray-700 dark:text-white">Status</label>
                                        <select wire:model="status" id="status" name="status"
                                            class="mt-1 block w-full p-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                            <option value="">Pilih status</option>
                                            <option value="watching">Watching</option>
                                            <option value="completed">Completed</option>
                                            <option value="dropped">Dropped</option>
                                            <option value="on-hold">On-Hold</option>
                                            <option value="plan-to-watch">Plan-to-Watch</option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label for="tahun_rilis"
                                            class="block text-sm font-medium text-gray-700 dark:text-white">Tahun
                                            Rilis</label>
                                        <input wire:model="tahun_rilis" type="text" id="tahun_rilis"
                                            name="tahun_rilis"
                                            class="mt-1 block w-full p-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                            placeholder="Masukkan tahun rilis">
                                    </div>

                                    <div class="mb-4">
                                        <label for="studio"
                                            class="block text-sm font-medium text-gray-700 dark:text-white">Studio</label>
                                        <input wire:model="studio" type="text" id="studio" name="studio"
                                            class="mt-1 block w-full p-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                            placeholder="Nama studio animasi">
                                    </div>

                                    <div class="mb-4">
                                        <label for="rating"
                                            class="block text-sm font-medium text-gray-700 dark:text-white">Rating</label>
                                        <input wire:model="rating" type="number" id="rating" name="rating"
                                            class="mt-1 block w-full p-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                            placeholder="Nama studio animasi">
                                    </div>

                                    <div class="mb-4">
                                        <label for="gambar"
                                            class="block text-sm font-medium text-gray-700 dark:text-white">Upload
                                            Gambar</label>
                                        <input wire:model="gambar" type="file" id="gambar" name="gambar"
                                            class="mt-1 block w-full border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    @endif
                </div>
            @elseif ($Kategori == 'donghua')

            @endif

        </div>
    </div>
</div>
