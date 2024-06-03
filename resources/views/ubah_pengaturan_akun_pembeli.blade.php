<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesanan Penjual</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/9abb4e3af2.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>


<body class="bg-[#618264] h-auto">
    <div class="ms-3 flex items-center pt-10 ">
        <a class="font-semibold text-2xl text-white flex items-center ml-3 " href="#"><i
                class="fa-solid fa-arrow-left mr-3"></i>Kembali</a>
        <div class="flex items-center mx-3">
            <div class=" bg-[#e2e8f0] h-8 w-[3px] opacity-100"></div>
        </div>
        <p class="font-semibold text-2xl text-white">Profil</p>
    </div>
    <div class="container mt-4 ">
        <div class="grid grid-rows-3 grid-flow-col gap-4">
            <div class="row-span-3 ">
                <img src="../assets/icons/foto_awal.jpg" alt="Foto Profil" class="w-60 rounded-lg mt-5 ml-28">

                <!-- <img src='../assets/foto_profil/' alt='Foto Profil' class='w-100 rounded-3'> -->


            </div>
            <div class="row-span-3 col-span-2">
                <div class="grid grid-cols-2 gap-4 ml-5 mt-4">


                    <div class="col-span-1">
                        <label class="form-label text-lg font-semibold" style="color: #03045E">Nama Pengguna</label>
                        <input type="text" class="form-control w-11/12 rounded-lg border-slate-95 mt-2"
                            name="nama_pengguna" disabled value="Vanziix" >
                    </div>
                    <div class="col-span-1">
                        <label class="form-label text-lg font-semibold" style="color: #03045E">Nomor HP</label>
                        <input type="number" class="form-control w-8/12 rounded-lg border-slate-950 mt-2"
                            name="nomor_hp" value="089450219878" required >
                    </div>

                    <div class="col-span-2">
                        <label class="form-label text-lg font-semibold " style="color: #03045E">Alamat</label>
                        <textarea class="form-control w-10/12 rounded-lg border-slate-950 mt-2" rows="3" name="alamat" required>Bulaksumur, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</textarea>
                    </div>
                    <div class="col-span-2">
                        <label class="form-label text-lg font-semibold " style="color: #03045E">Nama Lengkap</label>
                        <input type="text" class="form-control w-10/12 rounded-lg border-slate-950 mt-2"
                            name="nama_lengkap" value="Rahya Sartakhya Sanjaya"  >
                    </div>
                    <div class="col-span-2">
                        <label class="form-label text-lg font-semibold " style="color: #03045E">Kata Sandi
                            Sekarang</label>
                        <input type="text" class="form-control w-10/12 rounded-lg border-slate-950"
                            name="kata_sandi_sekarang" >
                    </div>
                    <div class="col-span-2">
                        <label class="form-label text-lg font-semibold " style="color: #03045E">Kata Sandi Baru</label>
                        <input type="text" class="form-control w-10/12 rounded-lg border-slate-950 mt-2"
                            name="kata_sandi_baru" >
                    </div>
                    <div class="col-span-2">
                        <label class="form-label text-lg font-semibold " style="color: #03045E">Foto Profil</label>
                        <input type="file" class="form-control w-10/12 rounded-lg mt-2"
                            name="foto_profil" >
                    </div>
                    <div class="col-span-2">
                        <p class="font-normal italic mb-0">*Username tidak dapat diubah.</p>
                        <p class="font-normal italic mb-0">*Jika tidak ingin mengubah password maka tidak usah di otak-atik pada
                            bagian password sekarang dan password baru.</p>
                        <p class="font-normal italic">*Jika ingin mengubah foto profil maka pilih file baru.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="grid grid-cols-3 gap-4 mt-20 pb-10">
            <div class="">
                <a class="btn font-bold w-3/5 ml-28 h-16 text-2xl"
                    style="border: 3px solid #0077B6; color: #0077B6" href="#" role="button"><i
                        class="fa-solid fa-arrow-up-from-bracket  " style="rotate: -90deg"></i>Keluar
                </a>
            </div>
            <div class="">
                <a class="btn font-bold w-10/12 -ml-6 h-16 text-2xl"
                    style="border: 3px solid #0077B6; color: #0077B6" href="pengaturan_akun_pembeli" role="button"><i
                        class="fa-solid fa-circle-xmark"></i>Batal
                </a>
            </div>
            <div class="">
                <a class="btn font-bold w-10/12 -ml-20 h-16 text-2xl bg-[#0077B6]"
                    style="border: 3px solid #cbd5e1; color: #cbd5e1" type="submit"><i
                        class="fa-solid fa-circle-check"></i>Simpan
                </a>
            </div>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
