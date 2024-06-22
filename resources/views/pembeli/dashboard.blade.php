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
            background-image: url('assets/images/tamu/background2.jpg');
            background-size: contain;
            background-position: center;
            background-attachment: scroll;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-[#6D896B] h-full">
    <!-- Navbar -->
    <div class="navbar bg-white sticky top-0 grid grid-cols-2 text-black text-3xl font-bold" style="
                position: sticky;
                z-index: 1000;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
            ">
        <a href="" class="btn btn-ghost me-auto hover:bg-white mx-5">
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

    <br />

    <!-- Carousel -->
    <div class="max-w-5xl mx-auto relative z-10" x-data="{
        activeSlide: 1,
        slides: [
            { id: 1, image: '{{
                asset('assets/images/tamu/carousel1.jpg')
            }}' }, 
            { id: 2, image: '{{
                asset('assets/images/tamu/carousel2.jpg')
            }}' }, 
            { id: 3, image: '{{
                asset('assets/images/tamu/carousel3.jpg')
            }}' }, 
            { id: 4, image: '{{ 
            asset('assets/images/tamu/carousel4.jpg') }}' }
        ],
        loop(){
            setInterval(() => { this.activeSlide = this.activeSlide === 4 ? 1 : this.activeSlide + 1 }, 5000);
        }
    }" x-init="loop">
        <!-- Data Loop -->
        <template x-for="slide in slides" :key="slide.id">
            <div x-show="activeSlide === slide.id" class="h-80 flex items-center rounded-lg overflow-hidden">
                <img :src="slide.image" alt="Slide Image" class="w-full h-auto" />
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
            <div class="flex-1 h-0.5 bg-[#78A07C]"></div>
            <div class="px-4 text-[#78A07C] text-2xl">S E R V I C E</div>
            <div class="flex-1 h-0.5 bg-[#78A07C]"></div>
        </div>
        <div class="px-4 mt-2 text-[#423F45]">JAMINAN KAMI PADA ANDA</div>
        <br>
        <div class="flex justify-center mt-1 px-2">
            <div class="ml-40 mr-auto text-center">
                <!-- Untuk gambar 1 -->
                <img src="assets/images/tamu/service1.png" alt="Gambar 1" class="w-32 h-32 object-cover">
                <div class="mt-3 -ml-5 text-[#423F45]">Kirim di Hari yang Sama</div>
            </div>
            <div class="mx-4 text-center">
                <!-- Untuk gambar 2 -->
                <img src="assets/images/tamu/service2.png" alt="Gambar 2" class="w-32 h-32 object-cover">
                <div class="mt-3 text-[#423F45]">Pembayaran Aman</div>
            </div>
            <div class="ml-auto mr-40 text-center">
                <!-- Untuk gambar 3 -->
                <img src="assets/images/tamu/service3.png" alt="Gambar 3" class="w-32 h-32 object-cover">
                <div class="mt-3 -ml-3 text-[#423F45]">Pilihan Bunga Variatif</div>

                </button>
                </template>
            </div>
        </div>
    </div>

    <br><br><br>

    <!-- Kategori -->
    <div class="font-semibold pb-2 w-5/6 mx-auto text-center -mt-3">
        <div class="flex items-center justify-center">
            <div class="flex-1 h-0.5 bg-[#78A07C]"></div>
            <div class="px-4 text-[#78A07C] text-2xl">K A T E G O R I</div>
            <div class="flex-1 h-0.5 bg-[#78A07C]"></div>
        </div>
        <div class="px-4 mt-2 text-[#423F45]">RANGKAIAN UNTUK EVENT SPESIAL</div>
        <br>
        <div class="flex justify-center mt-2">
            <a href="#outdoor" class="ml-20 mr-auto text-center">
                <!-- Untuk gambar 1 -->
                <div class="bg-gray-100 shadow-lg rounded-lg custom-card-size shadow-card" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <img src=" assets/images/outdoor/gambar 9 goeppertia.png" alt="Gambar 1" class="w-64 h-64 mx-auto -mt-1 object-scale-down">
                </div>
                <div class="mt-3 text-[#423F45]">Outdoor</div>
            </a>
            <a href="#populer" class="mx-4 text-center">
                <!-- Untuk gambar 2 -->
                <div class="bg-gray-100 shadow-lg rounded-lg custom-card-size shadow-card" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <img src=" assets/images/populer/gambar 1 monstera.png" alt="Gambar 2" class="w-64 h-64 mx-auto -mt-1 object-scale-down">
                </div>
                <div class="mt-3 text-[#423F45]">Populer</div>
            </a>
            <a href="#indoor" class="ml-auto mr-20 text-center">
                <!-- Untuk gambar 3 -->
                <div class="bg-gray-100 shadow-lg rounded-lg custom-card-size" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <img src="assets/images/indoor/gambar 4 calla.png" alt="Gambar 3" class="w-64 h-64 mx-auto -mt-1 object-scale-down">
                </div>
                <div class="mt-3 text-[#423F45]">Indoor</div>
            </a>
        </div>
    </div>

    <br><br><br>

    <!-- Populer -->
    <div class="font-semibold pb-2 w-5/6 mx-auto text-center -mt-3">
        <div class="flex items-center justify-center">
            <div class="flex-1 h-0.5 bg-[#78A07C]"></div>
            <div class="px-4 text-[#78A07C] text-2xl" id="populer">P O P U L E R</div>
            <div class="flex-1 h-0.5 bg-[#78A07C]"></div>
        </div>
        <div class="px-2 mt-1 text-[#423F45]">Saat ini kamu tertarik untuk menambah koleksi tanaman hias daun di
            <div class="px-2 mt-1 text-[#423F45]">rumah agar terlihat lebih asri, berikut 6 rekomendasi tanaman hias
                <div class="px-2 mt-1 text-[#423F45]">populer saat ini.</div>
                <br>
                <div class="grid grid-cols-3 gap-4 mt-4">
                    <div class="text-center">
                        <!-- Untuk gambar 1 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4">
                            <img src="assets/images/populer/gambar 1 monstera.png" alt="Gambar 1" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3">Monstera Deliciosa</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <br><br><br>



    <!-- Outdoor -->
    <div class="font-semibold pb-2 w-5/6 mx-auto text-center -mt-3">
        <div class="flex items-center justify-center">
            <div class="flex-1 h-0.5 bg-[#78A07C]"></div>
            <div class="px-4 text-[#78A07C] text-2xl" id="outdoor">O U T D O O R</div>
            <div class="flex-1 h-0.5 bg-[#78A07C]"></div>
        </div>
        <div class="px-2 mt-1 text-[#423F45]">Tanaman Hias Outdoor merupakan pilihan tepat untuk mempercantik
            <div class="px-2 mt-1 text-[#423F45]">halaman. Warna hijau dan wanginya bunga dapat memberi kesegaran
                <div class="px-2 mt-1 text-[#423F45]">tersendiri di ruang terbuka.</div>
                <br>
                <div class="grid grid-cols-3 gap-4 mt-4">
                    @foreach ($produkOutdoor as $produkout)
                    <div class="text-center">
                        <!-- Untuk gambar 1 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4 relative">
                            <img src="assets/icons/outdoor.png" alt="Icon" class="absolute w-20 h-20 -ml-4 -mt-3">
                            <img src="/assets/images/tambahproduk/{{ $produkout->gambar }}" alt="Gambar 1" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3 text-bold">{{ $produkout->nama }}</div>
                            <button class="absolute bottom-5 left-3 bg-green-400 bg-hover hover:bg-gray-300">
                                <a href="{{ route('detail_produk', $produkout->kode) }}">
                                    <img src="assets/icons/detail.png" alt="Icon" class="px-1 w-9 h-9 object-scale-down">
                                </a>
                            </button>
                            <div class="mt-1">Rp{{ number_format($produkout->harga, 0, ',', '.') }}</div>
                            <form action="{{ route('keranjang.tambah', $produkout->kode) }}" method="POST" class="absolute bottom-3 right-3">
                                @csrf
                                <button type="submit" class="bg-green-400 bg-hover hover:bg-gray-300">
                                    <img src="assets/icons/icon keranjang.png" alt="Icon" class="w-9 h-9 object-scale-down">
                                </button>
                            </form>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <br><br><br>


    <!-- Indoor -->
    <div class="font-semibold pb-2 w-5/6 mx-auto text-center -mt-3">
        <div class="flex items-center justify-center">
            <div class="flex-1 h-0.5 bg-[#78A07C]"></div>
            <div class="px-4 text-[#78A07C] text-2xl" id="indoor">I N D O O R</div>
            <div class="flex-1 h-0.5 bg-[#78A07C]"></div>
        </div>
        <div class="px-2 mt-1 text-[#423F45]">Tambahkan beberapa tanaman hias dalam ruangan untuk sudut rumah
            <div class="px-2 mt-1 text-[#423F45]">halaman. Warna hijau dan wanginya bunga dapat memberi kesegaran
                <div class="px-2 mt-1 text-[#423F45]">ruangan, serta memberikan dampak positif bagi kesehatan.</div>
                <br>
                <div class="grid grid-cols-3 gap-4 mt-4">
                    @foreach ($produkIndoor as $produkin)
                    <div class="text-center">
                        <!-- Untuk gambar 1 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg p-4 relative">
                            <img src="assets/icons/indoor.png" alt="Icon" class="absolute w-20 h-20 -ml-4 -mt-3">
                            <img src="/assets/images/tambahproduk/{{ $produkin->gambar }}" alt="Gambar 1" class="w-48 h-48 mx-auto -mt-1 object-scale-down">
                            <div class="mt-3 text-bold">{{ $produkin->nama}}</div>
                            <button class="absolute bottom-3 left-3 bg-green-400 bg-hover hover:bg-gray-300">
                                <a href="{{ route('detail_produk', $produkin->kode) }}">
                                    <img src="assets/icons/detail.png" alt="Icon" class="px-1 w-9 h-9 object-scale-down">
                                </a>
                            </button>
                            <div class="mt-1">Rp{{ number_format($produkin->harga, 0, ',', '.') }}</div>
                            <form action="{{ route('keranjang.tambah', $produkin->kode) }}" method="POST" class="absolute bottom-3 right-3">
                                @csrf
                                <button type="submit" class="bg-green-400 bg-hover hover:bg-gray-300">
                                    <img src="assets/icons/icon keranjang.png" alt="Icon" class="w-9 h-9 object-scale-down">
                                </button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <br><br><br>



    <!-- Review/Ulasan -->
    <div class="font-semibold pb-2 w-5/6 mx-auto text-center -mt-3">
        <div class="flex items-center justify-center">
            <div class="flex-1 h-0.5 bg-[#78A07C]"></div>
            <div class="px-4 text-[#78A07C] text-2xl">U L A S A N</div>
            <div class="flex-1 h-0.5 bg-[#78A07C]"></div>
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
                                        <div class="flex justify-start gap-0.5 text-yellow-500">
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
                                    Tanaman hias yang saya terima sangat cantik dan segar! Istri saya semakin cinta
                                    (dengan saya)
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
                                        <div class="flex justify-start gap-0.5 text-yellow-500">
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
                                    Pengiriman cepat dan tanaman hiasnya tiba dalam kondisi yang sangat baik. Terima
                                    kasih!
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
                                        <div class="flex justify-start gap-0.5 text-yellow-500">
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
                                    Pilihannya sangat variatif dan fresh. Jadi pengen checkout semua:3
                                </p>
                            </blockquote>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hubungi Kami -->
    <div class="font-semibold pb-2 w-5/6 mx-auto text-center -mt-3">
        <div class="flex items-center justify-center">
            <div class="flex-1 h-0.5 bg-[#78A07C]"></div>
            <div class="px-4 text-[#78A07C] text-2xl">HUBUNGI KAMI</div>
            <div class="flex-1 h-0.5 bg-[#78A07C]"></div>
        </div>

        <h1 class="text-center font-semibold text-4xl mb-6 pt-5 text-slate-50"></h1>
        <div class="grid grid-cols-2 gap-4">
            <div class="w-4/5 mx-auto h-full rounded-xl p-7 text-serif text-white" style="background-color: rgba(31, 41, 55, 0.5);">
                <h1 class="text-left text-slate-50 font-bold text-4xl">Contact Us</h1>
                <p class="text-left text-white font-bold text-2xl mt-10">Info Kontak</p>
                <p class="text-left text-white font-serifbold text-xl mt-2">Senin - Selasa : 09.00 s/d 22.00</p>
                <p class="text-left text-white font-serifbold text-xl mt-1">Rabu - Jum'at : 12.00 s/d 20.00</p>
                <p class="text-left text-white font-serifbold text-xl mt-1">Sabtu : 15.00 s/d 21.00</p>
                <p class="text-left text-white font-serifbold text-xl mt-1 mb-20">Minggu : Tutup</p>
                <div class="flex my-3">
                    <div class="bg-[#78A07C] p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h1 class="text-xl text-white mx-3 mt-2">Batam Centre, Batam, Indonesia</h1>
                </div>
                <div class="flex my-3">
                    <div class="bg-[#78A07C] p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
                            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h1 class="text-xl text-white mx-3 mt-2">Phone : +628 663 4988</h1>
                </div>
                <div class="flex my-3">
                    <div class="bg-[#78A07C] p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                            <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                        </svg>
                    </div>
                    <h1 class="text-xl text-white mx-3 mt-2">Email : Lushtilvy@gmail.com</h1>
                </div>
            </div>
            <img src="./assets/images/tamu/banner1.jpg" alt="" class="w-4/5 mx-auto h-full rounded-xl">
        </div>
        <br><br><br>
    </div>

    <footer class="footer p-10 text-neutral-content w-full" style="background-image: linear-gradient(rgba(245, 245, 220, 0.7), rgba(245, 245, 220, 0.7)), url('assets/images/tamu/footer.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <nav class="max-w-7xl auto">
            <h6 class=" footer-title text-black">Tautan Langsung</h6>
            <a class="link link-hover text-black">Beranda</a>
            <a class="link link-hover text-black">Produk</a>
            <a class="link link-hover text-black">Ulasan</a>
            <a class="link link-hover text-black">Hubungi Kami</a>
        </nav>
        <nav>
            <h6 class="footer-title text-black">Kategori</h6>
            <a class="link link-hover text-black">Populer</a>
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