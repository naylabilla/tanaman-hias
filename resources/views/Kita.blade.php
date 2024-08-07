<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('assets/images/tamu/background2.png');
            background-size: contain;
            background-position: center;
            background-attachment: scroll;
        }
    </style>
</head>

<body class="bg-[#6D896B] h-full">
    <!-- Navbar -->
    <div class="navbar bg-white sticky top-0 grid grid-cols-2 text-black text-3xl font-bold" style="position: sticky; z-index: 1000; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
        <a href="" class="btn btn-ghost me-auto hover:bg-white mx-5">
            <img src="./assets/images/tamu/logo.png" alt="" class="size-14 mb-5 -mt-1 object-scale-down">
            <p class="text-2xl text-[#78A07C] mb-6 text-bold">Lushtilvy</p>
        </a>
        <div class="ms-auto">
            <a href="/keranjang" class="btn btn-ghost hover:bg-white">
                <img src="./assets/icons/navbar keranjang.png" alt="" class="w-12">
                <p class="text-2xl text-[#78A07C]">Keranjang</p>
            </a>
            <a href="/riwayat_pesanan" class="btn btn-ghost hover:bg-white">
                <img src="./assets/icons/navbar pesanan.png" alt="" class="w-12">
                <p class="text-2xl text-[#78A07C]">Pesanan</p>
            </a>
            <div class="border-l-4 border-black">
                <a href="/logout" class="btn btn-ghost hover:bg-white">
                    <img src="./assets/icons/user1.png" alt="" class="w-10">
                </a>
            </div>
        </div>
    </div>

    <br>

    <!-- Carousel -->
    <div class="max-w-5xl mx-auto relative z-10" x-data="{
        activeSlide: 1,
        slides: [
            { id: 1, image: '{{ asset('assets/images/tamu/carousel1.jpg') }}' }, 
            { id: 2, image: '{{ asset('assets/images/tamu/carousel2.jpg') }}' }, 
            { id: 3, image: '{{ asset('assets/images/tamu/carousel3.jpg') }}' }, 
            { id: 4, image: '{{ asset('assets/images/tamu/carousel4.jpg') }}' }
        ],
        loop(){
            setInterval(() => { this.activeSlide = this.activeSlide === 4 ? 1 : this.activeSlide + 1 }, 5000);
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
            <button @click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1" class="bg-slate-100 text-slate-500 hover:bg-red-500 hover:text-white transition font-bold rounded-full w-12 h-12 shadow text-center flex justify-center items-center -ml-16">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </button>
            <button @click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1" class="bg-slate-100 text-slate-500 hover:bg-red-500 hover:text-white transition font-bold rounded-full w-12 h-12 shadow text-center flex justify-center items-center -mr-16">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>

        <!-- Buttons -->
        <div class="absolute w-full flex items-center justify-center px-4">
            <template x-for="slide in slides" :key="slide.id">
                <button class="flex-1 w-4 h-2 mt-4 mx-2 mb-2 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-slate-600 hover:shadow-lg" :class="{
                    'bg-red-800': activeSlide === slide.id,
                    'bg-slate-300': activeSlide !== slide.id,
                }" @click="activeSlide = slide.id"></button>
            </template>
        </div>
    </div>

    <br><br><br>


    <!-- Service -->
    <div class="font-semibold pb-2 w-5/6 mx-auto text-center -mt-3">
        <div class="flex items-center justify-center">
            <div class="flex-1 h-0.5 bg-green-200"></div>
            <div class="px-4 text-green-400 text-2xl">S E R V I C E</div>
            <div class="flex-1 h-0.5 bg-green-200"></div>
        </div>
        <div class="px-4 mt-2">JAMINAN KAMI PADA ANDA</div>
        <br>
        <div class="flex justify-center mt-1 px-2">
            <div class="ml-40 mr-auto text-center"> <!-- Untuk gambar 1 -->
                <img src="assets/images/tamu/service1.png" alt="Gambar 1" class="w-32 h-32 object-cover">
                <div class="mt-3">Kirim di Hari yang Sama</div>
            </div>
            <div class="mx-4 text-center"> <!-- Untuk gambar 2 -->
                <img src="assets/images/tamu/service2.png" alt="Gambar 2" class="w-32 h-32 object-cover">
                <div class="mt-3">Pembayaran Aman</div>
            </div>
            <div class="ml-auto mr-40 text-center"> <!-- Untuk gambar 3 -->
                <img src="assets/images/tamu/service3.png" alt="Gambar 3" class="w-32 h-32 object-cover">
                <div class="mt-3">Pilihan Bunga Variatif</div>
            </div>
        </div>
    </div>
    <br><br><br>

    <!-- Kategori -->
    <div class="font-semibold pb-2 w-5/6 mx-auto text-center -mt-3">
        <div class="flex items-center justify-center">
            <div class="flex-1 h-0.5 bg-green-200"></div>
            <div class="px-4 text-green-400 text-2xl">K A T E G O R I</div>
            <div class="flex-1 h-0.5 bg-green-200"></div>
        </div>
        <div class="px-4 mt-4">RANGKAIAN UNTUK EVENT SPESIAL</div>
        <br>
        <div class="flex justify-center mt-2">
            <a href="#outdoor" class="ml-20 mr-auto text-center"> <!-- Untuk gambar 1 -->
                <div class="bg-gray-100 shadow-lg rounded-lg custom-card-size">
                    <img src="assets/images/outdoor/gambar 9 goeppertia.png" alt="Gambar 1" class="w-64 h-64 mx-auto -mt-1 object-scale-down">
                </div>
                <div class="mt-3">Outdoor</div>
            </a>
            <a href="#populer" class="mx-4 text-center"> <!-- Untuk gambar 2 -->
                <div class="bg-gray-100 shadow-lg rounded-lg custom-card-size">
                    <img src="assets/images/populer/gambar 1 monstera.png" alt="Gambar 2" class="w-64 h-64 mx-auto -mt-1 object-scale-down">
                </div>
                <div class="mt-3">Populer</div>
            </a>
            <a href="#indoor" class="ml-auto mr-20 text-center"><!-- Untuk gambar 3 -->
                <div class="bg-gray-100 shadow-lg rounded-lg custom-card-size">
                    <img src="assets/images/indoor/gambar 4 calla.png" alt="Gambar 3" class="w-64 h-64 mx-auto -mt-1 object-scale-down">
                </div>
                <div class="mt-3">Indoor</div>
            </a>
        </div>
    </div>


    <br><br><br>


    <!-- Populer -->
    <div class="font-semibold pb-2 w-5/6 mx-auto text-center -mt-3" id="populer">
        <div class="flex items-center justify-center">
            <div class="flex-1 h-0.5 bg-green-200"></div>
            <div class="px-4 text-green-400 text-2xl">P O P U L E R</div>
            <div class="flex-1 h-0.5 bg-green-200"></div>
        </div>
        <div class="px-2 mt-1">Saat ini kamu tertarik untuk menambah koleksi tanaman hias daun di
            <div class="px-2 mt-1">rumah agar terlihat lebih asri, berikut 6 rekomendasi tanaman hias
                <div class="px-2 mt-1">populer saat ini.</div>
                <br>
                <div class="grid grid-cols-3 gap-4 mt-4">
                    <div class="text-center"> <!-- Untuk gambar 1 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                            <img src="assets/images/populer/gambar 1 monstera.png" alt="Gambar 1" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3">Monstera Deliciosa</div>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 2 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                            <img src="assets/images/populer/gambar 2 caladium.png" alt="Gambar 2" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3">Watermelon Peperomia</div>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 3 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                            <img src="assets/images/populer/gambar 3 maranta.png" alt="Gambar 3" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3">Sansevieria Trifasciata</div>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 4 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                            <img src="assets/images/populer/gambar 4 lavender.png" alt="Gambar 4" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3">Cloropythum Comosum</div>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 5 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                            <img src="assets/images/populer/gambar 5 spathyphillum.png" alt="Gambar 5" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3">Spathipyllum Kochii</div>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 6 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                            <img src="assets/images/populer/gambar 6 watermelon.png" alt="Gambar 6" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3">Alocasia Amazonica</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>


    <!-- Outdoor -->
    <div class="font-semibold pb-2 w-5/6 mx-auto text-center -mt-3" id="outdoor">
        <div class="flex items-center justify-center">
            <div class="flex-1 h-0.5 bg-green-200"></div>
            <div class="px-4 text-green-400 text-2xl">O U T D O O R</div>
            <div class="flex-1 h-0.5 bg-green-200"></div>
        </div>
        <div class="px-2 mt-1"> Tanaman Hias Outdoor merupakan pilihan tepat untuk mempercantik
            <div class="px-2 mt-1">halaman. Warna hijau dan wanginya bunga dapat memberi kesegaran
                <div class="px-2 mt-1">tersendiri di ruang terbuka.</div>
                <br>
                <div class="grid grid-cols-3 gap-4 mt-4">
                    <div class="text-center"> <!-- Untuk gambar 1 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4 relative">
                            <img src="assets/icons/outdoor.png" alt="Icon" class="absolute w-20 h-20 -ml-4 -mt-3">
                            <img src="assets/images/outdoor/gambar 1 bromelia.png" alt="Gambar 1" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3 text-bold">Monstera Deliciosa</div>
                            <div class="mt-1">Rp. 230k</div>
                            <button class="absolute bottom-3 right-3 bg-green-400 bg-hover hover:bg-gray-300">
                                <img src="assets/icons/icon keranjang.png" alt="Icon" class="w-9 h-9 object-scale-down">
                            </button>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 2 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4 relative">
                            <img src="assets/icons/outdoor.png" alt="Icon" class="absolute w-20 h-20 -ml-4 -mt-3">
                            <img src="assets/images/outdoor/gambar 2 caladium.png" alt="Gambar 2" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3 text-bold">Monstera Deliciosa</div>
                            <div class="mt-1">Rp. 230k</div>
                            <button class="absolute bottom-3 right-3 bg-green-400 bg-hover hover:bg-gray-300">
                                <img src="assets/icons/icon keranjang.png" alt="Icon" class="w-9 h-9 object-scale-down">
                            </button>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 3 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4 relative">
                            <img src="assets/icons/outdoor.png" alt="Icon" class="absolute w-20 h-20 -ml-4 -mt-3">
                            <img src="assets/images/outdoor/gambar 3 lavender.png" alt="Gambar 1" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3 text-bold">Monstera Deliciosa</div>
                            <div class="mt-1">Rp. 230k</div>
                            <button class="absolute bottom-3 right-3 bg-green-400 bg-hover hover:bg-gray-300">
                                <img src="assets/icons/icon keranjang.png" alt="Icon" class="w-9 h-9 object-scale-down">
                            </button>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 4 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4 relative">
                            <img src="assets/icons/outdoor.png" alt="Icon" class="absolute w-20 h-20 -ml-4 -mt-3">
                            <img src="assets/images/outdoor/gambar 4 sansevieria.png" alt="Gambar 4" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3 text-bold">Monstera Deliciosa</div>
                            <div class="mt-1">Rp. 230k</div>
                            <button class="absolute bottom-3 right-3 bg-green-400 bg-hover hover:bg-gray-300">
                                <img src="assets/icons/icon keranjang.png" alt="Icon" class="w-9 h-9 object-scale-down">
                            </button>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 5 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4 relative">
                            <img src="assets/icons/outdoor.png" alt="Icon" class="absolute w-20 h-20 -ml-4 -mt-3">
                            <img src="assets/images/outdoor/gambar 5 monstera.png" alt="Gambar 5" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3 text-bold">Monstera Deliciosa</div>
                            <div class="mt-1">Rp. 230k</div>
                            <button class="absolute bottom-3 right-3 bg-green-400 bg-hover hover:bg-gray-300">
                                <img src="assets/icons/icon keranjang.png" alt="Icon" class="w-9 h-9 object-scale-down">
                            </button>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 6 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4 relative">
                            <img src="assets/icons/outdoor.png" alt="Icon" class="absolute w-20 h-20 -ml-4 -mt-3">
                            <img src="assets/images/outdoor/gambar 6 calathea.png" alt="Gambar 6" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3 text-bold">Monstera Deliciosa</div>
                            <div class="mt-1">Rp. 230k</div>
                            <button class="absolute bottom-3 right-3 bg-green-400 bg-hover hover:bg-gray-300">
                                <img src="assets/icons/icon keranjang.png" alt="Icon" class="w-9 h-9 object-scale-down">
                            </button>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 7 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4 relative">
                            <img src="assets/icons/outdoor.png" alt="Icon" class="absolute w-20 h-20 -ml-4 -mt-3">
                            <img src="assets/images/outdoor/gambar 7 cloropythum.png" alt="Gambar 7" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3 text-bold">Monstera Deliciosa</div>
                            <div class="mt-1">Rp. 230k</div>
                            <button class="absolute bottom-3 right-3 bg-green-400 bg-hover hover:bg-gray-300">
                                <img src="assets/icons/icon keranjang.png" alt="Icon" class="w-9 h-9 object-scale-down">
                            </button>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 8 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4 relative">
                            <img src="assets/icons/outdoor.png" alt="Icon" class="absolute w-20 h-20 -ml-4 -mt-3">
                            <img src="assets/images/outdoor/gambar 8 diefenbacia.png" alt="Gambar 8" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3 text-bold">Monstera Deliciosa</div>
                            <div class="mt-1">Rp. 230k</div>
                            <button class="absolute bottom-3 right-3 bg-green-400 bg-hover hover:bg-gray-300">
                                <img src="assets/icons/icon keranjang.png" alt="Icon" class="w-9 h-9 object-scale-down">
                            </button>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 9 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4 relative">
                            <img src="assets/icons/outdoor.png" alt="Icon" class="absolute w-20 h-20 -ml-4 -mt-3">
                            <img src="assets/images/outdoor/gambar 9 goeppertia.png" alt="Gambar 9" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3 text-bold">Monstera Deliciosa</div>
                            <div class="mt-1">Rp. 230k</div>
                            <button class="absolute bottom-3 right-3 bg-green-400 bg-hover hover:bg-gray-300">
                                <img src="assets/icons/icon keranjang.png" alt="Icon" class="w-9 h-9 object-scale-down">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>


    <!-- Indoor -->
    <div class="font-semibold pb-2 w-5/6 mx-auto text-center -mt-3" id="indoor">
        <div class="flex items-center justify-center">
            <div class="flex-1 h-0.5 bg-green-200"></div>
            <div class="px-4 text-green-400 text-2xl">I N D O O R</div>
            <div class="flex-1 h-0.5 bg-green-200"></div>
        </div>
        <div class="px-2 mt-1"> Tambahkan beberapa tanaman hias dalam ruangan untuk sudut rumah
            <div class="px-2 mt-1">jadi lebih asri. Selain memberikan kesan segar dan tidak monoton pada
                <div class="px-2 mt-1">ruangan, serta memberikan dampak positif bagi kesehatan.</div>
                <br>
                <div class="grid grid-cols-3 gap-4 mt-4">
                    <div class="text-center"> <!-- Untuk gambar 1 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4 relative">
                            <img src="assets/icons/indoor.png" alt="Icon" class="absolute w-20 h-20 -ml-4 -mt-3">
                            <img src="assets/images/indoor/gambar 1 alocasia.png" alt="Gambar 1" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3 text-bold">Monstera Deliciosa</div>
                            <div class="mt-1">Rp. 230k</div>
                            <button class="absolute bottom-3 right-3 bg-green-400 bg-hover hover:bg-gray-300">
                                <img src="assets/icons/icon keranjang.png" alt="Icon" class="w-9 h-9 object-scale-down">
                            </button>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 2 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4 relative">
                            <img src="assets/icons/indoor.png" alt="Icon" class="absolute w-20 h-20 -ml-4 -mt-3">
                            <img src="assets/images/indoor/gambar 2 spathyphillum.png" alt="Gambar 2" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3 text-bold">Monstera Deliciosa</div>
                            <div class="mt-1">Rp. 230k</div>
                            <button class="absolute bottom-3 right-3 bg-green-400 bg-hover hover:bg-gray-300">
                                <img src="assets/icons/icon keranjang.png" alt="Icon" class="w-9 h-9 object-scale-down">
                            </button>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 3 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4 relative">
                            <img src="assets/icons/indoor.png" alt="Icon" class="absolute w-20 h-20 -ml-4 -mt-3">
                            <img src="assets/images/indoor/gambar 3 anthurium.png" alt="Gambar 3" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3 text-bold">Monstera Deliciosa</div>
                            <div class="mt-1">Rp. 230k</div>
                            <button class="absolute bottom-3 right-3 bg-green-400 bg-hover hover:bg-gray-300">
                                <img src="assets/icons/icon keranjang.png" alt="Icon" class="w-9 h-9 object-scale-down">
                            </button>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 4 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4 relative">
                            <img src="assets/icons/indoor.png" alt="Icon" class="absolute w-20 h-20 -ml-4 -mt-3">
                            <img src="assets/images/indoor/gambar 4 calla.png" alt="Gambar 4" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3 text-bold">Monstera Deliciosa</div>
                            <div class="mt-1">Rp. 230k</div>
                            <button class="absolute bottom-3 right-3 bg-green-400 bg-hover hover:bg-gray-300">
                                <img src="assets/icons/icon keranjang.png" alt="Icon" class="w-9 h-9 object-scale-down">
                            </button>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 5 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4 relative">
                            <img src="assets/icons/indoor.png" alt="Icon" class="absolute w-20 h-20 -ml-4 -mt-3">
                            <img src="assets/images/indoor/gambar 5 maranta.png" alt="Gambar 5" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3 text-bold">Monstera Deliciosa</div>
                            <div class="mt-1">Rp. 230k</div>
                            <button class="absolute bottom-3 right-3 bg-green-400 bg-hover hover:bg-gray-300">
                                <img src="assets/icons/icon keranjang.png" alt="Icon" class="w-9 h-9 object-scale-down">
                            </button>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 6 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4 relative">
                            <img src="assets/icons/indoor.png" alt="Icon" class="absolute w-20 h-20 -ml-4 -mt-3">
                            <img src="assets/images/indoor/gambar 6 diefenbacia.png" alt="Gambar 6" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3 text-bold">Monstera Deliciosa</div>
                            <div class="mt-1">Rp. 230k</div>
                            <button class="absolute bottom-3 right-3 bg-green-400 bg-hover hover:bg-gray-300">
                                <img src="assets/icons/icon keranjang.png" alt="Icon" class="w-9 h-9 object-scale-down">
                            </button>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 7 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4 relative">
                            <img src="assets/icons/indoor.png" alt="Icon" class="absolute w-20 h-20 -ml-4 -mt-3">
                            <img src="assets/images/indoor/gambar 7 goeppertia.png" alt="Gambar 7" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3 text-bold">Monstera Deliciosa</div>
                            <div class="mt-1">Rp. 230k</div>
                            <button class="absolute bottom-3 right-3 bg-green-400 bg-hover hover:bg-gray-300">
                                <img src="assets/icons/icon keranjang.png" alt="Icon" class="w-9 h-9 object-scale-down">
                            </button>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 8 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4 relative">
                            <img src="assets/icons/indoor.png" alt="Icon" class="absolute w-20 h-20 -ml-4 -mt-3">
                            <img src="assets/images/indoor/gambar 8 watermelon.png" alt="Gambar 8" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3 text-bold">Monstera Deliciosa</div>
                            <div class="mt-1">Rp. 230k</div>
                            <button class="absolute bottom-3 right-3 bg-green-400 bg-hover hover:bg-gray-300">
                                <img src="assets/icons/icon keranjang.png" alt="Icon" class="w-9 h-9 object-scale-down">
                            </button>
                        </div>
                    </div>
                    <div class="text-center"> <!-- Untuk gambar 9 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4 relative">
                            <img src="assets/icons/indoor.png" alt="Icon" class="absolute w-20 h-20 -ml-4 -mt-3">
                            <img src="assets/images/indoor/gambar 9 croton.png" alt="Gambar 9" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3 text-bold">Monstera Deliciosa</div>
                            <div class="mt-1">Rp. 230k</div>
                            <button class="absolute bottom-3 right-3 bg-green-400 bg-hover hover:bg-gray-300">
                                <img src="assets/icons/icon keranjang.png" alt="Icon" class="w-9 h-9 object-scale-down">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>



    <!-- Review/Ulasan -->
    <div class="font-semibold w-5/6 mx-auto text-center">
        <div class="flex items-center justify-center">
            <div class="flex-1 h-0.5 bg-green-200"></div>
            <div class="px-4 text-green-400 text-2xl">U L A S A N</div>
            <div class="flex-1 h-0.5 bg-green-200"></div>
        </div>

        <div class="mx-auto max-w-[1340px] px-4 sm:px-6 lg:me-0 p-10 lg:pe-0 lg:ps-8">
            <div class="max-w-7xl items-end justify-between sm:flex sm:pe-6 lg:pe-8">

                <div class="mt-2 flex gap-4 lg:mt-0">
                    <button aria-label="Previous slide" id="keen-slider-previous" class="rounded-full border border-rose-600 p-3 text-rose-600 transition hover:bg-rose-600 hover:text-white">
                    </button>

                    <button aria-label="Next slide" id="keen-slider-next" class="rounded-full border border-rose-600 p-3 text-rose-600 transition hover:bg-rose-600 hover:text-white">
                    </button>
                </div>
            </div>

            <div class="-mx-6 mt-8 lg:col-span-2 lg:mx-0">
                <div id="keen-slider" class="keen-slider">
                    <div class="keen-slider__slide">
                        <blockquote class="flex h-full flex-col justify-between  p-6 shadow-sm sm:p-8 lg:p-12">
                            <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8 text-left">
                                <div class="flex items-center gap-4">
                                    <img alt="Customer 1" src="assets/images/tamu/customer1.jpg" class="size-14 rounded-full object-cover" />

                                    <div>
                                        <div class="flex justify-start gap-0.5 text-green-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>

                                        <p class="mt-0.5 text-lg font-medium text-gray-900">@haechanahceah</p>
                                    </div>
                                </div>

                                <p class="mt-4 text-gray-700">
                                    Tidur dulu ya ges cape nic kerja rodi.
                                </p>
                            </blockquote>
                        </blockquote>
                    </div>

                    <div class="keen-slider__slide">
                        <blockquote class="flex h-full flex-col justify-between p-6 shadow-sm sm:p-8 lg:p-12">
                            <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8 text-left">
                                <div class="flex items-center gap-4">
                                    <img alt="Customer 2" src="assets/images/tamu/customer2.jpg" class="size-14 rounded-full object-cover" />

                                    <div>
                                        <div class="flex justify-start gap-0.5 text-green-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>

                                        <p class="mt-0.5 text-lg font-medium text-gray-900">@yerimiese</p>
                                    </div>
                                </div>

                                <p class="mt-4 text-gray-700">
                                    Mangat teman teman kita pasti bisa.
                                </p>
                            </blockquote>
                        </blockquote>
                    </div>

                    <div class="keen-slider__slide">
                        <blockquote class="flex h-full flex-col justify-between  p-6 shadow-sm sm:p-8 lg:p-12">
                            <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8 text-left">
                                <div class="flex items-center gap-4">
                                    <img alt="Customer 3" src="assets/images/tamu/customer3.jpg" class="size-14 rounded-full object-cover" />

                                    <div>
                                        <div class="flex justify-start gap-0.5 text-green-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>

                                        <p class="mt-0.5 text-lg font-medium text-gray-900">@katarinabluu</p>
                                    </div>
                                </div>

                                <p class="mt-4 text-gray-700">
                                    Bisa gila maksudnya, belum kelar ngomong
                                </p>
                            </blockquote>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hubungi Kami -->
    <div class="font-semibold pb-2 w-8/9 mx-auto text-center -mt-3">
        <div class="flex items-center justify-center">
            <div class="flex-1 h-0.5 bg-green-200"></div>
            <div class="px-4 text-green-400 text-2xl">HUBUNGI KAMI</div>
            <div class="flex-1 h-0.5 bg-green-200"></div>
        </div>

        <h1 class="text-center font-semibold text-4xl mb-6 pt-5 text-slate-50"></h1>
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-green-800 w-4/5 mx-auto h-full rounded-xl p-7 text-serif text-white">
                <h1 class="text-left text-slate-50 font-bold text-4xl">Contact Us</h1>
                <p class="text-left text-white font-bold text-2xl mt-10">Info Kontak</p>
                <p class="text-left text-white font-serifbold text-xl mt-2">Senin - Selasa : 09.00 s/d 22.00</p>
                <p class="text-left text-white font-serifbold text-xl mt-1">Rabu - Jum'at : 12.00 s/d 20.00</p>
                <p class="text-left text-white font-serifbold text-xl mt-1">Sabtu : 15.00 s/d 21.00</p>
                <p class="text-left text-white font-serifbold text-xl mt-1 mb-20">Minggu : Tutup</p>
                <div class="flex my-3">
                    <img src="./assets/icons/lokasi.png" alt="" class="size-8 bg-green-300 rounded-full">
                    <h1 class="text-xl text-white mx-3">Batam Centre, Batam Indonesia</h1>
                </div>
                <div class="flex my-3">
                    <img src="./assets/icons/phone.png" alt="" class="size-8 bg-green-300 rounded-full">
                    <h1 class="text-xl text-white mx-3">Phone : +628 663 4988</h1>
                </div>
                <div class="flex my-3">
                    <img src="./assets/icons/sent.png" alt="" class="size-8 bg-green-300 rounded-full">
                    <h1 class="text-xl text-white mx-3">Email : Lushtilfy@gmail.com</h1>
                </div>
            </div>
            <img src="./assets/images/tamu/banner1.jpg" alt="" class="w-4/5 mx-auto h-full rounded-xl">
        </div>
        <br><br><br>
    </div>

    <!-- Footer -->
    <footer class="footer p-10 bg-[#7AA97B] text-neutral-content w-full">
        <nav class="max-w-7xl auto">
            <h6 class=" footer-title text-black">Tautan Langsung</h6>
            <a class="link link-hover text-black">Beranda</a>
            <a class="link link-hover text-black">Produk</a>
            <a class="link link-hover text-black">Ulasan</a>
            <a class="link link-hover text-black">Hubungi Kami</a>
        </nav>
        <nav>
            <h6 class="footer-title text-black">Kategori</h6>
            <a class="link link-hover text-black">Outdoor</a>
            <a class="link link-hover text-black">Indoor</a>
        </nav>
        <nav>
            <h6 class="footer-title text-black">Lokasi</h6>
            <a class="link link-hover text-black">Batam</a>
        </nav>
        <nav>
            <h6 class="footer-title text-black">Kontak Kami</h6>
            <a class="link link-hover text-black">+628-663-4988</a>
            <a class="link link-hover text-black">lushtilvy@gmail.com</a>
        </nav>
    </footer>


    <script type="module">
        import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm';

        '#keen-slider', {
            loop: true,
            slidesPerView: 1,
            spacing: 16,
        }



        keenSliderPrevious.addEventListener('click', () => keenSlider.prev());
        keenSliderNext.addEventListener('click', () => keenSlider.next());
    </script>

    <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />

    <script type="module">
        import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'

        const keenSlider = new KeenSlider(
            '#keen-slider', {
                loop: true,
                slides: {
                    origin: 'center',
                    perView: 1.25,
                    spacing: 16,
                },
                breakpoints: {
                    '(min-width: 1024px)': {
                        slides: {
                            origin: 'auto',
                            perView: 2.5,
                            spacing: 32,
                        },
                    },
                },
            },
            []
        )

        const keenSliderPrevious = document.getElementById('keen-slider-previous')
        const keenSliderNext = document.getElementById('keen-slider-next')

        keenSliderPrevious.addEventListener('click', () => keenSlider.prev())
        keenSliderNext.addEventListener('click', () => keenSlider.next())
    </script>
