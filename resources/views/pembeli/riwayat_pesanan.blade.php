<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#618264] h-screen">
    <h1 class="text-center text-white text-3xl font-bold">Riwayat Pesanan</h1>
    <div class="flex items-center text-[#B0D9B1] text-2xl mt-8">
        <i class="fas fa-arrow-left ml-12"></i>
        <div class="text-left font-semibold pb-2 border-b-2 border-white w-5/6 mx-auto ml-11">
            Kembali | Pesanan
        </div>
    </div>

    <br>

    <div class="grid grid-cols-1 grid-flow-row gap-0 border border-white w-5/6 mx-auto">
        <div class="h-20 flex justify-center border text-left text-white pl-2 flex-col relative">
            <div class="text-left pl-2">
                <p>No. Pesanan: 240320GGVM1HUD</p>
                <p>Tanggal Pesanan: 27/03/2024</p>
                <p>Status Pengiriman: Selesai</p>
            </div>
            <button class="bg-[#00A651] text-white px-8 py-1 rounded absolute top-6 right-3">Cetak Resi</button>
        </div>

        <div class="h-80 flex items-center justify-center border relative">
            <div class="text-white text-lg absolute top-3 left-10 text-left flex items-center">
                <img src="assets/images/outdoor/gambar 5 monstera.png" class="w-32 h-32 mr-5 pl-2">
                <div>
                    <p>Monstera Deliciosa</p>
                    <p>Outdoor</p>
                </div>
            </div>
            <div class="text-white text-lg absolute top-12 right-10 text-right">
                <p>x1</p>
                <p>Rp. 165.000</p>
            </div>
            <hr class="w-11/12 border-t border-gray-300 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <div class="text-white text-lg absolute bottom-5 left-10 text-left flex items-center">
                <img src="assets/images/indoor/gambar 4 calla.png" class="w-32 h-32 mr-5 pl-2">
                <div>
                    <p>Calla Lily</p>
                    <p>Indoor</p>
                </div>
            </div>
            <div class="text-white text-lg absolute bottom-12 right-10 text-right">
                <p>x1</p>
                <p>Rp. 200.000</p>
            </div>
        </div>

        <div class="h-14 flex justify-between border text-white pl-2 flex-col relative">
            <p class="text-lg absolute top-3 pl-2">Total Pesanan</p>
            <p class="text-3xl text-[#136E3B] font-bold absolute top-1 right-3">Rp. 365.000</p>
        </div>
    </div>
</body>

</html>