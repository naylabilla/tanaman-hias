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