</body>

</html>

<div class="fixed bottom-0 w-full bg-white border-t-2 border-white-900">
        <div class="container mx-auto p-0 my-2">
            <table class="w-full mb-0">
                <thead class="align-middle">
                    <tr>
                        <th class="text-blue-900 text-xl" >
                            <input class="form-check-input -ml-1 " id="pilih_semua_checkbox" type="checkbox">
                            Pilih Semua 
                        </th>
                        <!-- <th class="text-2xl text-blue-900" style="width: 400px" colspan="2">
                            Pilih Semua 
                        </th> -->
                        <th class="text-2xl text-blue-900 " colspan="2">
                            Total (<span id="jumlah_produk">0</span> Produk)
                        </th>
                        <th class="text-right text-xl text-blue-900 -mr-10" id="total_harga_akhir">
                            Rp0
                        </th>
                        <th class="">
                            <button class="btn btn-lg text-xl font-semibold bg-blue-700 text-white" type="submit">
                            Periksa
                            </button>
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>



    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/9abb4e3af2.js" crossorigin="anonymous"></script>

    <style>
        .product-row {
            display: flex;
            align-items: center;
        }

        .product-info {
            display: flex;
            align-items: center;
            flex: 6;
            position: relative;
        }

        .product-details {
            display: flex;
            flex-direction: column;
            margin-left: 60px;
        }

        .product-quantity {
            margin-right: 105px;
        }

        .product-price {
            margin-right: 60px;
        }

        .product-total {
            margin-right: 100px;
        }

    </style>
