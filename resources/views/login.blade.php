<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#618264] h-screen flex items-center">
    <div class="bg-white w-2/5 m-auto rounded-xl p-7 text-black">
        <h1 class="text-center font-bold text-3xl">LOGIN</h1>
        <form action="" class="form-control">
            <label for="pengguna" class="text-2xl">Pilih Jenis Pengguna</label>
            <label class="flex items-center gap-2 border border-2 border-gray-400 bg-green-500">
                <img src="./assets/icons/users.png" alt="" class="w-9 ml-3">
                <select class="select grow bg-white rounded-none text-lg" name="pengguna" id="pengguna">
                    <option selected hidden>Pilih role anda</option>
                    <option value="admin">Admin</option>
                    <option value="pembeli">Pembeli</option>
                </select>
            </label>

            <label for="username" class="text-2xl">Username</label>
            <label class="flex items-center gap-2 border border-2 border-gray-400 bg-green-500">
                <img src="./assets/icons/user.png" alt="" class="w-9 ml-3">
                <input type="text" class="input grow bg-white rounded-none" placeholder="Username" id="username" />
            </label>

            <label for="password" class="text-2xl">Password</label>
            <label class="flex items-center gap-2 border border-2 border-gray-400 bg-green-500">
                <img src="./assets/icons/gembok.png" alt="" class="w-9 ml-3">
                <input type="password" class="input grow bg-white rounded-none" placeholder="Password" id="password" />
            </label>

            <div class="flex justify-center">
                <button type="submit" class="btn bg-green-800 w-1/2 mt-5 text-white text-xl">Masuk</button>
            </div>
            <div class="flex justify-center">
                <small class="text-xl">Belum punya akun ? <a href="/registrasi" class="text-blue-500">Daftar</a></small>
            </div>
        </form>
    </div>
</body>

</html>