<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rincian Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .text-left {
            display: flex;
        }

        .text-left p {
            display: flex;
        }

        .container2 {
            display: flex;
        }

        .container2>div {
            flex: 1;
        }

        hr {
            width: calc(100% - 123px);
        }
    </style>
</head>

<body class="bg-[#618264] h-full pb-5">
    <div class="navbar bg-white sticky top-0 grid grid-cols-2 text-black text-3xl font-bold" style="position: sticky; z-index: 1000;">
        <a href="" class="btn btn-ghost me-auto hover:bg-white mx-5">
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
    <h1 class="text-center text-white text-3xl font-bold mt-15">Rincian Pesanan</h1>
    <div class="flex items-center">
        <img src="./assets/icons/panah kiri.png" alt="" class="w-8 h-8 mt-8 ml-10">
        <p class="text-2xl text-[#B0D9B1] font-bold mt-7 mr-[72%] ml-3">Rincian</p>
    </div>
    </div>
    <hr style="border-color: white; margin-top: 5px; margin-left: 80px; margin-right: 50px;">


    <div class="container2">
        <div class="text-left text-white mt-2" style="margin-left: 96px;">Nomor Pesanan</div>
        <div class="text-left text-white mt-2" style="margin-left: -330px;">: 24032GGVM1HUD</div>
        <div class="text-right text-white mr-16 mt-3">Status Pesanan : Sedang Dikirim</div>
    </div>


    <div class="container2">
        <div class="text-left text-white mt-2" style="margin-left: 96px;">Nama</div>
        <div class="text-left text-white mt-2" style="margin-left: -900px;">: Marsya Huriyah</div>
    </div>

    <div class="container2">
        <div class="text-left text-white mt-2" style="margin-left: 96px;">Nomor Hp</div>
        <div class="text-left text-white mt-2" style="margin-left: -900px;">: 08341428919</div>
    </div>

    <div class="container2">
        <div class="text-left text-white mt-2" style="margin-left: 96px;">Alamat</div>
        <div class="text-left text-white mt-2" style="margin-left: -900px;">: Orchard Park blok X no 505, Batam Centre, 29431</div>
    </div>

    <div class="container2">
        <div class="text-left text-white mt-2" style="margin-left: 96px;">Tanggal Pesan</div>
        <div class="text-left text-white mt-2" style="margin-left: -900px;">: 27/03/2024</div>
    </div>

    <div class="container2">
        <div class="text-left text-white mt-2" style="margin-left: 96px;">Metode Pembayaran</div>
        <div class="text-left text-white mt-2" style="margin-left: -900px;">: Transfer Bank</div>
    </div>

    <hr style="border-color: white; margin-top: 25px; margin-right: 50px; margin-left: 84px;">

    <div class="container2">
        <div class="text-left text-white ml-20 mt-2" style="margin-left: 96px;">Gambar</div>
        <div class="text-left text-white mr-16 mt-2" style="margin-left: -25px;">Nama</div>
        <div class="text-left text-white mr-16 mt-2" style="margin-left: 38px;">Jumlah</div>
        <div class="text-left text-white mr-16 mt-2" style="margin-left: 85px;">Harga</div>
        <div class="text-left text-white mr-16 mt-2" style="margin-left: 118px;">Total</div>
    </div>

    <hr style="border-color: white; margin-top: 12px; margin-right: 50px; margin-left: 84px;">

    <div class="container2">
        <div class="text-left text-white ml-20 mt-2" style="margin-left: 96px;">
            <img src="./assets/images/outdoor/gambar 5 monstera.png" alt="Gambar" class="inline-block h-6" style="width: 100px; height: 100px;">
        </div>
        <div class="text-left text-white mr-16 mt-2" style="margin-left: -35px;">Monstera Deliciosa</div>
        <div class="text-left text-white mr-16 mt-2" style="margin-left: 44px;">1</div>
        <div class="text-left text-white mr-16 mt-2" style="margin-left: 54px;">165.000</div>
        <div class="text-left text-white mr-16 mt-2" style="margin-left: 106px;">165.000</div>
    </div>

    <hr style="border-color: white; margin-top: 12px; margin-right: 50px; margin-left: 84px;">

    <div class="container2">
        <div class="text-left text-white ml-20 mt-2" style="margin-left: 96px;">
            <img src="./assets/images/indoor/gambar 4 calla.png" alt="Gambar" class="inline-block h-6" style="width: 100px; height: 100px;">
        </div>
        <div class="text-left text-white mr-16 mt-2" style="margin-left: -35px;">Calla Lily</div>
        <div class="text-left text-white mr-16 mt-2" style="margin-left: 44px;">1</div>
        <div class="text-left text-white mr-16 mt-2" style="margin-left: 54px;">200.000</div>
        <div class="text-left text-white mr-16 mt-2" style="margin-left: 106px;">200.000</div>
    </div>

    <hr style="border-color: white; margin-top: 12px; margin-right: 50px; margin-left: 84px;">

    <div class="container2">
        <div class="text-left text-white font-bold ml-20 mt-4 " style="margin-left: 795px;">Total</div>
        <div class="text-left text-white font-bold mr-16 mt-4" style="margin-left: 160px;">365.000</div>
    </div>

</body>