</head>

<body class="bg-[#618264] h-full pb-5">
    <div class="navbar bg-white sticky top-0 grid grid-cols-2 text-black text-3xl font-bold"
        style="position: sticky; z-index: 1000; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
        <a href="{{ route('dashboard')}}" class="btn btn-ghost me-auto hover:bg-white mx-5">
            <img src="./assets/images/tamu/logo.png" alt="" class="size-14 mb-5 -mt-1 object-scale-down" />
            <p class="text-2xl text-[#78A07C] mb-6 text-bold">Lushtilvy</p>
        </a>
        <div class="ms-auto">
            <a href="/keranjang" class="btn btn-ghost hover:bg-white">
                <img src="./assets/icons/navbar keranjang.png" alt="" class="w-12" />
                <p class="text-2xl text-[#78A07C]">Keranjang</p>
            </a>
            <a href="/riwayat_pesanan" class="btn btn-ghost hover:bg-white">
                <img src="./assets/icons/navbar pesanan.png" alt="" class="w-12" />
                <p class="text-2xl text-[#78A07C]">Pesanan</p>
            </a>
            <a href="{{ route('profile.index') }}" class="btn btn-ghost hover:bg-white">
                <img src="./assets/icons/user1.png" alt="" class="w-10" />
                <p class="text-2xl text-[#78A07C]">Profil</p>
            </a>
            <div class="border-l-4 border-black">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="btn btn-ghost">
                        <img src="/assets/icons/logout.png" alt="" class="w-10" />
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="bg-green-600 p-5 mt-5 ml-16 flex w-full max-w-6xl rounded-lg relative">
            <p class="text-white text-xl w-1/4 text-center">Produk</p>
            <div class="w-1/3 relative">
                <p class="text-white text-xl text-center absolute left-14">Nama</p>
            </div>
            <p class="text-white text-xl w-1/3 text-center">Jumlah</p>
            <p class="text-white text-xl w-1/6 text-center">Harga</p>
            <p class="text-white text-xl w-1/4 text-center">Total</p>
            <p class="text-white text-xl w-1/6 text-center">Aksi</p>
        </div>

        @foreach($keranjang as $item)
        <div class="product-row mt-4 ml-16">
            <div class="product-info">
                <input type="checkbox" class="form-checkbox text-green-600 rounded rounded -mt-32 ml-4" />
                <div class="product-pict">
                    <img src="/assets/images/tambahproduk/{{$item->produk->gambar}}" alt="foto produk"
                        class="ml-2 w-40 h-40" />
                </div>

                <div class="product-details">
                    <p class="text-white text-xl product-name">{{ $item->produk->nama }}</p>
                    <p class="text-white">{{ $item->produk->kategori }}</p>
                </div>
            </div>
            <div class="flex items-center space-x-2 product-quantity">
                <svg class="w-6 h-6 text-white cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24"
                    onclick="decreaseQuantity({{ $item->id_keranjang }}) ">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <span class="mx-5 text-white" id="quantity-{{ $item->id_keranjang }}">{{ $item->jumlah }}</span>
                <svg class="w-6 h-6 text-white cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24"
                    onclick="increaseQuantity({{ $item->id_keranjang }})">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </div>

            <p class="text-white text-xl product-price">Rp{{ number_format($item->produk->harga, 0, ',', '.') }}</p>
            <p class="text-white text-xl product-total">Rp{{ number_format($item->produk->harga, 0, ',', '.') }}</p>
            <form action="{{ route('keranjang.hapus', $item->id_keranjang) }}" method="POST">

                @csrf
                @method('DELETE')
                <svg class="w-6 h-6 text-white dark:text-white mr-32" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                </svg>
            </form>
        </div>
        <hr class="mt-4 ml-16 mb-20">
        @endforeach
    </div>

    <div class="fixed bottom-0 w-full bg-white border-t-2 border-white-900">
        <div class="container mx-auto p-0 my-2">
            <table class="w-full mb-0">
                <thead class="align-middle relative">
                    <tr>
                        <th class="text-blue-900 text-xl absolute left-20 top-5 ">
                            <input class="form-check-input -ml-1 " id="pilih_semua_checkbox" type="checkbox">
                            Pilih Semua
                        </th>
                        <!-- <th class="text-2xl text-blue-900" style="width: 400px" colspan="2">
                            Pilih Semua 
                        </th> -->
                        <th class="text-2xl text-blue-900 pl-96" colspan="2">
                            Total (<span id="jumlah_produk">0</span> Produk)
                        </th>
                        <th class="text-right text-xl text-blue-900 absolute right-60 top-5" id="total_harga_akhir">
                            Rp43
                        </th>
                        <th class="">
                            <button class="btn btn-lg text-xl font-semibold bg-blue-700 text-white w-25 mr-5 "
                                type="submit">
                                Periksa
                            </button>
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>


    <script>
        function increaseQuantity(cartItemId) {
            const quantitySpan = document.getElementById(`quantity-${cartItemId}`);
            let quantity = parseInt(quantitySpan.textContent);
            quantitySpan.textContent = quantity + 1;

            // You can add AJAX call here to update the server-side quantity
        }

        function decreaseQuantity(cartItemId) {
            const quantitySpan = document.getElementById(`quantity-${cartItemId}`);
            let quantity = parseInt(quantitySpan.textContent);
            if (quantity > 1) {
                quantitySpan.textContent = quantity - 1;
            }

            // You can add AJAX call here to update the server-side quantity
        }

        function hitung_total_harga(event) {

            var trigger_element = event.target;

            var row = trigger_element.closest("tr");
            var jumlah_element = row.querySelector(".jumlah");
            var harga_element = row.querySelector(".harga");
            var total_harga_element = row.querySelector(".total_harga");

            var jumlah = parseFloat(jumlah_element.value);
            var harga = parseFloat(harga_element.getAttribute("data_harga"));
            var total_harga = jumlah * harga;

            total_harga_element.innerHTML = "Rp" + total_harga.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");

            update_total();
        }

        var jumlah_elements = document.querySelectorAll(".jumlah");
        jumlah_elements.forEach(function (element) {
            element.addEventListener("input", hitung_total_harga);
        });

        function update_total() {
            var checkboxes = document.querySelectorAll(".check_tunggal");
            var jumlah_produk = 0;
            var total_harga_akhir = 0;

            checkboxes.forEach(function (checkbox) {
                var row = checkbox.closest("tr");
                var is_checked = checkbox.checked;
                var jumlah_element = row.querySelector(".jumlah");
                var harga_element = row.querySelector(".harga");

                if (is_checked) {
                    var jumlah = parseFloat(jumlah_element.value);
                    var harga = parseFloat(harga_element.getAttribute("data_harga"));
                    total_harga_akhir += jumlah * harga;
                    jumlah_produk++;
                }
            });

            var pilih_semua_checkbox = document.querySelector("#pilih_semua_checkbox");
            pilih_semua_checkbox.checked = jumlah_produk === checkboxes.length;

            var jumlah_produk_element = document.querySelector("#jumlah_produk");
            var total_harga_akhir_element = document.querySelector("#total_harga_akhir");

            jumlah_produk_element.innerHTML = jumlah_produk;
            total_harga_akhir_element.innerHTML = "Rp" + total_harga_akhir.toString().replace(/\B(?=(\d{3})+(?!\d))/g,
                ".");
        }

        function handle_checkbox_change(event) {
            var checkbox = event.target;
            var is_checked = checkbox.checked;

            update_total();
        }

        var checkboxes = document.querySelectorAll(".check_tunggal");
        checkboxes.forEach(function (checkbox) {
            checkbox.addEventListener("change", handle_checkbox_change);
        });

        function handle_pilih_semua_change(event) {
            var pilih_semua_checkbox = event.target;
            var is_checked = pilih_semua_checkbox.checked;

            checkboxes.forEach(function (checkbox) {
                checkbox.checked = is_checked;
            });

            update_total();
        }

        var pilih_semua_checkbox = document.querySelector("#pilih_semua_checkbox");
        pilih_semua_checkbox.addEventListener("change", handle_pilih_semua_change);

    </script>

