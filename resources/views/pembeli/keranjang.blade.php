<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .product-row {
            display: flex;
            align-items: center;
        }
        .product-info {
            display: flex;
            align-items: center;
            flex: 6;
            position: relative;
        }
        .product-details {
            display: flex;
            flex-direction: column;
            margin-left: 60px;
        }
        .product-quantity {
            margin-right: 105px;
        }
        .product-price {
            margin-right: 60px;
        }
       
        .product-total {
            margin-right: 100px;
        }
    </style>
</head>

<body class="bg-[#618264] h-full pb-5">
    <div class="navbar bg-white sticky top-0 grid grid-cols-2 text-black text-3xl font-bold" style="position: sticky; z-index: 1000; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
        <a href="" class="btn btn-ghost me-auto hover:bg-white mx-5">
            <img src="./assets/images/tamu/logo.png" alt="" class="size-14 mb-5 -mt-1 object-scale-down" />
            <p class="text-2xl text-[#78A07C] mb-6 text-bold">Lushtilvy</p>
        </a>
        <div class="ms-auto">
            <a href="/keranjang" class="btn btn-ghost hover:bg-white">
                <img src="./assets/icons/navbar keranjang.png" alt="" class="w-12" />
                <p class="text-2xl text-[#78A07C]">Keranjang</p>
            </a>
            <a href="/riwayat_pesanan" class="btn btn-ghost hover:bg-white">
                <img src="./assets/icons/navbar pesanan.png" alt="" class="w-12" />
                <p class="text-2xl text-[#78A07C]">Pesanan</p>
            </a>
            <a href="{{ route('profile.index') }}" class="btn btn-ghost hover:bg-white">
                <img src="./assets/icons/user1.png" alt="" class="w-10" />
                <p class="text-2xl text-[#78A07C]">Profil</p>
            </a>
            <div class="border-l-4 border-black">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="btn btn-ghost">
                        <img src="/assets/icons/logout.png" alt="" class="w-10" />
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="bg-green-600 p-5 mt-5 ml-16 flex w-full max-w-6xl rounded-lg">
            <p class="text-white text-xl w-1/4 text-center">Produk</p>
            <p class="text-white text-xl w-1/3 text-center">Nama</p>
            <p class="text-white text-xl w-1/3 text-center">Jumlah</p>
            <p class="text-white text-xl w-1/6 text-center">Harga</p>
            <p class="text-white text-xl w-1/4 text-center">Total</p>
            <p class="text-white text-xl w-1/6 text-center">Aksi</p>
        </div>

        @foreach($keranjang as $item)
        <div class="product-row mt-4 ml-16">
            <div class="product-info">
                <input type="checkbox" class="form-checkbox text-green-600 rounded rounded -mt-32 ml-4" />
                <div class="product-pict">
                <img src="/assets/images/tambahproduk/{{$item->produk->gambar}}" alt="foto produk" class="ml-2 w-40 h-40" />
                </div>

                <div class="product-details">
                    <p class="text-white text-xl product-name">{{ $item->produk->nama }}</p>
                    <p class="text-white">{{ $item->produk->kategori }}</p>
                </div>
            </div>
            <div class="flex items-center space-x-2 product-quantity">
                <svg class="w-6 h-6 text-white cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" onclick="decreaseQuantity({{ $item->id_keranjang }}) ">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <span class="mx-5 text-white" id="quantity-{{ $item->id_keranjang }}">{{ $item->jumlah }}</span>
                <svg class="w-6 h-6 text-white cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" onclick="increaseQuantity({{ $item->id_keranjang }})">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
            </div>

            <p class="text-white text-xl product-price">Rp{{ number_format($item->produk->harga, 0, ',', '.') }}</p>
            <p class="text-white text-xl product-total">Rp{{ number_format($item->produk->harga, 0, ',', '.') }}</p>
            <form action="{{ route('keranjang.hapus', $item->id_keranjang) }}" method="POST">

                @csrf
                @method('DELETE')
                <svg class="w-6 h-6 text-white dark:text-white mr-32" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                </svg>
    </form>
        </div>
        <hr class="mt-4 ml-16">
        @endforeach
    </div>

    <script>
        function increaseQuantity(cartItemId) {
            const quantitySpan = document.getElementById(`quantity-${cartItemId}`);
            let quantity = parseInt(quantitySpan.textContent);
            quantitySpan.textContent = quantity + 1;

            // You can add AJAX call here to update the server-side quantity
        }

        function decreaseQuantity(cartItemId) {
            const quantitySpan = document.getElementById(`quantity-${cartItemId}`);
            let quantity = parseInt(quantitySpan.textContent);
            if (quantity > 1) {
                quantitySpan.textContent = quantity - 1;
            }

            // You can add AJAX call here to update the server-side quantity
        }
    </script>

</body>

</html>
