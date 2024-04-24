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

<body class="bg-[#618264] h-screen flex flex-col justify-center items-center">
    <h1 class="text-center text-white text-4xl font-bold mb-8">Alamat Pengiriman</h1>

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