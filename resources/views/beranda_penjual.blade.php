<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Penjual</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#618264] h-screen">
    <div class="navbar bg-[#B0D9B1] fixed top-0 rounded-b-3xl grid grid-cols-3 text-black text-3xl font-bold">
        <a href="" class="btn btn-ghost text-xl me-auto">
            <img src="./assets/icons/user.png" alt="" class="w-10">
            <p>Admin</p>
        </a>
        <h1 class="mx-auto">Beranda</h1>
        <a href="" class="btn btn-ghost ms-auto">
            <img src="./assets/icons/logout.png" alt="" class="w-10">
        </a>
    </div>
    <div class="fixed left-0 top-[5.5rem] h-screen bg-[#B0D9B1] w-[23%]">
        <div class="bg-transparent w-48 min-h-48 rounded-lg flex mx-auto my-5">
            <img src="./assets/images/tamu/logo.png" alt="" class="resize pl-1">
        </div>
        <div class="flex justify-center grid grid-rows-3 gap-5">
            <a href="/beranda_penjual" class="btn bg-[#327C54] font-bold text-black text-2xl border-none w-72 rounded-full hover:bg-[#27603F] flex items-center gap-4">
                <img src="./assets/icons/beranda.png" alt="" class="w-9 h-9 mr-4">
                <span>Beranda</span>
            </a>
            <a href="/produk_penjual" class="btn bg-[#B0D9B1] font-bold text-black text-2xl border-none w-72 rounded-full hover:bg-[#27603F] flex items-center gap-4">
                <img src="./assets/icons/produk.png" alt="" class="w-9 h-9 mr-4">
                <span class="self-center col-span-2 mr-3">Produk</span>
            </a>
            <a href="/pesanan_penjual" class="btn bg-[#B0D9B1] font-bold text-black text-2xl border-none w-72 rounded-full hover:bg-[#27603F] flex items-center gap-4">
                <img src="./assets/icons/rekapan.png" alt="" class="w-9 h-9 mr-4">
                <span class="self-center col-span-2">Rekapan</span>
            </a>
        </div>
    </div>

    {{-- PRODUK --}}
    <div class="rounded-lg absolute top-[9rem] ml-[25%] mr-6 bg-[#D0E7D2] w-[73%] h-[33%]">
        <div class="relative overflow-x-auto m-3">
            <table class="w-3/4 text-sm text-left rtl:text-right mx-auto bg-green-700 text-white rounded-xl text-center">
                <thead class="text-xs uppercase border-b border-black">
                    <h1 class="text-black font-bold mb-3 ml-3 text-3xl">Produk</h1>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="bg-white rounded-lg border border-black w-[90%] h-32 ml-4 grid grid-cols-4 items-center">
                            <img src="./assets/icons/icon jumlah.png" alt="" class="h-14 justify-self-end">
                            <div class="col-span-3 mt-4">
                                <p class="text-black font-bold text-6xl">22</p>
                                <p class="text-[#618264] font-bold text-xl">Jumlah</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg border border-black w-[93%] h-32 ml-4 grid grid-cols-4 items-center">
                            <img src="./assets/icons/icon stok.png" alt="" class="h-16 justify-self-center">
                            <div class="col-span-3 mt-4">
                                <p class="text-black font-bold text-6xl">30</p>
                                <p class="text-[#618264] font-bold text-xl ml-1">Stok</p>
                            </div>
                        </div>
                    </div>
                </thead>
            </table>
        </div>
    </div>

    {{-- PESANAN --}}
    <div class="rounded-lg absolute top-[25rem] ml-[25%] mr-6 bg-[#D0E7D2] w-[73%] h-[33%]">
        <div class="relative overflow-x-auto m-3">
            <table class="w-3/4 text-sm text-left rtl:text-right mx-auto bg-green-700 text-white rounded-xl text-center">
                <thead class="text-xs uppercase border-b border-black">
                    <h1 class="text-black font-bold mb-3 ml-3 text-3xl">Pesanan</h1>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="bg-white rounded-lg border border-black w-[90%] h-32 ml-4 grid grid-cols-4 items-center">
                            <img src="./assets/icons/icon keranjang.png" alt="" class="h-14 justify-self-end">
                            <div class="col-span-3 mt-4">
                                <p class="text-black font-bold text-6xl">5</p>
                                <p class="text-[#618264] font-bold text-xl">Pesanan</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg border border-black w-[93%] h-32 ml-4 grid grid-cols-4 items-center">
                            <img src="./assets/icons/icon pendapatan.png" alt="" class="h-16 justify-self-center">
                            <div class="col-span-3 mt-4">
                                <p class="text-black font-bold text-6xl">1.000.000</p>
                                <p class="text-[#618264] font-bold text-xl ml-3">Pendapatan</p>
                            </div>
                        </div>
                    </div>
                </thead>
            </table>
        </div>
    </div>

</body>

</html>