</body>

</html>

<!-- keranjang baru -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/9abb4e3af2.js" crossorigin="anonymous"></script>

    <style>
        .product-row {
            display: flex;
            align-items: center;
        }

        .product-info {
            display: flex;
            align-items: center;
            flex: 6;
            position: relative;
        }

        .product-details {
            display: flex;
            flex-direction: column;
            margin-left: 60px;
        }

        .product-quantity {
            margin-right: 105px;
        }

        .product-price {
            margin-right: 60px;
        }

        .product-total {
            margin-right: 100px;
        }

    </style>
</head>

<body class="bg-[#618264] h-full pb-5">
    <div class="navbar bg-white sticky top-0 grid grid-cols-2 text-black text-3xl font-bold"
        style="position: sticky; z-index: 1000; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
        <a href="{{ route('dashboard')}}" class="btn btn-ghost me-auto hover:bg-white mx-5">
            <img src="./assets/images/tamu/logo.png" alt="" class="size-14 mb-5 -mt-1 object-scale-down" />
            <p class="text-2xl text-[#78A07C] mb-6 text-bold">Lushtilvy</p>
        </a>
        <div class="ms-auto">
            <a href="/keranjang" class="btn btn-ghost hover:bg-white">
                <img src="./assets/icons/navbar keranjang.png" alt="" class="w-12" />
                <p class="text-2xl text-[#78A07C]">Keranjang</p>
            </a>
            <a href="/riwayat_pesanan" class="btn btn-ghost hover:bg-white">
                <img src="./assets/icons/navbar pesanan.png" alt="" class="w-12" />
                <p class="text-2xl text-[#78A07C]">Pesanan</p>
            </a>
            <a href="{{ route('profile.index') }}" class="btn btn-ghost hover:bg-white">
                <img src="./assets/icons/user1.png" alt="" class="w-10" />
                <p class="text-2xl text-[#78A07C]">Profil</p>
            </a>
            <div class="border-l-4 border-black">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="btn btn-ghost">
                        <img src="/assets/icons/logout.png" alt="" class="w-10" />
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="bg-green-600 p-5 mt-5 ml-16 flex w-full max-w-6xl rounded-lg relative">
            <p class="text-white text-xl w-1/4 text-center">Produk</p>
            <div class="w-1/3 relative">
                <p class="text-white text-xl text-center absolute left-14">Nama</p>
            </div>
            <p class="text-white text-xl w-1/3 text-center">Jumlah</p>
            <p class="text-white text-xl w-1/6 text-center">Harga</p>
            <p class="text-white text-xl w-1/4 text-center">Total</p>
            <p class="text-white text-xl w-1/6 text-center">Aksi</p>
        </div>

        @foreach($keranjang as $item)
        <div class="product-row mt-4 ml-16">
            <div class="product-info">
                <input type="checkbox" class="form-checkbox text-green-600 rounded check_tunggal -mt-32 ml-4" />
                <div class="product-pict">
                    <img src="/assets/images/tambahproduk/{{$item->produk->gambar}}" alt="foto produk"
                        class="ml-2 w-40 h-40" />
                </div>

                <div class="product-details">
                    <p class="text-white text-xl product-name">{{ $item->produk->nama }}</p>
                    <p class="text-white">{{ $item->produk->kategori }}</p>
                </div>
            </div>
            <div class="flex items-center space-x-2 product-quantity">
                <svg class="w-6 h-6 text-white cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24"
                    onclick="decreaseQuantity({{ $item->id_keranjang }}) ">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <span class="mx-5 text-white jumlah" id="quantity-{{ $item->id_keranjang }}">{{ $item->jumlah }}</span>
                <svg class="w-6 h-6 text-white cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24"
                    onclick="increaseQuantity({{ $item->id_keranjang }})">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </div>

            <p class="text-white text-xl product-price harga" data_harga="{{ $item->produk->harga }}">Rp{{ number_format($item->produk->harga, 0, ',', '.') }}</p>
            <p class="text-white text-xl product-total total_harga absolute right-2">Rp{{ number_format($item->produk->harga * $item->jumlah, 0, ',', '.') }}</p>
            <form action="{{ route('keranjang.hapus', $item->id_keranjang) }}" method="POST">

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-ghost">
                    <svg class="w-6 h-6 text-white dark:text-white mr-32" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                    </svg>
                </button>
            </form>
        </div>
        <hr class="mt-4 ml-16 mb-20">
        @endforeach
    </div>

    <div class="fixed bottom-0 w-full bg-white border-t-2 border-white-900">
        <div class="container mx-auto p-0 my-2">
            <table class="w-full mb-0">
                <thead class="align-middle relative">
                    <tr>
                        <th class="text-blue-900 text-xl absolute left-20 top-5 ">
                            <input class="form-check-input -ml-1" id="pilih_semua_checkbox" type="checkbox">
                            Pilih Semua
                        </th>
                        <th class="text-2xl text-blue-900 pl-96" colspan="2">
                            Total (<span id="jumlah_produk">0</span> Produk)
                        </th>
                        <th class="text-right text-xl text-blue-900 absolute right-60 top-5" id="total_harga_akhir">
                            Rp0
                        </th>
                        <th class="">
                            <button class="btn btn-lg text-xl font-semibold bg-blue-700 text-white w-25 mr-5"
                                type="submit">
                                Periksa
                            </button>
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>


    <script>
        function increaseQuantity(cartItemId) {
            const quantitySpan = document.getElementById(`quantity-${cartItemId}`);
            let quantity = parseInt(quantitySpan.textContent);
            quantitySpan.textContent = quantity + 1;

            const hargaElement = quantitySpan.closest('.product-row').querySelector('.harga');
            const totalElement = quantitySpan.closest('.product-row').querySelector('.total_harga');
            const harga = parseFloat(hargaElement.getAttribute('data_harga'));
            totalElement.textContent = 'Rp' + ((quantity + 1) * harga).toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ".");

            update_total();
        }

        function decreaseQuantity(cartItemId) {
            const quantitySpan = document.getElementById(`quantity-${cartItemId}`);
            let quantity = parseInt(quantitySpan.textContent);
            if (quantity > 1) {
                quantitySpan.textContent = quantity - 1;

                const hargaElement = quantitySpan.closest('.product-row').querySelector('.harga');
                const totalElement = quantitySpan.closest('.product-row').querySelector('.total_harga');
                const harga = parseFloat(hargaElement.getAttribute('data_harga'));
                totalElement.textContent = 'Rp' + ((quantity - 1) * harga).toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }

            update_total();
        }

        function update_total() {
            const checkboxes = document.querySelectorAll(".check_tunggal");
            let jumlah_produk = 0;
            let total_harga_akhir = 0;

            checkboxes.forEach(function (checkbox) {
                const row = checkbox.closest(".product-row");
                const is_checked = checkbox.checked;
                const quantityElement = row.querySelector(".jumlah");
                const hargaElement = row.querySelector(".harga");

                if (is_checked) {
                    const quantity = parseInt(quantityElement.textContent);
                    const harga = parseFloat(hargaElement.getAttribute("data_harga"));
                    total_harga_akhir += quantity * harga;
                    jumlah_produk++;
                }
            });

            const pilih_semua_checkbox = document.querySelector("#pilih_semua_checkbox");
            pilih_semua_checkbox.checked = jumlah_produk === checkboxes.length;

            const jumlah_produk_element = document.querySelector("#jumlah_produk");
            const total_harga_akhir_element = document.querySelector("#total_harga_akhir");

            jumlah_produk_element.innerHTML = jumlah_produk;
            total_harga_akhir_element.innerHTML = "Rp" + total_harga_akhir.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        function handle_checkbox_change(event) {
            update_total();
        }

        const checkboxes = document.querySelectorAll(".check_tunggal");
        checkboxes.forEach(function (checkbox) {
            checkbox.addEventListener("change", handle_checkbox_change);
        });

        function handle_pilih_semua_change(event) {
            const pilih_semua_checkbox = event.target;
            const is_checked = pilih_semua_checkbox.checked;

            checkboxes.forEach(function (checkbox) {
                checkbox.checked = is_checked;
            });

            update_total();
        }

        const pilih_semua_checkbox = document.querySelector("#pilih_semua_checkbox");
        pilih_semua_checkbox.addEventListener("change", handle_pilih_semua_change);
    </script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#6D896B] h-full">
    <!-- Navbar -->
    <div class="navbar bg-white sticky top-0 grid grid-cols-2 text-black text-3xl font-bold"
        style="
                position: sticky;
                z-index: 1000;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
            ">
        <a href="" class="btn btn-ghost me-auto hover:bg-white mx-5">

            <img src="{{ asset('assets/images/tamu/logo.png') }}" alt="" class="size-14 mb-5 -mt-1 object-scale-down" />

            <p class="text-2xl text-[#78A07C] mb-6 text-bold">Lushtilvy</p>
        </a>
        <div class="ms-auto">
            <a href="/keranjang" class="btn btn-ghost hover:bg-white">
                <img src="{{ asset('assets/icons/navbar keranjang.png') }}" alt="" class="w-12" />
                <p class="text-2xl text-[#78A07C]">Keranjang</p>
            </a>
            <a href="/riwayat_pesanan" class="btn btn-ghost hover:bg-white">
                <img src="{{ asset('assets/icons/navbar pesanan.png') }}" alt="" class="w-12" />
                <p class="text-2xl text-[#78A07C]">Pesanan</p>
            </a>
            <a href="{{ route('profile.index') }}" class="btn btn-ghost hover:bg-white">
                <img src="{{ asset('assets/icons/user1.png') }}" alt="" class="w-10" />
                <p class="text-2xl text-[#78A07C]">Profil</p>
            </a>
            <div class="border-l-4 border-black">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="btn btn-ghost">
                        <img src="{{ asset('assets/icons/logout.png') }}" alt="" class="w-10" />
                    </button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="container mx-8">
        @if ($resi->alamat != null)
        <div class="flex justify-between items-start mb-2">
            <p class="text-2xl text-black font-bold">Alamat Pengiriman</p>
            <a href="/alamat/{{ $resi->id }}" class="btn bg-[#00A651] border-none mt-3 w-44 text-xl text-white mb-5">Ubah</a>
        </div>
        <p class="text-white">{{ $resi->nama_penerima }},</p>
        <p class="text-white">{{ $resi->username }}</p>
        <p class="text-white">{{ $resi->alamat }}</p>
        <p class="text-white">{{ $resi->kecamatan }}, {{ $resi->kode_pos }}</p>
        <p class="text-white">{{ $resi->no_hp }}</p>
        <hr class="w-full border-b-2 border-white mt-2">
        @else
        <p class="text-2xl text-black font-bold mb-4">Alamat Pengiriman</p>
        <a href="/alamat/{{ $resi->id }}" class="btn bg-[#00A651] border-none mt-3 w-44 text-xl text-white mb-5">Tambah Alamat</a>
        <hr class="w-full border-b-2 border-white mb-2">
        @endif
        @php
        $total = 0;
        @endphp
        @foreach ($resi->pesanan as $item)
        <div class="grid grid-cols-5 my-5">
            <div class="w-48 rounded-xl ml-10">
                <img src="{{ asset('assets/images/tambahproduk/'.$item->produk->gambar) }}" alt="">
            </div>
            <div class="col-span-4">
                <h1 class="text-2xl text-[#C1D1C0]">{{ $item->produk->nama }}</h1>
                <h1 class="text-2xl text-black">Rp. {{ number_format($item->harga_satuan * $item->jumlah) }}</h1>
                <h1 class="text-2xl text-black text-end mt-14">{{ $item->jumlah }}x</h1>
            </div>
        </div>
        <hr class="w-full border-b-2 border-white mb-2">
        @php
        $total += $item->harga_satuan * $item->jumlah;
        @endphp

        @endforeach

        <div class="grid grid-cols-5">
            <h1 class="text-white text-xl font-bold">Total Pembayaran</h1>
            <div class="col-span-3">
                <h1 class="text-2xl text-[#51EC4E]">Rp. {{ number_format($total) }}</h1>
            </div>
        </div>
        <form action="/submit-pembayaran/{{ $resi->id }}" method="post">
            @csrf
            <div class="grid grid-cols-5 my-5">
                <div class="col-span-2">
                    <h1 class="text-gray-300 text-xl mb-1">METODE PEMBAYARAN</h1>

                    <select name="metode_pembayaran" id="" class="w-4/6 h-10 text-2xl bg-white text-black border border-4 border-green-400">

                        <option selected disabled hidden></option>
                        <option value="Transfer Bank">Transfer Bank</option>
                        <option value="Bayar di Tempat">Bayar di Tempat</option>
                    </select>
                </div>
                <div class="col-span-3">
                    <h1 class="text-gray-300 text-xl mb-1">PESAN UNTUK PENERIMA (OPSIONAL)</h1>

                    <textarea class="w-full bg-white text-black resize-none border border-4 border-green-400" name="pesan" id="" rows="3"></textarea>

                </div>
            </div>
            <div class="grid grid-cols-2 items-center">
                <a href="" class="text-2xl text-black font-bold">

                    <img src="{{ asset('assets/icons/kembali.png') }}" alt="" class="inline size-5 mb-1 ml-1">Kembali

                </a>
                <button type="submit" class="btn bg-green-600 text-xl my-3 text-white border-none w-2/5 ms-auto">BAYAR
                    SEKARANG</button>
            </div>
        </form>
</body>

</html>

<form action="/submit-alamat/{{ $resi->id }}" method="post">
        <div class="w-full flex flex-col items-center pb-5 ">
            @csrf
            <h1 class="text-center text-white text-4xl font-bold mt-4 mb-4">Alamat Pengiriman</h1>

            <input type="text" class="bg-white border-[#51EC4E] border p-3 w-5/6 mx-auto block mb-4" placeholder="Nama Lengkap" name="nama_penerima" value="{{ $user->nama }}" readonly>

            <input type="text" class="bg-white border-[#51EC4E] border p-3 w-5/6 mx-auto block mb-4" placeholder="Username" name="username" value="{{ $user->email }}" readonly>

            <input type="text" class="bg-white border-[#51EC4E] border p-3 w-5/6 mx-auto block mb-4" placeholder="Contoh: +6285-0000-1111" name="no_hp" value="{{ $user->nomor_hp }}" readonly>

            <select class="bg-white border-[#51EC4E] border p-3 w-5/6 mx-auto block mb-4" name="tujuan">
                <option value="" disabled selected>Pilih Tujuan Pengiriman</option>
                <option value="Rumah" {{ $resi->tujuan && $resi->tujuan == 'Rumah' ? 'selected' : '' }}>Rumah</option>
                <option value="Kantor" {{ $resi->tujuan && $resi->tujuan == 'Kantor' ? 'selected' : '' }}>Kantor
                </option>
            </select>

            <input type="text" class="bg-white border-[#51EC4E] border p-10 w-5/6 mx-auto block text-left pl-5 pt-3 mb-4" placeholder="Alamat Lengkap" name="alamat" value="{{ $resi->alamat ? $resi->alamat : '' }}">

            <div class="flex space-x-20 w-5/6 mx-auto mb-4">
                <select class="bg-white border-[#51EC4E] border p-3 w-1/2 mx-auto block" name="kecamatan">
                    <option disabled selected>Pilih Kecamatan</option>
                    <option value="Batam Kota" {{ $resi->kecamatan && $resi->kecamatan == 'Batam Kota' ? 'selected' : '' }}>Batam Kota
                    </option>
                    <option value="Batu Aji" {{ $resi->kecamatan && $resi->kecamatan == 'Batu Aji' ? 'selected' : '' }}>Batu Aji</option>
                    <option value="Batu Ampar" {{ $resi->kecamatan && $resi->kecamatan == 'Batu Ampar' ? 'selected' : '' }}>Batu Ampar
                    </option>
                    <option value="Bengkong" {{ $resi->kecamatan && $resi->kecamatan == 'Bengkong' ? 'selected' : '' }}>Bengkong</option>
                    <option value="Nongsa" {{ $resi->kecamatan && $resi->kecamatan == 'Nongsa' ? 'selected' : '' }}>
                        Nongsa</option>
                    <option value="Sekupang" {{ $resi->kecamatan && $resi->kecamatan == 'Sekupang' ? 'selected' : '' }}>Sekupang</option>
                </select>
                <input type="text" class="bg-white border-[#51EC4E] border p-3 w-1/2 mx-auto block" placeholder="Kode Pos" name="kode_pos" value="{{ $resi->kode_pos ? $resi->kode_pos : '' }}">
            </div>

            <button type="submit" class="bg-[#00A651] hover:bg-green-800 text-white font-bold p-3 w-5/6 mx-auto block text-xl">SIMPAN</button>
        </div>
    </form>
