<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#78A07C] h-screen place-content-end">
    <div class="navbar bg-white fixed top-0 grid grid-cols-2 text-black text-3xl font-bold">
        <a href="" class="btn btn-ghost me-auto hover:bg-white mx-10">
            <img src="./assets/images/tamu/logo.png" alt="" class="size-16">
            <p class="text-2xl text-[#78A07C]">Lustilvy</p>
        </a>
        <div class="ms-auto">
            <a href="/keranjang" class="btn btn-ghost hover:bg-white">
                <img src="./assets/icons/navbar keranjang.png" alt="" class="w-10">
                <p class="text-2xl text-[#78A07C]">Keranjang</p>
            </a>
            <a href="/pesanan" class="btn btn-ghost hover:bg-white">
                <img src="./assets/icons/navbar pesanan.png" alt="" class="w-10">
                <p class="text-2xl text-[#78A07C]">Pesanan</p>
            </a>
            <div class="border-l-4 border-black">
                <a href="/logout" class="btn btn-ghost hover:bg-white">
                    <img src="./assets/icons/logout.png" alt="" class="w-10">
                </a>
            </div>
        </div>
    </div>
    <a href="" class="absolute top-20 left-5">
        <img src="./assets/icons/kembali.png" alt="">
    </a>
    <img src="./assets/images/outdoor/gambar 4 monstera.png" alt="" class="absolute left-20 top-20 size-72">
    <div class="bg-white w-full h-3/6 size-40 mb-full min-h-80 rounded-t-2xl p-4">
        <h1 class="mr-10 mt-5 pl-6 text-black font-semibold text-4xl">Monstera Deliciosa</h1>
        <h2 class="mr-10 mt-5 pl-6 text-black font-semibold text-3xl">165 K</h2>
        <h3 class="mr-10 mt-5 pl-6 text-justify font-sans text-xl text-black">Tanaman Monstera berasal dari daerah
            tropis dan subtropis di seluruh dunia, terutama di Asia, Afrika, dan Amerika Selatan.
            Monstera biasanya tumbuh sebagai pepohonan kecil dan memiliki daun yang besar dan berbulu yang memberikan
            tampilan unik dan menarik.
            Tanaman Monstera sering ditanam sebagai tanaman hias di rumah atau di taman, dan juga dapat tumbuh dengan
            baik di dalam pot atau wadah.</h3>
        <div class="grid grid-cols-3 place-items-center text-black mt-5">
            <h1 class="text-3xl block">Stok</h1>
            <h1 class="text-3xl block">Kategori</h1>
            <h1 class="text-3xl block">Tinggi</h1>
        </div>
        <div class="grid grid-cols-3 place-items-center text-black">
            <h1 class="text-3xl block">10</h1>
            <h1 class="text-3xl block">Indoor</h1>
            <h1 class="text-3xl block">8,5"</h1>
        </div>
        <div class="flex justify-center">
            <button type="submit" class="btn bg-green-700 w-64 mt-3 text-black text-xl rounded-full">Tambah ke
                keranjang</button>
        </div>
    </div>
</body>

</html>