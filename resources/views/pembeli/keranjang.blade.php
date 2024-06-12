<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-green-500">
    <div class="">
        <div class="bg-green-600 p-5 mt-5 ml-24 flex w-full max-w-6xl rounded-lg">
            <p class="text-white text-xl ml-20">Produk</p>
            <p class="text-white text-xl ml-48">Nama</p>
            <p class="text-white text-xl ml-64">Jumlah</p>
            <p class="text-white text-xl ml-64">Harga</p>
        </div>

        <div class="mt-4 ml-32 flex items-center">
            <input type="checkbox" class="form-checkbox text-green-600 rounded" />
            <img src="assets/images/outdoor/gambar 5 monstera.png" alt="foto produk" class="ml-0 w-40 h-40" />
            <p class="text-white text-xl ml-24">Monstera Deliciosa <br> Outdoor</p>
            <button class="text-white rounded ml-48">
                <i class="fas fa-minus-circle"></i>
            </button>
            <span class="mx-5 text-white">1</span> <!-- Ini untuk menampilkan jumlah -->
            <button class="text-white px-2 py-1 rounded">
                <i class="fas fa-plus-circle"></i>
            </button>
            <p class="text-white text-xl ml-52">Rp. 230.000 </p>
            <button class="text-white">
                <i class="fa-solid fa-trash ml-10"></i>
            </button>
        </div>

        <br>
        <hr>

        <div class="mt-4 ml-32 flex items-center">
            <input type="checkbox" class="form-checkbox text-green-600 rounded" />
            <img src="assets/images/indoor/gambar 4 calla.png" alt="foto produk" class="ml-0 w-40 h-40" />
            <p class="text-white text-xl ml-24">Calla Lily <br>Indoor</p>
            <button class="text-white rounded ml-72">
                <i class="fas fa-minus-circle"></i>
            </button>
            <span class="mx-5 text-white">1</span> <!-- Ini untuk menampilkan jumlah -->
            <button class="text-white px-2 py-1 rounded">
                <i class="fas fa-plus-circle"></i>
            </button>
            <p class="text-white text-xl ml-52">Rp. 200.000</p>
            <button class="text-white">
                <i class="fa-solid fa-trash ml-10"></i>
            </button>
        </div>

        <br>
        <hr>

        <div class="mt-4 ml-32 flex items-center">
            <input type="checkbox" class="form-checkbox text-green-600 rounded" />
            <img src="assets/images/indoor/gambar 3 anthurium.png" alt="foto produk" class="ml-0 w-40 h-40" />
            <p class="text-white text-xl ml-24">Anthurium Andraenum <br> Indoor </p>
            <button class="text-white rounded ml-40">
                <i class="fas fa-minus-circle"></i>
            </button>
            <span class="mx-5 text-white">1</span> <!-- Ini untuk menampilkan jumlah -->
            <button class="text-white px-2 py-1 rounded">
                <i class="fas fa-plus-circle"></i>
            </button>
            <p class="text-white text-xl ml-52">Rp. 300.000</p>
            <button class="text-white">
                <i class="fa-solid fa-trash ml-10"></i>
            </button>
        </div>

        <br>
    </div>


    <div class="mt-4 flex items-center justify-end">
        <p class="text-gray-300 text-2xl mr-32">Total Pembayaran</p>
        <p class="text-white text-2xl mr-40">Rp. 730.000</p>
    </div>

    <div class="flex items-center justify-end mt-6 mr-40">
        <button class="bg-green-600 text-white font-bold py-2 px-4 rounded text-xl">Lanjutkan Pesanan</button>
    </div>

    <div class="grid grid-cols-2 items-center ml-8 mb-">
        <a href="/dashboardlama" class="text-2xl text-black font-bold">
            <i class="fa-solid fa-chevron-left w-6 mr-2 mb-6"></i>Kembali
        </a>
    </div>
</body>

</html>