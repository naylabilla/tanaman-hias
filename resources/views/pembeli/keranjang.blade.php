<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/9abb4e3af2.js" crossorigin="anonymous"></script>

    <style>
          body {
            background-image: url('assets/images/tamu/bg.png');
            background-size: contain;
            background-position: center;
        }

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
            margin-right: 125px;
        }

        .product-price {
            margin-right: 250px;
        }

        .product-total {
            margin-right: 125px;
        }

        .button-delete {
            margin-right: 120px;
        }
    </style>
</head>

<body class="bg-[#618264] h-full pb-5">
    <div class="navbar bg-white sticky top-0 grid grid-cols-2 text-black text-3xl font-bold" style="position: sticky; z-index: 1000; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
        <a href="{{ route('dashboard')}}" class="btn btn-ghost me-auto hover:bg-white mx-5">
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
        <div class="bg-green-600 p-5 mt-5 ml-16 flex w-full max-w-6xl rounded-lg relative">
            <p class="text-white text-xl w-1/4 text-center">Produk</p>
            <div class="w-1/3 relative">
                <p class="text-white text-xl text-center absolute left-14">Nama</p>
            </div>
            <p class="text-white text-xl w-1/3 text-center -ml-16 ">Jumlah</p>
            <p class="text-white text-xl w-1/6 text-center ">Harga</p>
            <p class="text-white text-xl w-1/4 text-center ">Total</p>
            <p class="text-white text-xl w-1/6 text-center">Aksi</p>
        </div>

        @foreach($keranjang as $item)
        <div class="product-row mt-4 ml-16">
            <div class="product-info">
                <input type="checkbox" class="form-checkbox text-green-600 rounded check_tunggal -mt-32 ml-4" />
                <div class="product-pict">
                    <img src="/assets/images/tambahproduk/{{$item->produk->gambar}}" alt="foto produk" class="ml-2 w-40 h-40" />
                </div>

                <div class="product-details">
                    <p class="text-white text-xl product-name">{{ $item->produk->nama }}</p>
                    <p class="text-white">{{ $item->produk->kategori }}</p>
                </div>
            </div>
            <div class="flex items-center space-x-2 product-quantity ">
                <svg class="w-6 h-6 text-white cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" onclick="decreaseQuantity({{ $item->id_keranjang }}) ">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <span class="mx-5 text-white jumlah" id="quantity-{{ $item->id_keranjang }}">{{ $item->jumlah }}</span>
                <svg class="w-6 h-6 text-white cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" onclick="increaseQuantity({{ $item->id_keranjang }})">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </div>

            <p class="text-white text-xl product-price harga" data_harga="{{ $item->produk->harga }}">
                Rp{{ number_format($item->produk->harga, 0, ',', '.') }}</p>
            <p class="text-white text-xl product-total total_harga absolute right-44">
                Rp{{ number_format($item->produk->harga * $item->jumlah, 0, ',', '.') }}</p>
            <form action="{{ route('keranjang.hapus', $item->id_keranjang) }}" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus produk ini dari keranjang ?')">

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-ghost">
                    <svg class="w-6 h-6 text-white dark:text-white button-delete" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                    </svg>
                </button>
            </form>
        </div>
        <hr class="mt-4 ml-16 mb-20">
        @endforeach
    </div>

    <form id="submit-pesanan-form" method="POST" action="/submit-pesanan">
        @csrf
        <input type="hidden" name="keranjang" id="keranjang-input">
        <input type="hidden" name="jumlah" id="jumlah-input">
        <div class="fixed bottom-0 w-full bg-white border-t-2 border-white-900">
            <div class="container mx-auto p-0 my-2">
                <table class="w-full mb-0">
                    <thead class="align-middle relative">
                        <tr>
                            <th class="text-blue-900 text-xl absolute left-20 top-5 ">
                                <input class="form-check-input -ml-1 " id="pilih_semua_checkbox" type="checkbox">
                                Pilih Semua
                            </th>
                            <!-- <th class="text-2xl text-blue-900" style="width: 400px" colspan="2">
                                Pilih Semua
                            </th> -->
                            <th class="text-2xl text-blue-900 pl-96" colspan="2">
                                Total (<span id="jumlah_produk">0</span> Produk)
                            </th>
                            <th class="text-right text-xl text-blue-900 absolute right-60 top-5" id="total_harga_akhir">
                                Rp0
                            </th>
                            <th class="">
                                <button class="btn btn-lg text-xl font-semibold bg-blue-700 text-white w-25 mr-5" type="submit" onclick="submitPesanan()">
                                    Periksa
                                </button>
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </form>

    <script>
        function increaseQuantity(cartItemId) {
            const quantitySpan = document.getElementById(`quantity-${cartItemId}`);
            let quantity = parseInt(quantitySpan.textContent);
            quantitySpan.textContent = quantity + 1;

            const hargaElement = quantitySpan.closest('.product-row').querySelector('.harga');
            const totalElement = quantitySpan.closest('.product-row').querySelector('.total_harga');
            const harga = parseFloat(hargaElement.getAttribute('data_harga'));
            totalElement.textContent = 'Rp' + ((quantity + 1) * harga).toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ".");

            update_total();
        }

        function decreaseQuantity(cartItemId) {
            const quantitySpan = document.getElementById(`quantity-${cartItemId}`);
            let quantity = parseInt(quantitySpan.textContent);
            if (quantity > 1) {
                quantitySpan.textContent = quantity - 1;

                const hargaElement = quantitySpan.closest('.product-row').querySelector('.harga');
                const totalElement = quantitySpan.closest('.product-row').querySelector('.total_harga');
                const harga = parseFloat(hargaElement.getAttribute('data_harga'));
                totalElement.textContent = 'Rp' + ((quantity - 1) * harga).toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g,
                    ".");
            }

            update_total();
        }

        function update_total() {
            const checkboxes = document.querySelectorAll(".check_tunggal");
            let jumlah_produk = 0;
            let total_harga_akhir = 0;

            checkboxes.forEach(function(checkbox) {
                const row = checkbox.closest(".product-row");
                const is_checked = checkbox.checked;
                const quantityElement = row.querySelector(".jumlah");
                const hargaElement = row.querySelector(".harga");

                if (is_checked) {
                    const quantity = parseInt(quantityElement.textContent);
                    const harga = parseFloat(hargaElement.getAttribute("data_harga"));
                    total_harga_akhir += quantity * harga;
                    jumlah_produk++;
                }
            });

            const pilih_semua_checkbox = document.querySelector("#pilih_semua_checkbox");
            pilih_semua_checkbox.checked = jumlah_produk === checkboxes.length;

            const jumlah_produk_element = document.querySelector("#jumlah_produk");
            const total_harga_akhir_element = document.querySelector("#total_harga_akhir");

            jumlah_produk_element.innerHTML = jumlah_produk;
            total_harga_akhir_element.innerHTML = "Rp" + total_harga_akhir.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g,
                ".");
        }

        function handle_checkbox_change(event) {
            update_total();
        }

        const checkboxes = document.querySelectorAll(".check_tunggal");
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener("change", handle_checkbox_change);
        });

        function handle_pilih_semua_change(event) {
            const pilih_semua_checkbox = event.target;
            const is_checked = pilih_semua_checkbox.checked;

            checkboxes.forEach(function(checkbox) {
                checkbox.checked = is_checked;
            });

            update_total();
        }

        const pilih_semua_checkbox = document.querySelector("#pilih_semua_checkbox");
        pilih_semua_checkbox.addEventListener("change", handle_pilih_semua_change);

        function submitPesanan() {
            const selectedItems = [];
            const selectedQuantities = [];

            checkboxes.forEach(function(checkbox) {

                if (checkbox.checked) {
                    const row = checkbox.closest(".product-row");
                    const itemId = row.querySelector(".jumlah").id.split('-')[1];
                    const quantity = parseInt(row.querySelector(".jumlah").textContent);
                    selectedItems.push(itemId);
                    selectedQuantities.push(quantity);
                }
            });

            document.getElementById('keranjang-input').value = JSON.stringify(selectedItems);
            document.getElementById('jumlah-input').value = JSON.stringify(selectedQuantities);
            document.getElementById('submit-pesanan-form').submit();
        }
    </script>

</body>

</html>