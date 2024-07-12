<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk Penjual</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-[#618264] h-screen">

    <body class="bg-[#618264] h-screen">
        <div class="navbar bg-[#B0D9B1] fixed top-0 rounded-b-3xl grid grid-cols-3 text-black text-3xl font-bold">
            <a href="{{ route('dashboard')}}" class="btn btn-ghost text-xl me-auto">
                <img src="./assets/icons/user.png" alt="" class="w-10">
                <p>Admin</p>
            </a>
            <h1 class="mx-auto">Produk</h1>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="btn btn-ghost ms-auto">
                    <img src="./assets/icons/logout.png" alt="" class="w-10">
                </button>
            </form>
        </div>
        <div class="fixed left-0 top-[5.5rem] h-screen bg-[#B0D9B1] w-[23%]">
            <div class="bg-transparent w-48 min-h-48 rounded-lg flex mx-auto my-5">
                <img src="./assets/images/tamu/logo.png" alt="" class="resize pl-1">
            </div>
            <div class="flex justify-center grid grid-rows-3 gap-5">
                <a href="{{ route('dashboard')}}" class="btn bg-[#B0D9B1] font-bold text-black text-2xl border-none w-72 rounded-full hover:bg-[#27603F] flex items-center gap-4">
                    <img src="./assets/icons/beranda.png" alt="" class="w-9 h-9 mr-4">
                    <span>Beranda</span>
                </a>
                <a href="{{ route('produk.index')}}" class="btn bg-[#327C54] font-bold text-black text-2xl border-none w-72 rounded-full hover:bg-[#27603F] flex items-center gap-4">
                    <img src="./assets/icons/produk.png" alt="" class="w-9 h-9 mr-4">
                    <span class="self-center col-span-2 mr-3">Produk</span>
                </a>
                <a href="{{ route('rekapan.index')}}" class="btn bg-[#B0D9B1] font-bold text-black text-2xl border-none w-72 rounded-full hover:bg-[#27603F] flex items-center gap-4">
                    <img src="./assets/icons/rekapan.png" alt="" class="w-9 h-9 mr-4">
                    <span class="self-center col-span-2">Rekapan</span>
                </a>
            </div>
        </div>
        <main class="absolute top-[5.5rem] ml-[25%] mr-6 bg-[#D0E7D2] w-[73.5%] h-[84%] rounded-lg">
            <div class="relative overflow-x-auto m-6">
                <a href="{{ url('produk/create')}}"><button class="btn btn-active btn-ghost font-bold">Tambah Produk</button></a>
                @if (Session::has('success'))
                    <div class="pt-2">
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    </div>
                @endif
                <table class="mt-5 w-full text-sm text-left rtl:text-right mx-auto bg-green-700 text-white rounded-xl text-center  ">
                    <thead class="text-xs uppercase border-b border-black">
                        <tr>
                            <th scope="col" class="px-2 py-3">No</th>
                            <th scope="col" class="px-4 py-3">Gambar</th>
                            <th scope="col" class="px-4 py-3">Nama Produk</th>
                            <th scope="col" class="px-4 py-3">Harga</th>
                            <th scope="col" class="px-4 py-3">Kategori</th>
                            <th scope="col" class="px-4 py-3">Stok</th>
                            <th scope="col" class="px-4 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem() ?>
                        @foreach ($data as $item)
                        
                        <tr>
                            <td>{{ $i }}</td>
                            <td>
                                <a href="#gambar" class="inline-block">
                                    <img src="/assets/images/tambahproduk/{{ $item->gambar }}" alt="" class="size-14">
                                </a>
                            </td>
                            <td>{{ $item->nama }}</td>
                            <td>Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
                            <td>{{ $item->kategori }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>
                                <a href="{{ route('produk.show', $item->kode) }}" class="inline-block -mb-1 ">
                                    <img src="./assets/icons/detail.png" alt="" class="size-8">
                                </a>
                                <form onsubmit="return confirm('Apakah anda yakin ingin menghapus produuk berikut?')"
                                class="inline-block pl-2  " action="{{ url('produk/'.$item->kode) }}"
                                method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="submit" class="inline-block pl-2" ><img src="./assets/icons/trash-solid.png" alt="" class="size-6"></button>
                                </form>
                                <!-- <a href="#delete" class="inline-block pl-2 pb-1">
                                    <img src="./assets/icons/trash-solid.png" alt="" class="size-6">
                                </a> -->
                                <a href="{{ route('produk.edit', $item->kode) }}" class="inline-block pl-4 ">
                                    <img src="./assets/icons/pen-to-square-solid.png" alt="" class="size-6">
                                </a>
                            </td>
                        </tr>
                        <?php $i++ ?>
                        @endforeach
                    </tbody>
                    
                </table>
                <br>
                {{ $data->links() }}
            </div>
        </main>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    </body>

</html>