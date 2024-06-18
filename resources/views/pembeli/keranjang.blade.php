<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .quantity-button {
            display: flex;
            align-items: center;
        }

        .quantity-button span {
            width: 2rem;
            text-align: center;
        }
    </style>
</head>

<body class="bg-green-500">
    <div class="navbar bg-white sticky top-0 flex justify-between px-8 py-1 text-3xl font-medium">
        <a href="#" class="flex items-center space-x-4" style="margin-left: 20px;">
            <img src="./assets/images/tamu/logo.png" alt="" class="w-12 object-scale-down">
            <p class="text-2xl" style="color: #78A07C;">Lushtilvy</p>
        </a>
        <div class="flex items-center space-x-6">
            <a href="/keranjang" class="flex items-center space-x-2 hover:text-[#78A07C]">
                <img src="./assets/icons/navbar keranjang.png" alt="" class="w-12">
                <p class="text-2xl" style="color: #78A07C;">Keranjang</p>
            </a>
            <a href="/pesanan" class="flex items-center space-x-2">
                <img src="./assets/icons/navbar pesanan.png" alt="" class="w-12">
                <p class="text-2xl"  style="color: #78A07C;">Pesanan</p>
            </a>
            <div class="border-l-4 border-black">
                <a href="/logout" class="btn btn-ghost hover:bg-white ">
                    <img src="./assets/icons/user1.png" alt="" class="w-10 ml-4">
                </a>
            </div>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="bg-green-600 p-5 mt-5 ml-24 flex w-full max-w-6xl rounded-lg">
            <p class="text-white text-xl ml-20">Produk</p>
            <p class="text-white text-xl ml-48">Nama</p>
            <p class="text-white text-xl ml-64">Jumlah</p>
            <p class="text-white text-xl ml-64">Harga</p>
        </div>

        <div class="mt-4 ml-32 flex items-center">
            <input type="checkbox" class="form-checkbox text-green-600 rounded" />
            <img src="assets/images/outdoor/gambar 5 monstera.png" alt="foto produk" class="ml-4 w-40 h-40" />
            <p class="text-white text-xl ml-20">Monstera Deliciosa <br> Outdoor</p>
            <div class="quantity-button ml-44">
                <button onclick="decreaseQuantity(this)" class="text-white">
                    <i class="fas fa-minus-circle"></i>
                </button>
                <span class="mx-5 text-white">1</span>
                <button onclick="increaseQuantity(this)" class="text-white">
                    <i class="fas fa-plus-circle"></i>
                </button>
            </div>
            <p class="text-white text-xl ml-52">Rp. 230.000</p>
            <button class="text-white ml-10">
                <i class="fa-solid fa-trash"></i>
            </button>
        </div>

        <br>
        <hr>

        <div class="mt-4 ml-32 flex items-center">
            <input type="checkbox" class="form-checkbox text-green-600 rounded" />
            <img src="assets/images/indoor/gambar 4 calla.png" alt="foto produk" class="ml-4 w-40 h-40" />
            <p class="text-white text-xl ml-20">Calla Lily <br> Indoor</p>
            <div class="quantity-button ml-64">
                <button onclick="decreaseQuantity(this)" class="text-white">
                    <i class="fas fa-minus-circle"></i>
                </button>
                <span class="mx-5 text-white">1</span>
                <button onclick="increaseQuantity(this)" class="text-white">
                    <i class="fas fa-plus-circle"></i>
                </button>
            </div>
            <p class="text-white text-xl ml-56">Rp. 200.000</p>
            <button class="text-white ml-10">
                <i class="fa-solid fa-trash"></i>
            </button>
        </div>

        <br>
        <hr>

        <div class="mt-4 ml-32 flex items-center">
            <input type="checkbox" class="form-checkbox text-green-600 rounded" />
            <img src="assets/images/indoor/gambar 3 anthurium.png" alt="foto produk" class="ml-4 w-40 h-40" />
            <p class="text-white text-xl ml-20">Anthurium Andraenum <br> Indoor</p>
            <div class="quantity-button ml-36">
                <button onclick="decreaseQuantity(this)" class="text-white">
                    <i class="fas fa-minus-circle"></i>
                </button>
                <span class="mx-5 text-white">1</span>
                <button onclick="increaseQuantity(this)" class="text-white">
                    <i class="fas fa-plus-circle"></i>
                </button>
            </div>
            <p class="text-white text-xl ml-52">Rp. 300.000</p>
            <button class="text-white ml-10">
                <i class="fa-solid fa-trash"></i>
            </button>
        </div>

        <br>
    </div>

    <div class="mt-4 flex items-center justify-end">
        <p class="text-gray-300 text-2xl mr-32">Total Pembayaran</p>
        <p class="text-white text-2xl mr-40">Rp. 730.000</p>
    </div>

    <div class="flex items-center justify-end mt-6 mr-40">
        <button class="bg-green-600 text-white font-bold py-2 px-4 rounded text-xl">Lanjutkan Pesanan</button>
    </div>

    <div class="grid grid-cols-2 items-center ml-8 mb-6">
        <a href="/dashboardlama" class="text-2xl text-black font-bold">
            <i class="fa-solid fa-chevron-left w-6 mr-2 mb-6"></i>Kembali
        </a>
    </div>

    <script>
        function increaseQuantity(button) {
            const span = button.previousElementSibling;
            let quantity = parseInt(span.textContent);
            span.textContent = quantity + 1;
        }

        function decreaseQuantity(button) {
            const span = button.nextElementSibling;
            let quantity = parseInt(span.textContent);
            if (quantity > 1) {
                span.textContent = quantity - 1;
            }
        }
    </script>
</body>

</html>
