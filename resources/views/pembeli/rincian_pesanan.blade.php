<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rincian Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <style>
        hr {
            width: calc(100% - 123px);
        }

        .product-pict {
            margin-left: 5rem;
        }

        .product-name {
            margin-left: -5rem;
        }

        .product-pieces {
            margin-right: -4rem;
        }

        .product-price {
            margin-right: -5.5rem;
        }

        .product-total {
            margin-right: 3.5rem;
        }

    </style>
</head>

<body class="bg-[#618264] h-full pb-5">
    <div class="navbar bg-white sticky top-0 grid grid-cols-2 text-black text-3xl font-bold"
        style="position: sticky; z-index: 1000">
        <a href="" class="btn btn-ghost me-auto hover:bg-white mx-5">
            <img src="{{ asset('assets/images/tamu/logo.png') }}" alt="" class="size-14 mb-5 -mt-1 object-scale-down" />
            <p class="text-2xl text-[#78A07C] mb-6 text-bold">Lushtilvy</p>
        </a>
        <div class="ms-auto">
            <a href="/keranjang" class="btn btn-ghost hover:bg-white">
                <img src="{{ asset('assets/icons/navbar keranjang.png') }}" alt="" class="w-12" />
                <p class="text-2xl text-[#78A07C]">Keranjang</p>
            </a>
            <a href="/pesanan" class="btn btn-ghost hover:bg-white">
                <img src="{{ asset('assets/icons/navbar pesanan.png') }}" alt="" class="w-12" />
                <p class="text-2xl text-[#78A07C]">Pesanan</p>
            </a>
            <div class="border-l-4 border-black">
                <a href="/logout" class="btn btn-ghost hover:bg-white">
                    <img src="{{ asset('assets/icons/user1.png') }}" alt="" class="w-10" />
                </a>
            </div>
        </div>
    </div>
    <!-- Title -->
    <h1 class="text-center text-white text-3xl font-bold mt-10">
        Rincian Pesanan
    </h1>

    <!-- Back Button and Subtitle -->
    <div class="flex items-center mt-8 ml-10">
        <img src="{{ asset('assets/icons/panah kiri.png') }}" alt="Back" class="w-8 h-8" />
        <p class="text-2xl text-[#B0D9B1] font-bold ml-3">Rincian</p>
    </div>

    <hr class="border-white mx-20 my-2" />




    <!-- Order Details -->
    <div class="mx-10 mt-2 text-white">
        <div class="flex justify-between">
            <div class="grid grid-cols-3 gap-2">
                <p class="ml-14 col-span-1">Nomor Pesanan</p>
                <p class="col-span-1">: {{ $resi_id }}</p>
            </div>
            <p class="mr-8">Status Pesanan: {{ $pesananGroup->first()->status }}</p>
        </div>
        <br />

        <div class="grid grid-cols-3 gap-2">
            <p class="ml-14 col-span-1">Nama</p>
            <p class="col-span-1 -ml-48">: {{ $pesananGroup->first()->resi->nama_penerima }}</p>
        </div>
        <div class="grid grid-cols-3 gap-2">
            <p class="ml-14 col-span-1">Nomor Hp</p>
            <p class="col-span-2 -ml-48">: {{ $pesananGroup->first()->resi->no_hp }}</p>
        </div>
        <div class="grid grid-cols-3 gap-2">
            <p class="ml-14 col-span-1">Alamat</p>
            <p class="col-span-2 -ml-48">: {{ $pesananGroup->first()->resi->alamat }}</p>
        </div>
        <div class="grid grid-cols-3 gap-2">
            <p class="ml-14 col-span-1">Tanggal Pesan</p>
            <p class="col-span-2 -ml-48">: {{ $pesananGroup->first()->resi->updated_at }}</p>
        </div>
        <div class="grid grid-cols-3 gap-2">
            <p class="ml-14 col-span-1">Metode Pembayaran</p>
            <p class="col-span-2 -ml-48">: {{ $pesananGroup->first()->resi->metode_pembayaran }}</p>
        </div>
    </div>

    <br />
    <hr class="border-white my-2 mx-20" />

    <!-- Order Items Header -->
    <div class="flex justify-between text-white mx-10 mt-2 ml-24">
        <p class="ml-10">Gambar</p>
        <p class="mr-12">Nama</p>
        <p class="-mr-16">Jumlah</p>
        <p class="-mr-14">Harga</p>
        <p class="mr-16">Total</p>
    </div>

    <hr class="border-white my-2 mx-20" />

    <!-- Order Items -->
    @foreach ($pesananGroup as $pesanan)
    <div class="flex justify-between items-center mx-10 mt-2 space-y-4 text-white">
        <img src="{{ asset('assets/images/tambahproduk/'.$pesanan->produk->gambar) }}"
            alt="{{ $pesanan->produk->nama }}" class="w-24 h-24 product-pict" />
        <p class="product-name">{{ $pesanan->produk->nama }}</p>
        <p class="product-pieces">{{ $pesanan->jumlah }}</p>
        <p class="product-price">{{ number_format($pesanan->harga_satuan, 0, ',', '.') }}</p>
        <p class="product-total">{{ number_format($pesanan->jumlah * $pesanan->harga_satuan, 0, ',', '.') }}</p>
    </div>
    <hr class="border-white my-2 mx-20" />
    @endforeach

    <!-- Total -->
    <div class="flex justify-end font-bold text-white mx-10 mt-4">
        <p class="mr-44">Total</p>
        <p class="mr-10">Rp{{ number_format($totalHarga, 0, ',', '.') }}</p>
    </div>


</html>
