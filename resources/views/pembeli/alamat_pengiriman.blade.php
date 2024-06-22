<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Penjual</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#6D896B] h-full">
    <!-- Navbar -->
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

    <form action="/submit-alamat/{{ $resi->id }}" method="post">
        <div class="w-full flex flex-col items-center pb-5 ">
            @csrf
            <h1 class="text-center text-white text-4xl font-bold mt-4 mb-4">Alamat Pengiriman</h1>

            <input type="text" class="bg-white border-[#51EC4E] border p-3 w-5/6 mx-auto block mb-4" placeholder="Nama Lengkap" name="nama_penerima" value="{{ $resi->nama_penerima ? $resi->nama_penerima : '' }}">

            <input type="text" class="bg-white border-[#51EC4E] border p-3 w-5/6 mx-auto block mb-4" placeholder="Username" name="username" value="{{ $resi->username ? $resi->username : '' }}">

            <input type="text" class="bg-white border-[#51EC4E] border p-3 w-5/6 mx-auto block mb-4" placeholder="Contoh: +6285-0000-1111" name="no_hp" value="{{ $resi->no_hp ? $resi->no_hp : '' }}">

            <select class="bg-white border-[#51EC4E] border p-3 w-5/6 mx-auto block mb-4" name="tujuan">
                <option value="" disabled selected>Pilih Tujuan Pengiriman</option>
                <option value="Rumah" {{ $resi->tujuan && $resi->tujuan == 'Rumah' ? 'selected' : '' }}>Rumah</option>
                <option value="Kantor" {{ $resi->tujuan && $resi->tujuan == 'Kantor' ? 'selected' : '' }}>Kantor
                </option>
            </select>

            <input type="text" class="bg-white border-[#51EC4E] border p-10 w-5/6 mx-auto block text-left pl-5 pt-3 mb-4" placeholder="Alamat Lengkap" name="alamat" value="{{ $resi->alamat ? $resi->alamat : '' }}">

            <div class="flex space-x-20 w-5/6 mx-auto mb-4">
                <select class="bg-white border-[#51EC4E] border p-3 w-1/2 mx-auto block" name="kecamatan">
                    <option disabled selected>Pilih Kecamatan</option>
                    <option value="Batam Kota" {{ $resi->kecamatan && $resi->kecamatan == 'Batam Kota' ? 'selected' : '' }}>Batam Kota
                    </option>
                    <option value="Batu Aji" {{ $resi->kecamatan && $resi->kecamatan == 'Batu Aji' ? 'selected' : '' }}>Batu Aji</option>
                    <option value="Batu Ampar" {{ $resi->kecamatan && $resi->kecamatan == 'Batu Ampar' ? 'selected' : '' }}>Batu Ampar
                    </option>
                    <option value="Bengkong" {{ $resi->kecamatan && $resi->kecamatan == 'Bengkong' ? 'selected' : '' }}>Bengkong</option>
                    <option value="Nongsa" {{ $resi->kecamatan && $resi->kecamatan == 'Nongsa' ? 'selected' : '' }}>
                        Nongsa</option>
                    <option value="Sekupang" {{ $resi->kecamatan && $resi->kecamatan == 'Sekupang' ? 'selected' : '' }}>Sekupang</option>
                </select>
                <input type="text" class="bg-white border-[#51EC4E] border p-3 w-1/2 mx-auto block" placeholder="Kode Pos" name="kode_pos" value="{{ $resi->kode_pos ? $resi->kode_pos : '' }}">
            </div>

            <button type="submit" class="bg-[#00A651] hover:bg-green-800 text-white font-bold p-3 w-5/6 mx-auto block text-xl">SIMPAN</button>
        </div>
    </form>
</body>

</html>