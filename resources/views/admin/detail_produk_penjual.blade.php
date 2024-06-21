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

    <a href="{{ route('produk.index') }}" class="absolute top-1 left-5">
        <img src="/assets/icons/panah kiri.png" alt="" class="w-10 h-10 mt-5">
    </a>

    <img src="/assets/images/tambahproduk/{{ $data->gambar }}" alt="" class="size-72 ml-10">
    <div class="bg-white w-full h-3/6 size-40 rounded-t-2xl p-4 ">
        <h1 class="mr-10 mt-5 pl-6 text-black font-semibold text-4xl">{{ $data->nama }}</h1>
        <h2 class="mr-10 mt-5 pl-6 text-black font-semibold text-3xl">Rp{{ number_format($data->harga, 0, ',', '.') }}</h2> 
        <h3 class="mr-10 mt-5 pl-6 text-justify font-sans text-xl text-black">{{ $data->deskripsi }}</h3>
        <div class="grid grid-cols-3 place-items-center text-black mt-5">
            <h1 class="text-3xl block">Stok</h1>
            <h1 class="text-3xl block">Kategori</h1>
            <h1 class="text-3xl block">Tinggi</h1>
        </div>
        <div class="grid grid-cols-3 place-items-center text-black">
            <h1 class="text-3xl block">{{ $data->stok }}</h1>
            <h1 class="text-3xl block">{{ $data->kategori }}</h1>
            <h1 class="text-3xl block">{{ $data->tinggi }} cm</h1>
        </div>
        
    </div>
</body>

</html>
