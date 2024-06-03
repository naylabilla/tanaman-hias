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
    
    <div class="fixed left-0 top-[5.5rem] h-screen bg-[#B0D9B1] w-[23%]">
        <div class="bg-transparent w-48 min-h-48 rounded-lg flex mx-auto my-5">
            <img src="./assets/images/tamu/logo.png" alt="" class="resize pl-1">
        </div>
        <div class="flex justify-center grid grid-rows-3 gap-5">
            <a href="/beranda_penjual" class="btn bg-[#327C54] font-bold text-black text-2xl border-none w-72 rounded-full hover:bg-[#27603F] flex items-center gap-4">
                <img src="./assets/icons/beranda.png" alt="" class="w-9 h-9 mr-4">
                <span>Beranda</span>
            </a>
            <a href="/produk" class="btn bg-[#B0D9B1] font-bold text-black text-2xl border-none w-72 rounded-full hover:bg-[#27603F] flex items-center gap-4">
                <img src="./assets/icons/produk.png" alt="" class="w-9 h-9 mr-4">
                <span class="self-center col-span-2 mr-3">Produk</span>
            </a>
            <a href="/pesanan_penjual" class="btn bg-[#B0D9B1] font-bold text-black text-2xl border-none w-72 rounded-full hover:bg-[#27603F] flex items-center gap-4">
                <img src="./assets/icons/rekapan.png" alt="" class="w-9 h-9 mr-4">
                <span class="self-center col-span-2">Rekapan</span>
            </a>
        </div>
    </div>

    
</body>