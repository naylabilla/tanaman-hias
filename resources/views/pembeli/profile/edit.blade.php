<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pesanan Penjual</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/9abb4e3af2.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body style="background-image: url('/assets/images/tamu/bg.png');">
    <div class="navbar bg-white sticky top-0 grid grid-cols-2 text-black text-3xl font-bold" style="position: sticky; z-index: 1000">
        <a href="" class="btn btn-ghost me-auto hover:bg-white mx-5">
            <img src="/assets/images/tamu/logo.png" alt="" class="size-14 mb-5 -mt-1 object-scale-down" />
            <p class="text-2xl text-[#78A07C] mb-6 text-bold">Lushtilvy</p>
        </a>
        <div class="ms-auto">
            <a href="/keranjang" class="btn btn-ghost hover:bg-white">
                <img src="/assets/icons/navbar keranjang.png" alt="" class="w-12" />
                <p class="text-2xl text-[#78A07C]">Keranjang</p>
            </a>
            <a href="/pesanan" class="btn btn-ghost hover:bg-white">
                <img src="/assets/icons/navbar pesanan.png" alt="" class="w-12" />
                <p class="text-2xl text-[#78A07C]">Pesanan</p>
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
    <div class="ms-3 flex items-center pt-3">
        <a class="font-semibold text-2xl text-white flex items-center ml-3" href="{{ route('profile.index') }}"><i class="fa-solid fa-arrow-left mr-3"></i>Kembali</a>
        <div class="flex items-center mx-3">
            <div class="bg-[#e2e8f0] h-8 w-[3px] opacity-100"></div>
        </div>
        <p class="font-semibold text-2xl text-white">Profil</p>
    </div>
    <div class="container mt-4">
        <div class="grid grid-rows-3 grid-flow-col gap-4">
            <div class="row-span-3">
                <img alt="Foto Profil" class="w-60 rounded-lg mt-7 ml-28" id="imagePreview" src="{{
                            $foto
                                ? '/storage/assets/images/profile/'.$foto
                                : '/assets/icons/foto_awal.jpg'
                        }}" />
            </div>
            <div class="row-span-3 col-span-4">
                <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf @method('patch')

                    <div class="grid gap-4">
                        <div class="col-span-1">
                            <label class="form-label text-lg font-semibold" style="color: black">Nama Pengguna</label>
                            <input type="text" class="form-control w-11/12 rounded-lg border-slate-95 mt-2" name="nama_pengguna" value="{{ $user->nama }}" />
                        </div>
                        <div class="col-span-1">
                            <label class="form-label text-lg font-semibold" style="color: black">Nomor HP</label>
                            <input type="number" class="form-control w-8/12 rounded-lg border-slate-950 mt-2" name="nomor_hp" value="{{ $user->nomor_hp }}" required />
                        </div>

                        <div class="col-span-2">
                            <label class="form-label text-lg font-semibold" style="color: black">Alamat</label>
                            <textarea class="form-control w-10/12 rounded-lg border-slate-950 mt-2 pl-2" rows="3" name="alamat" required>{{ $user->alamat }}</textarea>
                        </div>
                        <div class="col-span-2">
                            <label class="form-label text-lg font-semibold" style="color: black">Email</label>
                            <input type="email" class="form-control w-10/12 rounded-lg border-slate-950 mt-2" name="email" value="{{ $user->email }}" />
                        </div>

                        <div class="col-span-2">
                            <label class="form-label text-lg font-semibold" style="color: black">Foto Profil</label>
                            <div class="relative flex items-center">
                                <button class="h-10 bg-[#78A07C] text-white rounded-l-lg mt-2" style="width: 136px">
                                    Pilih File
                                </button>
                                <input type="file" class="absolute inset-0 w-10/12 h-full opacity-0 cursor-pointer" id="fileInput" name="foto">
                                <input type="text" class="form-control w-8/12 rounded-r-lg mt-2" placeholder="Tidak ada file terpilih" id="fileText" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="grid justify-items-end mr-44 mt-3">
                        <button class="btn font-bold w-1/10 h-2 text-xl bg-[#78A07C]" style="
                                    border: 3px solid #cbd5e1;
                                    color: white;
                                " type="submit">
                            <i class="fa-solid fa-circle-check"></i>Simpan
                        </button>
                    </div>
                </form>

                <form method="post" action="{{ route('password.update') }}" class="mb-4">
                    @csrf @method('put')
                    <div class="grid gap-4">
                        <div class="col-span-2">
                            <label class="form-label text-lg font-semibold" style="color: black">Kata Sandi Sekarang</label>
                            <input type="password" class="form-control w-10/12 rounded-lg border-slate-950" name="current_password" placeholder="********" />
                        </div>
                        <div class="col-span-2">
                            <label class="form-label text-lg font-semibold" style="color: black">Kata Sandi Baru</label>
                            <input type="password" class="form-control w-10/12 rounded-lg border-slate-950 mt-2" name="password" placeholder="********" />
                        </div>
                        <div class="col-span-2">
                            <label class="form-label text-lg font-semibold" style="color: black">Konfirmasi Kata Sandi Baru</label>
                            <input type="password" class="form-control w-10/12 rounded-lg border-slate-950 mt-2" name="password_confirmation" placeholder="********" />
                        </div>
                    </div>
                    <div class="grid justify-items-end mr-44 mt-3">
                        <button class="btn font-bold w-1/10 h-2 text-xl bg-[#78A07C]" style="
                                    border: 3px solid #cbd5e1;
                                    color: white;
                                " type="submit">
                            <i class="fa-solid fa-circle-check"></i>Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        document
            .getElementById("fileInput")
            .addEventListener("change", function() {
                var fileInput = this;
                var fileName = fileInput.files[0].name;
                var fileText = document.getElementById("fileText");
                var imagePreview = document.getElementById("imagePreview");

                fileText.value = fileName;

                var reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.classList.remove("hidden");
                };
                reader.readAsDataURL(fileInput.files[0]);
            });
    </script>
</body>

</html>