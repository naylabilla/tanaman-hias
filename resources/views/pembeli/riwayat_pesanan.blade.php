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
    <div class="navbar bg-white sticky top-0 grid grid-cols-2 text-black text-3xl font-bold"
        style="position: sticky; z-index: 1000;">
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
    @php
    $riwayatPesanan = $riwayatPesanan->sortByDesc(function ($pesananGroup) {
        return $pesananGroup->first()->resi->updated_at;
    });
    @endphp
    
    @foreach ($riwayatPesanan as $resiId => $pesananGroup)
    @php
        $totalHarga = 0;
    @endphp
    
    <div class="grid grid-cols-1 grid-flow-row gap-0 border border-white w-5/6 mx-auto mb-10">
        <div class="h-20 flex justify-center border text-left text-white pl-2 flex-col relative">
            <div class="text-left pl-2">
                <p>No. Pesanan: {{ $resiId }}</p>
                <p>Tanggal Pesanan: {{ $pesananGroup->first()->resi->updated_at }}</p>
                <p>Status Pengiriman: {{ $pesananGroup->first()->status }}</p>
            </div>
            <button class="bg-[#00A651] text-white px-8 py-1 rounded absolute top-6 right-3">Cetak Resi</button>
        </div>

        <div class="relative">
            @foreach ($pesananGroup as $pesanan)
            @php
                $totalHarga += $pesanan->jumlah * $pesanan->harga_satuan;
            @endphp
            <div class="h-40 flex items-center border-b border-gray-300">
                <div class="flex items-center text-white text-lg pl-10">
                    <img src="/assets/images/tambahproduk/{{ $pesanan->produk->gambar }}" class="w-32 h-32 mr-5">
                    <div>
                        <p>{{ $pesanan->produk->nama }}</p>
                        <p>{{ $pesanan->produk->kategori }}</p>
                    </div>
                </div>
                <div class="text-white text-lg ml-auto pr-10 text-right">
                    <p>x{{ $pesanan->jumlah }}</p>
                    <p>Rp{{ number_format($pesanan->harga_satuan, 0, ',', '.') }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="h-14 flex justify-between border-t text-white pl-2 flex-col relative">
            <p class="text-lg absolute top-3 pl-2">Total Pesanan</p>
            <p class="text-3xl text-[#136E3B] font-bold absolute top-1 right-3">Rp{{ number_format($totalHarga, 0, ',', '.') }}</p>
        </div>
    </div>
    @endforeach
</body>

</html>
