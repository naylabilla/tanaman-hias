<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#78A07C] ">
    <div class="navbar bg-white text-black text-3xl font-bold mb-64">
        <a href="{{ route('dashboard')}}" class="btn btn-ghost me-auto hover:bg-white mx-5">
            <img src="/assets/images/tamu/logo.png" alt="" class="size-14 mb-5 -mt-1 object-scale-down">
            <p class="text-2xl text-[#78A07C] mb-6 text-bold">Lushtilvy</p>
        </a>
        <div class="ms-auto">
            <a href="/keranjang" class="btn btn-ghost hover:bg-white">
                <img src="/assets/icons/navbar keranjang.png" alt="" class="w-12">
                <p class="text-2xl text-[#78A07C]">Keranjang</p>
            </a>
            <a href="/pesanan" class="btn btn-ghost hover:bg-white">
                <img src="/assets/icons/navbar pesanan.png" alt="" class="w-12">
                <p class="text-2xl text-[#78A07C]">Pesanan</p>
            </a>
            <div class="border-l-4 border-black">
                <a href="/logout" class="btn btn-ghost hover:bg-white">
                    <img src="/assets/icons/user1.png" alt="" class="w-10">
                </a>
            </div>
        </div>
    </div>

    <br>
    <a href="{{ route('dashboard')}}" class="absolute top-20 left-5">
        <img src="/assets/icons/panah kiri.png" alt="" class="w-10 h-10 mt-1">
    </a>
    <img src="/assets/images/tambahproduk/{{ $data->gambar }}" alt="" class="absolute left-20 top-20 size-72">
    <div class="bg-white w-full h-3/6 size-40 mb-full min-h-80 rounded-t-2xl p-4">
        <h1 class="mr-10 mt-2 pl-6 text-black font-semibold text-4xl">{{ $data->nama }}</h1>
        <h2 class="mr-10 pl-6 text-green-600 font-semibold text-3xl">Rp{{ number_format($data->harga, 0, ',', '.') }}</h2>
        <h3 class=" mt-2 pl-6 text-justify font-sans text-xl text-black">{{ $data->deskripsi }}</h3>
        <div class="grid grid-cols-3 place-items-center text-black mt-3">
            <h1 class="text-2xl block">Stok</h1>
            <h1 class="text-2xl block">Kategori</h1>
            <h1 class="text-2xl block">Tinggi</h1>
        </div>
        <div class="grid grid-cols-3 place-items-center text-black">
            <h1 class="text-xl block">{{ $data->stok }}</h1>
            <h1 class="text-xl block">{{ $data->kategori }}</h1>
            <h1 class="text-xl block">{{ $data->tinggi }} cm</h1>
        </div>
        <div class="flex justify-center mt-4">
            <form action="{{ route('keranjang.tambah', $data->kode) }}" method="POST" class="">
                @csrf
                <button type="submit" class="btn bg-green-600 w-64 mt-3 text-white text-xl rounded-full">
                    Tambah ke Keranjang
                </button>
            </form>
        </div>
    </div>
</body>

</html>