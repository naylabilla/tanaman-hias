<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Riwayat Pesanan</title>
        <link
            href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
            rel="stylesheet"
        />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body
        class="h-full pb-5"
        style="
            background-image: url('assets/images/tamu/bg.png');
            background-size: contain;
            background-position: center;
        "
    >
        <!-- Navbar -->
        <div
            class="navbar bg-white sticky top-0 grid grid-cols-2 text-black text-3xl font-bold"
            style="
                position: sticky;
                z-index: 1000;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
            "
        >
            <a href="{{ route('dashboard')}}" class="btn btn-ghost me-auto hover:bg-white mx-5">
                <img
                    src="{{ asset('assets/images/tamu/logo.png') }}"
                    alt=""
                    class="size-14 mb-5 -mt-1 object-scale-down"
                />

                <p class="text-2xl text-[#78A07C] mb-6 text-bold">Lushtilvy</p>
            </a>
            <div class="ms-auto">
                <a href="/keranjang" class="btn btn-ghost hover:bg-white">
                    <img
                        src="{{ asset('assets/icons/navbar keranjang.png') }}"
                        alt=""
                        class="w-12"
                    />
                    <p class="text-2xl text-[#78A07C]">Keranjang</p>
                </a>
                <a href="/riwayat_pesanan" class="btn btn-ghost hover:bg-white">
                    <img
                        src="{{ asset('assets/icons/navbar pesanan.png') }}"
                        alt=""
                        class="w-12"
                    />
                    <p class="text-2xl text-[#78A07C]">Pesanan</p>
                </a>
                <a
                    href="{{ route('profile.index') }}"
                    class="btn btn-ghost hover:bg-white"
                >
                    <img
                        src="{{ asset('assets/icons/user1.png') }}"
                        alt=""
                        class="w-10"
                    />
                    <p class="text-2xl text-[#78A07C]">Profil</p>
                </a>
                <div class="border-l-4 border-black">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="btn btn-ghost">
                            <img
                                src="{{ asset('assets/icons/logout.png') }}"
                                alt=""
                                class="w-10"
                            />
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <h1 class="text-center text-black text-3xl font-bold mt-10">
            Riwayat Pesanan
        </h1>
        <div class="flex items-center text-black text-2xl">
            <a href="{{ route('dashboard') }}" class="flex items-center">
                <img
                    src="{{ asset('assets/icons/panah kiri.png') }}"
                    alt=""
                    class="w-8 h-8 mt-8 ml-16"
                />
                <div class="text-2xl font-bold pb-2 ml-4 mt-8">Pesanan</div>
            </a>
        </div>
        <hr class="border-black mx-28 my-2" style="width: calc(100% - 227px)" />

        <br />
        @php $riwayatPesanan = $riwayatPesanan->sortByDesc(function
        ($pesananGroup) { return $pesananGroup->first()->resi->updated_at; });
        @endphp @foreach ($riwayatPesanan as $resiId => $pesananGroup) @php
        $totalHarga = 0; @endphp

        <div
            class="grid grid-cols-1 grid-flow-row gap-0 border-2 border-black w-5/6 mx-auto mb-10"
        >
            <div
                class="h-20 flex justify-center border text-left text-black pl-2 flex-col relative"
            >
                <div class="text-left pl-2">
                    <p>No. Pesanan: {{ $resiId }}</p>
                    <p>
                        Tanggal Pesanan:
                        {{ $pesananGroup->first()->resi->updated_at }}
                    </p>
                    <p>
                        Status Pengiriman: {{ $pesananGroup->first()->status }}
                    </p>
                </div>
                <button
                    class="absolute top-6 right-44 rounded bg-[#00A651] bg-hover"
                >
                    <a
                        href="{{ route('riwayat-pesanan.show', $pesananGroup->first()->resi_id) }}"
                    >
                        <img
                            src="assets/icons/detail.png"
                            alt="Icon"
                            class="px-1 w-9 h-8 object-scale-down"
                        />
                    </a>
                </button>
                <a
                    href="{{ route('rekapan.resi_pembeli', $pesananGroup->first()->resi_id) }}"
                    target="_blank"
                    class="bg-[#00A651] text-black font-bold px-8 py-1 rounded absolute top-6 right-3 no-print"
                    >Cetak Resi</a
                >
                <!-- <button class="bg-[#00A651] text-white px-8 py-1 rounded absolute top-6 right-3">Cetak Resi</button> -->
            </div>

            <div class="relative">
                @foreach ($pesananGroup as $pesanan) @php $totalHarga +=
                $pesanan->jumlah * $pesanan->harga_satuan; @endphp
                <div
                    class="h-40 flex items-center border-t border-b border-black"
                >
                    <div class="flex items-center text-black text-lg pl-10">
                        <img
                            src="/assets/images/tambahproduk/{{ $pesanan->produk->gambar }}"
                            class="w-32 h-32 mr-5"
                        />
                        <div>
                            <p>{{ $pesanan->produk->nama }}</p>
                            <p>{{ $pesanan->produk->kategori }}</p>
                        </div>
                    </div>
                    <div class="text-black text-lg ml-auto pr-10 text-right">
                        <p>x{{ $pesanan->jumlah }}</p>
                        <p>
                            Rp{{ number_format($pesanan->harga_satuan, 0, ',', '.') }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>

            <div
                class="h-14 flex justify-between border-t text-black pl-2 flex-col relative"
            >
                <p class="text-lg font-bold absolute top-3 pl-2">
                    Total Pesanan
                </p>
                <p
                    class="text-3xl text-[#136E3B] font-bold absolute top-1 right-3"
                >
                    Rp{{ number_format($totalHarga, 0, ",", ".") }}
                </p>
            </div>
        </div>
        @endforeach
    </body>
</html>
