<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Pesanan Penjual</title>
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

    <body class="bg-[#618264] h-auto">
        <div
            class="navbar bg-white sticky top-0 grid grid-cols-2 text-black text-3xl font-bold"
            style="position: sticky; z-index: 1000"
        >
            <a href="" class="btn btn-ghost me-auto hover:bg-white mx-5">
                <img
                    src="/assets/images/tamu/logo.png"
                    alt=""
                    class="size-14 mb-5 -mt-1 object-scale-down"
                />
                <p class="text-2xl text-[#78A07C] mb-6 text-bold">Lushtilvy</p>
            </a>
            <div class="ms-auto">
                <a href="/keranjang" class="btn btn-ghost hover:bg-white">
                    <img
                        src="/assets/icons/navbar keranjang.png"
                        alt=""
                        class="w-12"
                    />
                    <p class="text-2xl text-[#78A07C]">Keranjang</p>
                </a>
                <a href="/pesanan" class="btn btn-ghost hover:bg-white">
                    <img
                        src="/assets/icons/navbar pesanan.png"
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
                href="{{ route('profile.index') }}"
                ><i class="fa-solid fa-arrow-left mr-3"></i>Kembali</a
            >
            <div class="flex items-center mx-3">
                <div class="bg-[#e2e8f0] h-8 w-[3px] opacity-100"></div>
            </div>
            <p class="font-semibold text-2xl text-white">Profil</p>
        </div>
        <div class="container mt-4">
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
                        src="/assets/icons/foto_awal.jpg"
                        alt="Foto Profil"
                        class="w-60 rounded-lg mt-5 ml-28"
                    />
                    @endif
                </div>
                <div class="row-span-3 col-span-2">
                    <div class="grid grid-cols-2 gap-4 ml-5 mt-4">
                        <div class="col-span-1">
                            <label
                                class="form-label text-lg font-semibold"
                                style="color: #03045e"
                                >Nama Pengguna</label
                            >
                            <input
                                type="text"
                                class="form-control w-11/12 rounded-lg border-slate-95 mt-2"
                                name="nama_pengguna"
                                value="{{ $user->nama }}"
                            />
                        </div>
                        <div class="col-span-1">
                            <label
                                class="form-label text-lg font-semibold"
                                style="color: #03045e"
                                >Nomor HP</label
                            >
                            <input
                                type="number"
                                class="form-control w-8/12 rounded-lg border-slate-950 mt-2"
                                name="nomor_hp"
                                value="{{ $user->nomor_hp }}"
                                required
                            />
                        </div>

                        <div class="col-span-2">
                            <label
                                class="form-label text-lg font-semibold"
                                style="color: #03045e"
                                >Alamat</label
                            >
                            <textarea
                                class="form-control w-10/12 rounded-lg border-slate-950 mt-2"
                                rows="3"
                                name="alamat"
                                required
                                >{{ $user->alamat }}</textarea
                            >
                        </div>
                        <div class="col-span-2">
                            <label
                                class="form-label text-lg font-semibold"
                                style="color: #03045e"
                                >Email</label
                            >
                            <input
                                type="email"
                                class="form-control w-10/12 rounded-lg border-slate-950 mt-2"
                                name="email"
                                value="{{ $user->email }}"
                            />
                        </div>
                        <div class="col-span-2">
                            <label
                                class="form-label text-lg font-semibold"
                                style="color: #03045e"
                                >Kata Sandi Sekarang</label
                            >
                            <input
                                type="text"
                                class="form-control w-10/12 rounded-lg border-slate-950"
                                name="kata_sandi_sekarang"
                            />
                        </div>
                        <div class="col-span-2">
                            <label
                                class="form-label text-lg font-semibold"
                                style="color: #03045e"
                                >Kata Sandi Baru</label
                            >
                            <input
                                type="text"
                                class="form-control w-10/12 rounded-lg border-slate-950 mt-2"
                                name="kata_sandi_baru"
                            />
                        </div>
                        <div class="col-span-2">
                            <label
                                class="form-label text-lg font-semibold"
                                style="color: #03045e"
                                >Foto Profil</label
                            >
                            <input
                                type="file"
                                class="form-control w-10/12 rounded-lg mt-2"
                                name="foto_profil"
                            />
                        </div>
                        <div class="col-span-2">
                            <p class="font-normal italic mb-0">
                                *Username tidak dapat diubah.
                            </p>
                            <p class="font-normal italic mb-0">
                                *Jika tidak ingin mengubah password maka tidak
                                usah di otak-atik pada bagian password sekarang
                                dan password baru.
                            </p>
                            <p class="font-normal italic">
                                *Jika ingin mengubah foto profil maka pilih file
                                baru.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-4 mt-20 pb-10">
                <div class="">
                    <a
                        class="btn font-bold w-3/5 ml-28 h-16 text-2xl"
                        style="border: 3px solid #0077b6; color: #0077b6"
                        href="#"
                        role="button"
                        ><i
                            class="fa-solid fa-arrow-up-from-bracket"
                            style="rotate: -90deg"
                        ></i
                        >Keluar
                    </a>
                </div>
                <div class="">
                    <a
                        class="btn font-bold w-10/12 -ml-6 h-16 text-2xl"
                        style="border: 3px solid #0077b6; color: #0077b6"
                        href="pengaturan_akun_pembeli"
                        role="button"
                        ><i class="fa-solid fa-circle-xmark"></i>Batal
                    </a>
                </div>
                <div class="">
                    <a
                        class="btn font-bold w-10/12 -ml-24 h-16 text-2xl bg-[#0077B6]"
                        style="border: 3px solid #cbd5e1; color: #cbd5e1"
                        type="submit"
                        ><i class="fa-solid fa-circle-check"></i>Simpan
                    </a>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>
</html>
