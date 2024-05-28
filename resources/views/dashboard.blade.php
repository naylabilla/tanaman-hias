<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<style>
    .custom-card-size {
        padding: 3rem;
        /* Ubah padding sesuai kebutuhan Anda */
        width: 200px;
        height: 200px;
    }
</style>

<body class="p-2">
    <div class="max-w-5xl mx-auto relative" x-data="{
        activeSlide: 1,
        slides: [
            { id: 1, image: '{{ asset('assets/images/tamu/carousel1.jpg') }}' }, 
            { id: 2, image: '{{ asset('assets/images/tamu/carousel2.jpg') }}' }, 
            { id: 3, image: '{{ asset('assets/images/tamu/carousel3.jpg') }}' }, 
            { id: 4, image: '{{ asset('assets/images/tamu/carousel4.jpg') }}' }
        ],
        loop(){
            setInterval(() => { this.activeSlide = this.activeSlide === 4 ? 1 : this.activeSlide + 1 }, 2000);
        }
    }" x-init="loop">
        <!-- Data Loop -->
        <template x-for="slide in slides" :key="slide.id">
            <div x-show="activeSlide === slide.id" class="h-80 flex items-center rounded-lg overflow-hidden">
                <img :src="slide.image" alt="Slide Image" class="w-full h-auto">
            </div>
        </template>

        <!-- Back/Next -->
        <div class="absolute inset-0 flex justify-between items-center">
            <button @click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1" class="bg-slate-100 text-slate-500 hover:bg-pink-200 hover:text-white transition font-bold rounded-full w-12 h-12 shadow text-center flex justify-center items-center -ml-16">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </button>
            <button @click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1" class="bg-slate-100 text-slate-500 hover:bg-pink-200 hover:text-white transition font-bold rounded-full w-12 h-12 shadow text-center flex justify-center items-center -mr-16">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>

        <!-- Buttons -->
        <div class="absolute w-full flex items-center justify-center px-4">
            <template x-for="slide in slides" :key="slide.id">
                <button class="flex-1 w-4 h-2 mt-4 mx-2 mb-2 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-slate-600 hover:shadow-lg" :class="{
                    'bg-green-800': activeSlide === slide.id,
                    'bg-slate-300': activeSlide !== slide.id,
                }" @click="activeSlide = slide.id"></button>
            </template>
        </div>
    </div>

    <br><br><br>
    <!-- Kategori -->
    <div class="font-semibold pb-2 w-5/6 mx-auto text-center">
        <div class="flex items-center justify-center">
            <div class="flex-1 h-0.5 bg-green-200"></div>
            <div class="px-4 text-green-300">KATEGORI</div>
            <div class="flex-1 h-0.5 bg-green-200"></div>
        </div>
        <div class="px-4 mt-4">RANGKAIAN UNTUK EVENT SPESIAL</div>
        <br>
        <div class="flex justif y-center mt-4">
            <div class="ml-0 mr-auto text-center"> <!-- Untuk gambar 1 -->
                <div class="bg-gray-100 shadow-lg rounded-lg custom-card-size">
                    <img src="assets/images/outdoor/gambar 7 goeppertia.png" alt="Gambar 1" class="w-32 h-32 object-cover">
                </div>
                <div class="mt-3">Outdoor</div>
            </div>
            <div class="mx-4 text-center"> <!-- Untuk gambar 2 -->
                <div class="bg-gray-100 shadow-lg rounded-lg custom-card-size">
                    <img src="assets/images/populer/gambar 5 calathea.png" alt="Gambar 2" class="w-32 h-32 object-cover">
                </div>
                <div class="mt-3">Populer</div>
            </div>
            <div class="ml-auto mr-0 text-center"><!-- Untuk gambar 3 -->
                <div class="bg-gray-100 shadow-lg rounded-lg custom-card-size">
                    <img src="assets/images/indoor/gambar 3 anthurium.png" alt="Gambar 3" class="w-32 h-32 object-cover">
                </div>
                <div class="mt-3">Indoor</div>
            </div>

        </div>
        <br>

        <br><br><br>

        <!-- Populer -->
        <div class="font-semibold pb-2 w-5/6 mx-auto text-center">
            <div class="flex items-center justify-center">
                <div class="flex-1 h-0.5 bg-green-200"></div>
                <div class="px-4 text-green-300">POPULER</div>
                <div class="flex-1 h-0.5 bg-green-200"></div>
            </div>
            <div class="px-2 mt-1">Saat ini kamu tertarik untuk menambah koleksi tanaman hias daun di
                <div class="px-2 mt-1">rumah agar terlihat lebih asri,berikut 6 rekomendasi tanaman hias
                    <div class="px-2 mt-1">populer saat ini</div>
                    <br>
                    <div class="grid grid-cols-3 gap-4 mt-4">
                        <div class="text-center"> <!-- Untuk gambar 1 -->
                            <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                <img src="assets/images/outdoor/gambar 7 goeppertia.png" alt="Gambar 1" class="w-32 h-32 object-cover">
                                <div class="mt-3">Monstera Deliciosa</div>
                            </div>
                        </div>
                        <div class="text-center"> <!-- Untuk gambar 2 -->
                            <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                <img src="assets/images/populer/gambar 5 calathea.png" alt="Gambar 2" class="w-32 h-32 object-cover">
                                <div class="mt-3">Watermelon Peperomia</div>
                            </div>
                        </div>
                        <div class="text-center"> <!-- Untuk gambar 3 -->
                            <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                <img src="assets/images/indoor/gambar 3 anthurium.png" alt="Gambar 3" class="w-32 h-32 object-cover">
                                <div class="mt-3">Sansevieria Trifasciata</div>
                            </div>
                        </div>
                        <div class="text-center"> <!-- Untuk gambar 4 -->
                            <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                <img src="assets/images/outdoor/gambar 4.png" alt="Gambar 4" class="w-32 h-32 object-cover">
                                <div class="mt-3">Cloropythum Comosum</div>
                            </div>
                        </div>
                        <div class="text-center"> <!-- Untuk gambar 5 -->
                            <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                <img src="assets/images/populer/gambar 5.png" alt="Gambar 5" class="w-32 h-32 object-cover">
                                <div class="mt-3">Spathipyllum Kochii</div>
                            </div>
                        </div>
                        <div class="text-center"> <!-- Untuk gambar 6 -->
                            <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                <img src="assets/images/indoor/gambar 6.png" alt="Gambar 6" class="w-32 h-32 object-cover">
                                <div class="mt-3">Alocasia Amazonica</div>
                            </div>
                        </div>
                    </div>

                </div>
                <br>

                <br><br><br>

                <!-- Outdoor -->
                <div class="font-semibold pb-2 w-5/6 mx-auto text-center">
                    <div class="flex items-center justify-center">
                        <div class="flex-1 h-0.5 bg-green-200"></div>
                        <div class="px-4 text-green-300">OUTDOOR</div>
                        <div class="flex-1 h-0.5 bg-green-200"></div>
                    </div>
                    <div class="px-2 mt-1"> Tanaman Hias outdoor merupakan pilihan tepat untuk mempercantik
                        <div class="px-2 mt-1">halaman. Warna hijau dan wanginya bunga dapat memberi kesegaran
                            <div class="px-2 mt-1">tersendiri di ruang terbuka</div>
                            <br>
                            <div class="grid grid-cols-3 gap-4 mt-4">
                                <div class="text-center"> <!-- Untuk gambar 1 -->
                                    <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                        <img src="assets/images/outdoor/gambar 7 goeppertia.png" alt="Gambar 1" class="w-32 h-32 object-cover">
                                        <div class="mt-3">Monstera Deliciosa</div>
                                    </div>
                                </div>
                                <div class="text-center"> <!-- Untuk gambar 2 -->
                                    <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                        <img src="assets/images/populer/gambar 5 calathea.png" alt="Gambar 2" class="w-32 h-32 object-cover">
                                        <div class="mt-3">Sansevieria Trifasciata</div>
                                    </div>
                                </div>
                                <div class="text-center"> <!-- Untuk gambar 3 -->
                                    <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                        <img src="assets/images/indoor/gambar 3 anthurium.png" alt="Gambar 3" class="w-32 h-32 object-cover">
                                        <div class="mt-3">Cloropythum Comosum</div>
                                    </div>
                                </div>
                                <div class="text-center"> <!-- Untuk gambar 4 -->
                                    <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                        <img src="assets/images/outdoor/gambar 4.png" alt="Gambar 4" class="w-32 h-32 object-cover">
                                        <div class="mt-3">Calathea Orbifolia</div>
                                    </div>
                                </div>
                                <div class="text-center"> <!-- Untuk gambar 5 -->
                                    <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                        <img src="assets/images/populer/gambar 5.png" alt="Gambar 5" class="w-32 h-32 object-cover">
                                        <div class="mt-3">Croton Petra</div>
                                    </div>
                                </div>
                                <div class="text-center"> <!-- Untuk gambar 6 -->
                                    <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                        <img src="assets/images/indoor/gambar 6.png" alt="Gambar 6" class="w-32 h-32 object-cover">
                                        <div class="mt-3">English Lavender</div>
                                    </div>
                                </div>
                                <div class="text-center"> <!-- Untuk gambar 7 -->
                                    <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                        <img src="assets/images/outdoor/gambar 4.png" alt="Gambar 4" class="w-32 h-32 object-cover">
                                        <div class="mt-3">Bromelia Guzmania</div>
                                    </div>
                                </div>
                                <div class="text-center"> <!-- Untuk gambar 8 -->
                                    <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                        <img src="assets/images/populer/gambar 5.png" alt="Gambar 5" class="w-32 h-32 object-cover">
                                        <div class="mt-3">Caladium Spring Fling</div>
                                    </div>
                                </div>
                                <div class="text-center"> <!-- Untuk gambar 9 -->
                                    <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                        <img src="assets/images/indoor/gambar 6.png" alt="Gambar 6" class="w-32 h-32 object-cover">
                                        <div class="mt-3">Geoepertia Loulsae</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>

                        <br><br><br>

                        <!-- Indoor -->
                        <div class="font-semibold pb-2 w-5/6 mx-auto text-center">
                            <div class="flex items-center justify-center">
                                <div class="flex-1 h-0.5 bg-green-200"></div>
                                <div class="px-4 text-green-300">INDOOR</div>
                                <div class="flex-1 h-0.5 bg-green-200"></div>
                            </div>
                            <div class="px-2 mt-1"> Tanaman Hias outdoor merupakan pilihan tepat untuk mempercantik
                                <div class="px-2 mt-1">halaman. Warna hijau dan wanginya bunga dapat memberi kesegaran
                                    <div class="px-2 mt-1">tersendiri di ruang terbuka</div>
                                    <br>
                                    <div class="grid grid-cols-3 gap-4 mt-4">
                                        <div class="text-center"> <!-- Untuk gambar 1 -->
                                            <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                                <img src="assets/images/outdoor/gambar 7 goeppertia.png" alt="Gambar 1" class="w-32 h-32 object-cover">
                                                <div class="mt-3">Watermelon Peperomia</div>
                                            </div>
                                        </div>
                                        <div class="text-center"> <!-- Untuk gambar 2 -->
                                            <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                                <img src="assets/images/populer/gambar 5 calathea.png" alt="Gambar 2" class="w-32 h-32 object-cover">
                                                <div class="mt-3">Spathipyllum kochii</div>
                                            </div>
                                        </div>
                                        <div class="text-center"> <!-- Untuk gambar 3 -->
                                            <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                                <img src="assets/images/indoor/gambar 3 anthurium.png" alt="Gambar 3" class="w-32 h-32 object-cover">
                                                <div class="mt-3">Alocasia Amazonica</div>
                                            </div>
                                        </div>
                                        <div class="text-center"> <!-- Untuk gambar 4 -->
                                            <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                                <img src="assets/images/outdoor/gambar 4.png" alt="Gambar 4" class="w-32 h-32 object-cover">
                                                <div class="mt-3">Anthurium Andraenum</div>
                                            </div>
                                        </div>
                                        <div class="text-center"> <!-- Untuk gambar 5 -->
                                            <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                                <img src="assets/images/populer/gambar 5.png" alt="Gambar 5" class="w-32 h-32 object-cover">
                                                <div class="mt-3">Dieffenbachia Seguine</div>
                                            </div>
                                        </div>
                                        <div class="text-center"> <!-- Untuk gambar 6 -->
                                            <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                                <img src="assets/images/indoor/gambar 6.png" alt="Gambar 6" class="w-32 h-32 object-cover">
                                                <div class="mt-3">Maranta Fascinator</div>
                                            </div>
                                        </div>
                                        <div class="text-center"> <!-- Untuk gambar 7 -->
                                            <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                                                <img src="assets/images/outdoor/gambar 4.png" alt="Gambar 4" class="w-32 h-32 object-cover">
                                                <div class="mt-3">Calla Lily</div>
                                            </div>
                                        </div>

                                    </div>
                                    <br>

                                    <br><br><br>

                                    <!-- Service -->
                                    <div class="font-semibold pb-2 w-5/6 mx-auto text-center">
                                        <div class="flex items-center justify-center">
                                            <div class="flex-1 h-0.5 bg-green-200"></div>
                                            <div class="px-4 text-green-300">S E R V I C E</div>
                                            <div class="flex-1 h-0.5 bg-green-200"></div>
                                        </div>
                                        <div class="px-4 mt-4">JAMINAN KAMI PADA ANDA</div>
                                        <br>
                                        <div class="flex justify-center mt-4">
                                            <div class="ml-0 mr-auto text-center"> <!-- Untuk gambar 1 -->
                                                <img src="assets/images/tamu/service1.png" alt="Gambar 1" class="w-32 h-32 object-cover">
                                                <div class="mt-3">Kirim di Hari yang Sama</div>
                                            </div>
                                            <div class="mx-4 text-center"> <!-- Untuk gambar 2 -->
                                                <img src="assets/images/tamu/service2.png" alt="Gambar 2" class="w-32 h-32 object-cover">
                                                <div class="mt-3">Pembayaran Aman</div>
                                            </div>
                                            <div class="ml-auto mr-0 text-center"> <!-- Untuk gambar 3 -->
                                                <img src="assets/images/tamu/service3.png" alt="Gambar 3" class="w-32 h-32 object-cover">
                                                <div class="mt-3">Pilihan Bunga Variatif</div>
                                            </div>
                                        </div>
                                        <br>

</body>

</html>