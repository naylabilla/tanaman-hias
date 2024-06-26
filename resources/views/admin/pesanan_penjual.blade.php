<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesanan Penjual</title>
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
            <h1 class="mx-auto">Rekapan</h1>
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
                <a href="{{ route('dashboard')}}"
                    class="btn bg-[#B0D9B1] font-bold text-black text-2xl border-none w-72 rounded-full hover:bg-[#27603F] flex items-center gap-4">
                    <img src="./assets/icons/beranda.png" alt="" class="w-9 h-9 mr-4">
                    <span>Beranda</span>
                </a>
                <a href="{{ route('produk.index')}}"
                    class="btn bg-[#B0D9B1] font-bold text-black text-2xl border-none w-72 rounded-full hover:bg-[#27603F] flex items-center gap-4">
                    <img src="./assets/icons/produk.png" alt="" class="w-9 h-9 mr-4">
                    <span class="self-center col-span-2 mr-3">Produk</span>
                </a>
                <a href="/pesanan_penjual"
                    class="btn bg-[#327C54] font-bold text-black text-2xl border-none w-72 rounded-full hover:bg-[#27603F] flex items-center gap-4">
                    <img src="./assets/icons/rekapan.png" alt="" class="w-9 h-9 mr-4">
                    <span class="self-center col-span-2">Rekapan</span>
                </a>
            </div>
        </div>
        <main class="absolute top-[5.5rem] ml-[25%] mr-6 bg-[#D0E7D2] w-[73.5%] h-[82%] rounded-lg">
            <div class="relative overflow-x-auto m-6">
                <table
                    class="w-full text-sm text-left rtl:text-right mx-auto bg-green-700 text-white rounded-xl text-center">
                    <thead class="text-xs uppercase border-b border-black">
                        <h1 class="text-center font-bold mb-4 text-green-800 text-2xl">Detail Pembelian Produk</h1>
                        <tr>
                            <th scope="col" class="px-4 py-3">No</th>
                            <th scope="col" class="px-4 py-3">No Pesanan</th>
                            <th scope="col" class="px-4 py-3">Tanggal Pesanan</th>
                            <th scope="col" class="px-4 py-3">Username</th>
                            <th scope="col" class="px-4 py-3">Total</th>
                            <th scope="col" class="px-4 py-3">Status</th>
                            <th scope="col" class="px-4 py-3">Resi</th>
                            <th scope="col" class="px-4 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                        
                        $pesananPenjual = $pesananPenjual->sortByDesc(function ($pesananGroup) {
                        return $pesananGroup->first()->resi->updated_at;
                        });

                        $i = 1;
                        @endphp

                        @foreach ($pesananPenjual as $resiId => $pesananGroup)
                        @php
                        $totalHarga = 0;

                        
                        foreach ($pesananGroup as $pesanan) {
                        $totalHarga += $pesanan->jumlah * $pesanan->harga_satuan;
                        }
                        @endphp

                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $resiId }}</td>
                            <td>{{ $pesananGroup->first()->resi->updated_at }}</td>
                            <td>{{ $pesananGroup->first()->resi->nama_penerima }}</td>
                            <td>{{ number_format($totalHarga, 0, ',', '.') }}</td>
                            <td>
                                <select name="" id="" class="text-black rounded-3xl p-2 bg-gray-200">
                                    <option value="">Menunggu Konfirmasi</option>
                                    <option value="">Sedang di Proses</option>
                                    <option value="">Sedang di Kirim</option>
                                    <option value="">Pesanan Selesai</option>
                                </select>
                                <button
                                    class="btn bg-[#B0D9B1] border-none text-black rounded-lg w-24 ml-3">Perbarui</button>
                            </td>
                            <td class="py-3">
                                <button class="btn bg-[#B0D9B1] border-none text-black rounded-lg w-24">Cetak</button>
                            </td>
                            <td>
                                <a href="{{ route('rekapan.show', $pesananGroup->first()->resi_id) }}"
                                    class="inline-block">
                                    <img src="./assets/icons/detail.png" alt="" class="size-10">
                                </a>
                                <a href="#delete" class="inline-block">
                                    <img src="./assets/icons/delete.png" alt="" class="size-10">
                                </a>
                            </td>
                        </tr>
                        @php $i++ @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>

</html>
