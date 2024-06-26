<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Rincian Pesanan</title>
        <link
            href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css"
            rel="stylesheet"
            type="text/css"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
            rel="stylesheet"
        />
        <style>
            hr {
                width: calc(100% - 123px);
            }
            .product-pict {
                margin-left: 5rem;
            }
            .product-name {
                margin-left: -4rem;
            }
            .product-pieces {
                margin-right: -3rem;
            }
            .product-price {
                margin-right: -5.5rem;
            }
            .product-total {
                margin-right: 3.5rem;
            }
        </style>
    </head>

    <body class="bg-[#618264] h-full pb-5">
        <div
            class="navbar bg-white sticky top-0 grid grid-cols-2 text-black text-3xl font-bold"
            style="position: sticky; z-index: 1000"
        >
            <a href="" class="btn btn-ghost me-auto hover:bg-white mx-5">
                <img
                    src="./assets/images/tamu/logo.png"
                    alt=""
                    class="size-14 mb-5 -mt-1 object-scale-down"
                />
                <p class="text-2xl text-[#78A07C] mb-6 text-bold">Lushtilvy</p>
            </a>
            <div class="ms-auto">
                <a href="/keranjang" class="btn btn-ghost hover:bg-white">
                    <img
                        src="./assets/icons/navbar keranjang.png"
                        alt=""
                        class="w-12"
                    />
                    <p class="text-2xl text-[#78A07C]">Keranjang</p>
                </a>
                <a href="/pesanan" class="btn btn-ghost hover:bg-white">
                    <img
                        src="./assets/icons/navbar pesanan.png"
                        alt=""
                        class="w-12"
                    />
                    <p class="text-2xl text-[#78A07C]">Pesanan</p>
                </a>
                <div class="border-l-4 border-black">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="btn btn-ghost">
                            <img
                                src="/assets/icons/logout.png"
                                alt=""
                                class="w-10"
                            />
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Title -->
        <h1 class="text-center text-white text-3xl font-bold mt-10">
            Rincian Pesanan
        </h1>

        <!-- Back Button and Subtitle -->
        <div class="flex items-center mt-8 ml-10">
            <img
                src="./assets/icons/panah kiri.png"
                alt="Back"
                class="w-8 h-8"
            />
            <p class="text-2xl text-[#B0D9B1] font-bold ml-3">Rincian</p>
        </div>

        <hr class="border-white mx-20 my-2" />

        <!-- Order Details -->
        <div class="mx-10 mt-2 text-white">
            <div class="flex justify-between">
                <div class="grid grid-cols-3 gap-2">
                    <p class="ml-14 col-span-1">Nomor Pesanan</p>
                    <p class="col-span-1">: 24832GGVM1HUD</p>
                </div>
                <p class="mr-8">Status Pesanan: Sedang Dikirim</p>
            </div>
            <br />
            <div class="grid grid-cols-3 gap-2">
                <p class="ml-14 col-span-1">Nama</p>
                <p class="col-span-1 -ml-48">: Marsya Huriyah</p>
            </div>
            <div class="grid grid-cols-3 gap-2">
                <p class="ml-14 col-span-1">Nomor Hp</p>
                <p class="col-span-2 -ml-48">: 08341428919</p>
            </div>
            <div class="grid grid-cols-3 gap-2">
                <p class="ml-14 col-span-1">Alamat</p>
                <p class="col-span-2 -ml-48">
                    : Orchard Park blok X no 505, Batam Centre, 29431
                </p>
            </div>
            <div class="grid grid-cols-3 gap-2">
                <p class="ml-14 col-span-1">Tanggal Pesan</p>
                <p class="col-span-2 -ml-48">: 27/03/2024</p>
            </div>
            <div class="grid grid-cols-3 gap-2">
                <p class="ml-14 col-span-1">Metode Pembayaran</p>
                <p class="col-span-2 -ml-48">: Transfer Bank</p>
            </div>
        </div>

        <br />
        <hr class="border-white my-2 mx-20" />

        <!-- Order Items Header -->
        <div class="flex justify-between text-white mx-10 mt-2 ml-24">
            <p class="ml-10">Gambar</p>
            <p class="mr-12">Nama</p>
            <p class="-mr-16">Jumlah</p>
            <p class="-mr-14">Harga</p>
            <p class="mr-16">Total</p>
        </div>

        <hr class="border-white my-2 mx-20" />

        <!-- Order Items -->

        <!-- Item 1 -->
        <div
            class="flex justify-between items-center mx-10 mt-2 space-y-4 text-white"
        >
            <img
                src="./assets/images/outdoor/gambar 5 monstera.png"
                alt="Monstera Deliciosa"
                class="w-24 h-24 product-pict"
            />
            <p class="product-name">Monstera Deliciosa</p>
            <p class="product-pieces">1</p>
            <p class="product-price">165.000</p>
            <p class="product-total">165.000</p>
        </div>

        <hr class="border-white my-2 mx-20" />

        <!-- Total -->
        <div class="flex justify-end font-bold text-white mx-10 mt-4">
            <p class="mr-44">Total</p>
            <p class="mr-12">365.000</p>
        </div>
    </body>
</html>
