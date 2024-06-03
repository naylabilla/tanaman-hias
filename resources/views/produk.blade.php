<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk Penjual</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-[#618264] h-screen">

    <body class="bg-[#618264] h-screen">
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
                <a href="/produk" class="btn bg-[#327C54] font-bold text-black text-2xl border-none w-72 rounded-full hover:bg-[#27603F] flex items-center gap-4">
                    <img src="./assets/icons/produk.png" alt="" class="w-9 h-9 mr-4">
                    <span class="self-center col-span-2 mr-3">Produk</span>
                </a>
                <a href="/pesanan_penjual" class="btn bg-[#B0D9B1] font-bold text-black text-2xl border-none w-72 rounded-full hover:bg-[#27603F] flex items-center gap-4">
                    <img src="./assets/icons/rekapan.png" alt="" class="w-9 h-9 mr-4">
                    <span class="self-center col-span-2">Rekapan</span>
                </a>
            </div>
        </div>
        <main class="absolute top-[5.5rem] ml-[25%] mr-6 bg-[#D0E7D2] w-[73.5%] h-[82%] rounded-lg">
            <div class="relative overflow-x-auto m-6">
                <a href="tambah_produk"><button class="btn btn-active btn-ghost mt-4 font-bold">Tambah Produk</button></a>
                <table class="mt-6 w-full text-sm text-left rtl:text-right mx-auto bg-green-700 text-white rounded-xl text-center  ">
                    <thead class="text-xs uppercase border-b border-black">                        
                        <tr>
                            <th scope="col" class="px-2 py-3">No</th>
                            <th scope="col" class="px-4 py-3">Gambar</th>
                            <th scope="col" class="px-4 py-3">Nama Produk</th>
                            <th scope="col" class="px-4 py-3">Harga</th>                            
                            <th scope="col" class="px-4 py-3">Kategori</th>
                            <th scope="col" class="px-4 py-3">Stok</th>
                            <th scope="col" class="px-4 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <a href="#gambar" class="inline-block">
                                    <img src=".\assets\images\indoor\gambar 1 alocasia.png" alt="" class="size-14">
                                </a>
                            </td>
                            <td>Edelweis Edelweisyt</td>                            
                            <td>Rp900.000</td>
                            <td>Indoor</td>                         
                            <td>4</td>
                            <td>
                                <a href="#detail" class="inline-block">
                                    <img src="./assets/icons/detail.png" alt="" class="size-8">
                                </a>
                                <a href="#delete" class="inline-block pl-2 pb-1">
                                    <img src="./assets/icons/trash-solid.png" alt="" class="size-6">
                                </a>
                                <a href="#edit" class="inline-block pl-3 pb-1">
                                    <img src="./assets/icons/pen-to-square-solid.png" alt="" class="size-6">
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                    <tr>
                            <td>1</td>
                            <td>
                                <a href="#gambar" class="inline-block">
                                    <img src=".\assets\images\indoor\gambar 1 alocasia.png" alt="" class="size-14">
                                </a>
                            </td>
                            <td>Edelweis Edelweisyt gswgsgs  gsgsgsgs fhqifhwqf  fiahfqfawfhjoq fjaof</td>                            
                            <td>Rp900.000</td>
                            <td>Indoor</td>                         
                            <td>4</td>
                            <td>
                                <a href="#detail" class="inline-block">
                                    <img src="./assets/icons/detail.png" alt="" class="size-8">
                                </a>
                                <a href="#delete" class="inline-block pl-2 pb-1">
                                    <img src="./assets/icons/trash-solid.png" alt="" class="size-6">
                                </a>
                                <a href="#edit" class="inline-block pl-3 pb-1">
                                    <img src="./assets/icons/pen-to-square-solid.png" alt="" class="size-6">
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>

</html>