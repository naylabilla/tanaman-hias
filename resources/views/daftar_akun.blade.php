<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftarakun</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#618264] h-screen ">
    <div class="rounded-lg absolute top-[3rem] ml-[25%] bg-white w-[50%] h-[85%] ">
        <h1 class="text-4xl font-mono font-bold pt-2 ">
            <center>DAFTAR AKUN</center>
        </h1>
        <div class="max-w-md mx-auto">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="#">
                        Nama Pengguna
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="nama_pengguna" type="text" placeholder="Nama Pengguna" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="#">
                        Kata Sandi
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="kata_sandi" type="password" placeholder="******************" required>
                    <!-- <p class="text-red-500 text-xs italic">Please choose a password.</p> -->
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="#">
                        Nama Lengkap
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="nama_lengkap" type="text" placeholder="Nama Lengkap" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="#">
                        Nomor HP
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="nomor_hp" type="number" placeholder="xxxxxxxxxxxx" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2 " for="#">
                        Alamat
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="alamat" type="text" placeholder="Alamat" required>
                </div>
                <div class="flex justify-center items-center ">
                    <!-- <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold  rounded">
                        Button
                    </button> -->
                    <input type="submit" value="Daftar" class="btn text-white font-bold w-32 text-lg  "
                    style="background-color: #0077B6">
                </div>

                <!-- <input type="submit" value="Daftar" class="btn text-white font-bold w-32  "
                    style="background-color: #0077B6"> -->
                <div class="text-center">
                    <a href="index.php" style="color: #0077B6; text-decoration: none">Sudah punya akun? <span
                            class="font-bold">Masuk</span></a>
                </div>
            </form>
        </div>
    </div>



</body>

</html>

