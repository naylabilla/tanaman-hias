<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full pb-5" style="background-image: url('{{ asset('assets/images/tamu/bg.png') }}'); background-size: contain; background-position: center;">
    <!-- Navbar -->
    <div class="navbar bg-white sticky top-0 grid grid-cols-2 text-black text-3xl font-bold"
        style="
                position: sticky;
                z-index: 1000;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
            ">
        <a href="" class="btn btn-ghost me-auto hover:bg-white mx-5">

            <img src="{{ asset('assets/images/tamu/logo.png') }}" alt="" class="size-14 mb-5 -mt-1 object-scale-down" />

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
    <br>
    <div class="container mx-8">
        @if ($resi->alamat != null)
        <div class="flex justify-between items-start mb-2">
            <p class="text-2xl text-black font-bold">Alamat Pengiriman</p>
            <a href="/alamat/{{ $resi->id }}" class="btn bg-[#00A651] border-none mt-3 w-44 text-xl text-white mb-5">Ubah</a>
        </div>
        <p class="text-white">{{ $resi->nama_penerima }},</p>
        <p class="text-white">{{ $resi->username }}</p>
        <p class="text-white">{{ $resi->alamat }}</p>
        <p class="text-white">{{ $resi->kecamatan }}, {{ $resi->kode_pos }}</p>
        <p class="text-white">{{ $resi->no_hp }}</p>
        <hr class="w-full border-b-2 border-white mt-2">
        @else
        <p class="text-2xl text-black font-bold mb-4">Alamat Pengiriman</p>
        <a href="/alamat/{{ $resi->id }}" class="btn bg-[#00A651] border-none mt-3 w-44 text-xl text-white mb-5">Tambah Alamat</a>
        <hr class="w-full border-b-2 border-white mb-2">
        @endif
        @php
        $total = 0;
        @endphp
        @foreach ($resi->pesanan as $item)
        <div class="grid grid-cols-5 my-5">
            <div class="w-48 rounded-xl ml-10">
                <img src="{{ asset('assets/images/tambahproduk/'.$item->produk->gambar) }}" alt="">
            </div>
            <div class="col-span-4">
                <h1 class="text-2xl text-black">{{ $item->produk->nama }}</h1>
                <h1 class="text-2xl text-black">Rp. {{ number_format($item->harga_satuan * $item->jumlah) }}</h1>
                <h1 class="text-2xl text-black text-end mt-14">{{ $item->jumlah }}x</h1>
            </div>
        </div>
        <hr class="w-full border-b-2 border-white mb-2">
        @php
        $total += $item->harga_satuan * $item->jumlah;
        @endphp

        @endforeach

        <div class="grid grid-cols-5">
            <h1 class="text-white text-xl font-bold">Total Pembayaran</h1>
            <div class="col-span-3">
                <h1 class="text-2xl text-[#136E3B] font-bold">Rp. {{ number_format($total) }}</h1>
            </div>
        </div>
        <form action="/submit-pembayaran/{{ $resi->id }}" method="post">
            @csrf
            <div class="grid grid-cols-5 my-5">
                <div class="col-span-2">
                    <h1 class="text-gray-700 text-xl mb-1">METODE PEMBAYARAN</h1>

                    <select name="metode_pembayaran" id="" class="w-4/6 h-10 text-2xl bg-white text-black border border-4 border-green-400">

                        <option selected disabled hidden></option>
                        <option value="Transfer Bank">Transfer Bank</option>
                        <option value="Bayar di Tempat">Bayar di Tempat</option>
                    </select>
                </div>
                <div class="col-span-3">
                    <h1 class="text-gray-700 text-xl mb-1">PESAN UNTUK PENERIMA (OPSIONAL)</h1>

                    <textarea class="w-full bg-white text-black resize-none border border-4 border-green-400" name="pesan" id="" rows="3"></textarea>

                </div>
            </div>
            <div class="grid grid-cols-2 items-center">
                <a href="{{ route('keranjang.tampil')}}"class="text-2xl text-black font-bold">
                    <img src="{{ asset('assets/icons/kembali.png') }}" alt="" class="inline size-5 mb-1 ml-1">Kembali
                </a>
                <button type="submit" class="btn bg-green-600 text-xl my-3 text-white border-none w-2/5 ms-auto">BAYAR
                    SEKARANG</button>
            </div>
        </form>
</body>

</html>
