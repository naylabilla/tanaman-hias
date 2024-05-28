<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet">
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
            <div class="px-4 text-green-300">S E R V I C E</div>
            <div class="flex-1 h-0.5 bg-green-200"></div>
        </div>
        <div class="px-4 mt-2">JAMINAN KAMI PADA ANDA</div>
        <br>
        <div class="flex justify-center mt-1 px-2">
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



        <br><br>
        <!-- Review/Ulasan -->
        <div class="font-semibold pb-2 w-7/8 mx-auto text-center -mt-3">
            <div class="flex items-center justify-center">
                <div class="flex-1 h-0.5 bg-green-200"></div>
                <div class="px-4 text-green-300">U L A S A N</div>
                <div class="flex-1 h-0.5 bg-green-200"></div>
            </div>

            <div class="mx-auto max-w-[1340px] px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">
                <div class="max-w-7xl items-end justify-between sm:flex sm:pe-6 lg:pe-8">

                    <div class="mt-8 flex gap-4 lg:mt-0">
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

                        <!-- Add more keen-slider__slide as needed for additional reviews -->
                    </div>
                </div>
            </div>
            </section>

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