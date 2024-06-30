<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Pengaturan Akun</title>
        <link
            href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css"
            rel="stylesheet"
            type="text/css"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <script
            src="https://kit.fontawesome.com/9abb4e3af2.js"
            crossorigin="anonymous"
        ></script>
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"
            rel="stylesheet"
        />
    </head>

    <body
        style="
            background-image: url('/assets/images/tamu/bg.png');
            background-size: cover;
        "
        class="bg-[#618264] h-screen"
    >
        <div
            class="navbar bg-white sticky top-0 grid grid-cols-2 text-black text-3xl font-bold"
            style="position: sticky; z-index: 1000"
        >
            <a href="" class="btn btn-ghost me-auto hover:bg-white mx-5">
                <img
                    src="./assets/images/tamu/logo.png"
                    alt=""
                    class="size-14 mb-5 -mt-1 object-scale-down"
                />
                <p class="text-2xl text-[#78A07C] mb-6 text-bold">Lushtilvy</p>
            </a>
            <div class="ms-auto">
                <a
                    href="{{ route('keranjang.tampil') }}"
                    class="btn btn-ghost hover:bg-white"
                >
                    <img
                        src="./assets/icons/navbar keranjang.png"
                        alt=""
                        class="w-12"
                    />
                    <p class="text-2xl text-[#78A07C]">Keranjang</p>
                </a>
                <a
                    href="{{ route('riwayat-pesanan.index') }}"
                    class="btn btn-ghost hover:bg-white"
                >
                    <img
                        src="./assets/icons/navbar pesanan.png"
                        alt=""
                        class="w-12"
                    />
                    <p class="text-2xl text-[#78A07C]">Pesanan</p>
                </a>
                <div class="border-l-4 border-black">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="btn btn-ghost">
                            <img
                                src="/assets/icons/logout.png"
                                alt=""
                                class="w-10"
                            />
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="ms-3 flex items-center pt-3">
            <a
                class="font-semibold text-2xl text-white flex items-center ml-3"
                href="{{ route('dashboard') }}"
                ><i class="fa-solid fa-arrow-left mr-3"></i>Kembali</a
            >
            <div class="flex items-center mx-3">
                <div class="bg-[#e2e8f0] h-8 w-[3px] opacity-100"></div>
            </div>
            <p class="font-semibold text-2xl text-white">Profil</p>
        </div>
        <div class="container p-0 mt-4 mb-8">
            <div class="grid grid-rows-3 grid-flow-col gap-4">
                <div class="row-span-3">
                    @if($user->foto != null)
                    <img
                        src="{{ asset('/storage/assets/images/profile/' . $user->foto) }}"
                        alt="Foto Profil"
                        class="w-60 rounded-lg mt-5 ml-28"
                    />
                    @else
                    <img
                        src="../assets/icons/foto_awal.jpg"
                        alt="Foto Profil"
                        class="w-60 rounded-lg mt-5 ml-28"
                    />
                    @endif

                    <!-- <img src='../assets/foto_profil/' alt='Foto Profil' class='w-100 rounded-3'> -->
                </div>
                <div class="row-span-3 col-span-2">
                    <div class="grid grid-cols-2 gap-4 -ml-44 mt-4">
                        <div class="col-span-1">
                            <label
                                class="form-label text-lg font-semibold"
                                style="color: black"
                                >Nama Pengguna</label
                            >
                            <input
                                type="text"
                                class="form-control w-11/12 rounded-lg border-slate-950 mt-1"
                                name="nama_pengguna"
                                readonly
                                value="{{ $user->nama }}"
                            />
                        </div>
                        <div class="col-span-1 -ml-3">
                            <label
                                class="form-label text-lg font-semibold"
                                style="color: black"
                                >Nomor HP</label
                            >
                            <input
                                type="number"
                                class="form-control w-8/12 rounded-lg border-slate-950 mt-1"
                                name="nomor_hp"
                                readonly
                                value="{{ $user->nomor_hp }}"
                            />
                        </div>

                        <div class="col-span-2">
                            <label
                                class="form-label text-lg font-semibold"
                                style="color: black"
                                >Alamat</label
                            >
                            <textarea
                                class="form-control w-10/12 rounded-lg border-slate-950 mt-1"
                                rows="3"
                                name="alamat"
                                readonly
                                >{{ $user->alamat }}</textarea
                            >
                        </div>
                        <div class="col-span-2">
                            <label
                                class="form-label text-lg font-semibold"
                                style="color: black"
                                >Email</label
                            >
                            <input
                                type="text"
                                class="form-control w-10/12 rounded-lg border-slate-950 mt-1"
                                name="email"
                                readonly
                                value="{{ $user->email }}"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-4 gap-4 mt-32">
                <div class="">
                    <a
                        class="btn fs-4 font-bold w-full ml-20 h-16 text-2xl"
                        style="border: 3px solid #78a07c; color: #78a07c"
                        href="{{ route('profile.edit') }}"
                        role="button"
                        ><i class="fa-solid fa-pen"></i>Ubah
                    </a>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>
</html>
