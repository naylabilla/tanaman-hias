    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Rincian Pesanan</title>
        <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    </head>

    <!-- Navbar -->
    <body class="h-screen pb-5" style="background-image: url('{{ asset('assets/images/tamu/bg.png') }}'); background-size: contain; background-position: center;">
    <div class="navbar bg-white sticky top-0 grid grid-cols-2 text-black text-3xl font-bold" style="
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

        <!-- Title -->
        <h1 class="text-center text-black text-3xl font-bold mt-10">
            Rincian Pesanan
        </h1>

        <!-- Back Button and Subtitle -->
        <div class="flex items-center mt-8 ml-10">
        <a href="{{ route('riwayat-pesanan.index') }}" class="flex items-center">
            <img src="{{ asset('assets/icons/panah kiri.png') }}" alt="" class="w-8 h-8" />
            <div class="text-2xl text-black font-bold ml-3">Rincian</div>
        </a>
        </div>

        <hr class="border-black mx-20 my-2" style="width: calc(100% - 123px);" />

        <!-- Order Details -->
        <div class="mx-10 mt-2 text-black">
            <div class="flex justify-between">
                <div class="grid grid-cols-3 gap-2">
                    <p class="ml-14 col-span-1">Nomor Pesanan</p>
                    <p class="col-span-1">: {{ $resi_id }}</p>
                </div>
                <p class="mr-8" style="color: #475569;">Status Pesanan: {{ $pesananGroup->first()->status }}</p>
            </div>
            <br/>

            <div class="grid grid-cols-3 gap-2">
                <p class="ml-14 col-span-1">Nama</p>
                <p class="col-span-1" style="margin-left: -12rem;">: {{ $pesananGroup->first()->resi->nama_penerima }}</p>
            </div>
            <div class="grid grid-cols-3 gap-2">
                <p class="ml-14 col-span-1">Nomor Hp</p>
                <p class="col-span-2" style="margin-left: -12rem;">: {{ $pesananGroup->first()->resi->no_hp }}</p>
            </div>
            <div class="grid grid-cols-3 gap-2">
                <p class="ml-14 col-span-1">Alamat</p>
                <p class="col-span-2" style="margin-left: -12rem;">: {{ $pesananGroup->first()->resi->alamat }}</p>
            </div>
            <div class="grid grid-cols-3 gap-2">
                <p class="ml-14 col-span-1">Tanggal Pesan</p>
                <p class="col-span-2" style="margin-left: -12rem;">: {{ $pesananGroup->first()->resi->updated_at }}</p>
            </div>
            <div class="grid grid-cols-3 gap-2">
                <p class="ml-14 col-span-1">Metode Pembayaran</p>
                <p class="col-span-2" style="margin-left: -12rem;">: {{ $pesananGroup->first()->resi->metode_pembayaran }}</p>
            </div>
        </div>

        <br />
        <hr class="border-black my-2 mx-20" style="width: calc(100% - 123px);" />

        <!-- Order Items Header -->
        <div class="flex justify-between text-black mx-10 mt-2 ml-24">
            <p class="ml-10">Gambar</p>
            <p class="-ml-12">Nama</p>
            <p style="margin-right: -4.5rem;">Jumlah</p>
            <p style="margin-right: -3.7rem;">Harga</p>
            <p class="mr-16">Total</p>
        </div>

        <hr class="border-black my-2 mx-20" style="width: calc(100% - 123px);" />

        <!-- Order Items -->
        @foreach ($pesananGroup as $pesanan)
        <div class="flex justify-between items-center mx-10 mt-2 space-y-4 text-black">
            <img src="{{ asset('assets/images/tambahproduk/'.$pesanan->produk->gambar) }}"
                alt="{{ $pesanan->produk->nama }}" class="w-24 h-24" style="margin-left: 5rem;" />
            <p style="margin-left: -5rem;">{{ $pesanan->produk->nama }}</p>
            <p style="margin-right: -4rem;">{{ $pesanan->jumlah }}</p>
            <p style="margin-right: -5rem;">{{ number_format($pesanan->harga_satuan, 0, ',', '.') }}</p>
            <p style="margin-right: 3.5rem;">{{ number_format($pesanan->jumlah * $pesanan->harga_satuan, 0, ',', '.') }}</p>
        </div>
        <hr class="border-black my-2 mx-20" style="width: calc(100% - 123px);" />
        @endforeach

        <!-- Total -->
        <div class="flex justify-end font-bold mx-10 mt-4">
            <p class="mr-48" style="text-black font-size: 1.5rem;">Total</p>
            <p class="mr-10" style="color: #15803d; ">Rp{{ number_format($totalHarga, 0, ',', '.') }}</p>
        </div>
    </body>

    </html>