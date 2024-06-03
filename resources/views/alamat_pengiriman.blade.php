<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Penjual</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#618264] h-auto flex flex-col justify-center items-center">
    <div class="navbar bg-white sticky top-0 grid grid-cols-2 text-black text-3xl font-bold " style="position: sticky; z-index: 1000;">
        <a href="" class="btn btn-ghost me-auto hover:bg-white mx-5">
            <img src="./assets/images/tamu/logo.png" alt="" class="size-14 mb-5 -mt-1 object-scale-down">
            <p class="text-2xl text-[#78A07C] mb-6 text-bold">Lushtilvy</p>
        </a>
        <div class="ms-auto">
            <a href="/keranjang" class="btn btn-ghost hover:bg-white">
                <img src="./assets/icons/navbar keranjang.png" alt="" class="w-12">
                <p class="text-2xl text-[#78A07C]">Keranjang</p>
            </a>
            <a href="/pesanan" class="btn btn-ghost hover:bg-white">
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

    <div class="w-full flex flex-col items-center pb-5 ">

        <h1 class="text-center text-white text-4xl font-bold mt-4 mb-4">Alamat Pengiriman</h1>

        <input type="text" class="bg-white border-[#51EC4E] border p-3 w-5/6 mx-auto block mb-4" placeholder="Nama Lengkap">

        <input type="text" class="bg-white border-[#51EC4E] border p-3 w-5/6 mx-auto block mb-4" placeholder="Username">

        <input type="text" class="bg-white border-[#51EC4E] border p-3 w-5/6 mx-auto block mb-4" placeholder="Contoh: +6285-0000-1111">

        <select class="bg-white border-[#51EC4E] border p-3 w-5/6 mx-auto block mb-4">
            <option value="" disabled selected>Pilih Tujuan Pengiriman</option>
            <option value="1">Rumah</option>
            <option value="2">Kantor</option>
            <option value="3">Pilihan 3</option>
        </select>

        <input type="text" class="bg-white border-[#51EC4E] border p-10 w-5/6 mx-auto block text-left pl-5 pt-3 mb-4" placeholder="Alamat Lengkap">

        <div class="flex space-x-20 w-5/6 mx-auto mb-4">
            <select class="bg-white border-[#51EC4E] border p-3 w-1/2 mx-auto block">
                <option value="" disabled selected>Pilih Kecamatan</option>
                <option value="1">Batam Kota</option>
                <option value="2">Batu Aji</option>
                <option value="3">Batu Ampar</option>
                <option value="4">Bengkong</option>
                <option value="5">Batu Ampar</option>
                <option value="6">Nongsa</option>
                <option value="7">Sekupang</option>
            </select>
            <input type="text" class="bg-white border-[#51EC4E] border p-3 w-1/2 mx-auto block" placeholder="Kode Pos">
        </div>

        <button class="bg-[#00A651] hover:bg-green-800 text-white font-bold p-3 w-5/6 mx-auto block text-xl">SIMPAN</button>
</body>

</html>