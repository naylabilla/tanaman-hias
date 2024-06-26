<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('assets/images/tamu/bg.png');
            background-size: contain;
            background-position: center;
        }
    </style>
</head>

<body class="bg-[#618264] h-full pb-5">
    <div class="navbar bg-white sticky top-0 grid grid-cols-2 text-black text-3xl font-bold" style="position: sticky; z-index: 1000;">
        <a href="{{ route('dashboard')}}" class="btn btn-ghost me-auto hover:bg-white mx-5">
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
    <h1 class="text-center text-white text-3xl font-bold">Riwayat Pesanan</h1>
    <div class="flex items-center text-[#B0D9B1] text-2xl">
        <img src="./assets/icons/panah kiri.png" alt="" class="w-8 h-8 mt-8 ml-16 ">
        <div class="text-2xl font-bold pb-2 border-b-2 border-white w-5/6 mx-auto ml-4 mt-10">
            Pesanan
        </div>
    </div>

    <br>
    @foreach ($riwayatPesanan as $pesanan)
<div class="grid grid-cols-1 grid-flow-row gap-0 border border-white w-5/6 mx-auto mb-10">
    <div class="h-20 flex justify-center border text-left text-white pl-2 flex-col relative">
        <div class="text-left pl-2">
            <p>No. Pesanan: {{ $pesanan->resi_id }}</p>
            <p>Tanggal Pesanan: {{ $pesanan->resi->updated_at }}</p>
            <p>Status Pengiriman: {{ $pesanan->status }}</p>
        </div>
        <button class="bg-[#00A651] text-white px-8 py-1 rounded absolute top-6 right-3">Cetak Resi</button>
    </div>

    <div class="h-80 flex items-center justify-center border relative">
        <div class="text-white text-lg absolute top-3 left-10 text-left flex items-center">
            <img src="{{ asset('assets/images/outdoor/gambar 5 monstera.png') }}" class="w-32 h-32 mr-5 pl-2">
            <div>
                <p>{{ $pesanan->produk->nama_produk }}</p>
                <p>{{ $pesanan->produk->kategori }}</p>
            </div>
        </div>
        <div class="text-white text-lg absolute top-12 right-10 text-right">
            <p>{{ $pesanan->jumlah }}</p>
            <p>{{ $pesanan->harga_satuan }}</p>
        </div>
        <hr class="w-11/12 border-t border-gray-300 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
    </div>

    <div class="h-14 flex justify-between border text-white pl-2 flex-col relative">
        <p class="text-lg absolute top-3 pl-2">Total Pesanan</p>
        <p class="text-3xl text-[#136E3B] font-bold absolute top-1 right-3">{{ $pesanan->jumlah }}</p>
    </div>
</div>
@endforeach
</body>

</html>