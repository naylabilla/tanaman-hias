<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Penjual</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#618264] h-screen ">
    <div class="navbar bg-[#B0D9B1] fixed top-0 rounded-b-3xl grid grid-cols-3 text-black text-3xl font-bold">
        <a href="" class="btn btn-ghost text-xl me-auto">
            <img src="./assets/icons/user.png" alt="" class="w-10">
            <p>Admin</p>
        </a>
        <h1 class="mx-auto">Produk</h1>
        <a href="" class="btn btn-ghost ms-auto">
            <img src="./assets/icons/logout.png" alt="" class="w-10">
        </a>
    </div>
    <div class="fixed left-0 top-[5.5rem] h-screen bg-[#B0D9B1] w-[23%]">
        <div class="bg-transparent w-48 min-h-48 rounded-lg flex mx-auto my-5">
            <img src="./assets/images/tamu/logo.png" alt="" class="resize pl-1">
        </div>
        <div class="flex justify-center grid grid-rows-3 gap-5">
            <a href="/beranda_penjual" class="btn bg-[#B0D9B1] font-bold text-black text-2xl border-none w-72 rounded-full hover:bg-[#27603F] flex items-center gap-4">
                <img src="./assets/icons/beranda.png" alt="" class="w-9 h-9 mr-4">
                <span>Beranda</span>
            </a>
            <a href="/produk_penjual" class="btn bg-[#327C54] font-bold text-black text-2xl border-none w-72 rounded-full hover:bg-[#27603F] flex items-center gap-4">
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
    <div class="rounded-lg absolute top-[9rem] ml-[25%] mr-6 bg-[#D0E7D2] w-[73%] h-[75%]">

        <form class="rounded-box pl-8 pt-6" action="#" method="#" enctype="#">
            <div class="grid grid-cols-2 gap-4">


                <div class="">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                        Nama
                    </label>
                    <input class="shadow appearance-none border rounded w-[95%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" placeholder="" name="nama" required>
                </div>
                <div class="">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                        Stok
                    </label>
                    <input class="shadow appearance-none border rounded w-[30%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="number" placeholder="" name="nama" required>
                </div>
                <div class="">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                        Tinggi
                    </label>
                    <input class="shadow appearance-none border rounded w-[30%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" placeholder="" name="nama" required>
                </div>
                <div class="">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                        Kategori
                    </label>
                    <input class="shadow appearance-none border rounded w-[40%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" placeholder="" name="nama" required>
                </div>
                <div class="">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                        Harga
                    </label>
                    <input class="shadow appearance-none border rounded w-[50%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" placeholder="" name="nama" required>
                </div>
                <div class="">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                        Deskripsi
                    </label>
                    <input class="shadow appearance-none border rounded w-[95%] h-[100%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" placeholder="" name="nama" required>
                </div>
                <div class="col-span-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                        Gambar Produk
                    </label>
                    <input class="shadow appearance-none border rounded w-[35%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="file" placeholder="" name="nama" required>
                </div>
                <div class="flex justify-center items-center ">

                    <input type="submit" value="Simpan" class="btn text-white font-bold w-44 text-lg  " style="background-color: #618264 ">


                </div>
                <div class="flex justify-center items-center ">
                    <input type="submit" value="Kembali" class="btn text-white font-bold w-44 text-lg  " style="background-color: #0077B6">

                </div>


            </div>

        </form>

    </div>

</body>

</html>