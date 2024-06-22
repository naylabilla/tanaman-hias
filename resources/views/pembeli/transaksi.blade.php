<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#6D896B] h-screen">
    <!-- Navbar -->
    <div class="navbar bg-white sticky top-0 grid grid-cols-2 text-black text-3xl font-bold"
        style="
                position: sticky;
                z-index: 1000;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
            ">
        <a href="" class="btn btn-ghost me-auto hover:bg-white mx-5">
            <img src="{{ asset('assets/images/tamu/logo.png') }}" alt=""
                class="size-14 mb-5 -mt-1 object-scale-down" />
            <p class="text-2xl text-[#78A07C] mb-6 text-bold">Lushtilvy</p>
        </a>
        <div class="ms-auto">
            <a href="/keranjang" class="btn btn-ghost hover:bg-white">
                <img src="{{ asset('assets/icons/navbar keranjang.png') }}" alt="" class="w-12" />
                <p class="text-2xl text-[#78A07C]">Keranjang</p>
            </a>
            <a href="/riwayat_pesanan" class="btn btn-ghost hover:bg-white">
                <img src="{{ asset('assets/icons/navbar pesanan.png') }}" alt="" class="w-12" />
                <p class="text-2xl text-[#78A07C]">Pesanan</p>
            </a>
            <a href="{{ route('profile.index') }}" class="btn btn-ghost hover:bg-white">
                <img src="{{ asset('assets/icons/user1.png') }}" alt="" class="w-10" />
                <p class="text-2xl text-[#78A07C]">Profil</p>
            </a>
            <div class="border-l-4 border-black">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="btn btn-ghost">
                        <img src="{{ asset('assets/icons/logout.png') }}" alt="" class="w-10" />
                    </button>
                </form>
            </div>
        </div>
    </div>
    <form action="/submit-bukti-bayar/{{ $resi->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container mx-10">
            <div class="grid grid-cols-2">
                <a href="" class="absolute top-20 left-5">
                    <img src="{{ asset('assets/icons/panah kiri.png') }}" alt="" class="w-10 h-10 mt-4 ml-4">
                </a>
                <div class="flex items-center">
                    <p class="text-3xl text-white font-bold mt-6 ml-[84%] text-center flex-1">PEMBAYARAN</p>
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="flex items-center">
                    <img src="{{ asset('assets/icons/user.png') }}" alt="" class="w-8 h-8 mt-8 ml-4">
                    <p class="text-2xs font-bold text-white mt-8 mr-[82%] text-center flex-1">{{ $resi->username }}</p>
                </div>
            </div>
            <hr class="w-full border-b-2 border-white mt-3">

            <div class="mt-4">
                <p class="text-xl text-white font-bold mt-4 mr-[86%]">Total Pembayaran</p>
                @php
                    $total = 0;

                    foreach ($resi->pesanan as $value) {
                        $total += $value->harga_satuan * $value->jumlah;
                    }
                @endphp
                <p class="text-3xl text-[#066A34] font-bold mb-6 mr-[86%]">Rp. {{ number_format($total) }}</p>
                <div class="bg-white border border-green-600 rounded w-1/6 h-8 border-green-600">
                    <p class="text-3xs ml-3 font-bold">Bank BNI</p>
                </div>
            </div>
            <div class="mb-3">
                <p class="text-3xs text-white font-bold mt-3 mr-[86%]">No. Rekening</p>
                <div class="bg-white border border-green-600 rounded w-64 h-14 border-green-600">
                    <p class="text-3xs text-[#327C54] font-bold ml-3 mt-2 ">1083915345</p>
                </div>
            </div>
            <hr class="w-full border-b-2 border-white mt-3">

            <div class="mt-4">
                <p class="text-white text-3xs font-bold">Bukti Pembayaran</p>
                <input type="file" name="bukti_pembayar" id="tes"
                    class="text-black font-bold rounded input input-bordered input-success w-[57%] h-18 border-green-300" />
            </div>

            <div class="mt-8 flex justify-center">
                <button type="submit"
                    class="btn bg-[#00A651] text-xl rounded text-white border-none w-[14%] h-[10%] mx-auto">OK</button>
            </div>
        </div>
    </form>

</body>

</html>
