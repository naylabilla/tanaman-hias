<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk Penjual</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#618264] h-screen">
    <div class="navbar bg-[#B0D9B1] fixed top-0 rounded-b-3xl grid grid-cols-3 text-black text-3xl font-bold">
        <a href="{{ route('dashboard') }}" class="btn btn-ghost text-xl me-auto">
            <img src="/assets/icons/user.png" alt="" class="w-10">
            <p>Admin</p>
        </a>
        <h1 class="mx-auto">Edit Produk</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="btn btn-ghost ms-auto">
                <img src="./assets/icons/logout.png" alt="" class="w-10">
            </button>
        </form>
    </div>
    <div class="fixed left-0 top-[5.5rem] h-screen bg-[#B0D9B1] w-[23%]">
        <div class="bg-transparent w-48 min-h-48 rounded-lg flex mx-auto my-5">
            <img src="/assets/images/tamu/logo.png" alt="" class="resize pl-1">
        </div>
        <div class="flex justify-center grid grid-rows-3 gap-5">
            <a href="{{ route('dashboard') }}"
                class="btn bg-[#B0D9B1] font-bold text-black text-2xl border-none w-72 rounded-full hover:bg-[#27603F] flex items-center gap-4">
                <img src="/assets/icons/beranda.png" alt="" class="w-9 h-9 mr-4">
                <span>Beranda</span>
            </a>
            <a href="{{ route('produk.index') }}"
                class="btn bg-[#327C54] font-bold text-black text-2xl border-none w-72 rounded-full hover:bg-[#27603F] flex items-center gap-4">
                <img src="/assets/icons/produk.png" alt="" class="w-9 h-9 mr-4">
                <span class="self-center col-span-2 mr-3">Produk</span>
            </a>
            <a href="{{ route('rekapan.index')}}"
                class="btn bg-[#B0D9B1] font-bold text-black text-2xl border-none w-72 rounded-full hover:bg-[#27603F] flex items-center gap-4">
                <img src="/assets/icons/rekapan.png" alt="" class="w-9 h-9 mr-4">
                <span class="self-center col-span-2">Rekapan</span>
            </a>
        </div>
    </div>

    {{-- PRODUK --}}
    <div class="rounded-lg absolute top-[5.5rem] ml-[25%] mr-6 bg-[#D0E7D2] w-[73.5%] h-[82%]">
        @if ($errors->any())
        <div class="pt-2">
            <div class="alert alert-danger w-3/4 ml-4 bg-red-500 text-white ">
                <ul>
                    @foreach ($errors->all() as $item)
                    <li class="italic text-xs font-semibold">{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif

        <form class="rounded-box pl-8 pt-6" action="{{ url('produk/'.$data->kode) }}" method="post" enctype="#">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-2 gap-4">


                <div class="">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                        Nama
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-[95%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="nama" type="text" placeholder="" value="{{ $data->nama }}" name="nama">
                </div>
                <div class="">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                        Stok
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-[30%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="" type="number" placeholder="" value="{{ $data->stok }}" name="stok">
                </div>
                <div class="">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                        Tinggi
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-[30%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="" type="number" placeholder="" value="{{ $data->tinggi }}" name="tinggi">
                </div>
                <div class="">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                        Kategori
                    </label>                    
                    <input
                        class="shadow appearance-none border rounded w-[40%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="" type="text" placeholder="" value="{{ $data->kategori }}" name="kategori" >
                </div>
                <div class="">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                        Harga
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-[50%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="" type="number" placeholder="" value="{{ $data->harga }}" name="harga">
                </div>
                <div class="">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                        Deskripsi
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-[95%] h-[100%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        rows="2" name="deskripsi">{{ $data->deskripsi }}</textarea>
                    <!-- <input class="shadow appearance-none border rounded w-[95%] h-[100%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" placeholder="" value="{{ $data->deskripsi }}" name="deskripsi" > -->
                </div>
                <div class="col-span-2 -mt-5 ">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                        Gambar Produk
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-[40%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="nama" type="file" placeholder="" value="/assets/images/tambahproduk/{{ $data->gambar }}"
                        name="gambar">
                </div>
                <div class="flex justify-center items-center mt-4 ">

                    <input type="submit" value="Simpan" class="btn text-white font-bold w-44 text-lg  "
                        style="background-color: #327C54 ">


                </div>
                <div class="flex justify-center items-center mt-4 ">


                    <button class="btn text-white font-bold w-44 text-lg"> Kembali
                        <a href="{{ route('produk.index')}}"></a>
                    </button>

                </div>


            </div>

        </form>

    </div>

</body>

</html>
