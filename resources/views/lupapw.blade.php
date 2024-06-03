<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-[#618264] h-screen flex items-center">
    <div class="bg-white w-2/5 m-auto rounded-xl p-7 text-black">
        <h1 class="text-center font-bold text-3xl">LUPA PASSWORD</h1>
            <label for="username" class="text-2xl">Masukkan Nomor</label>
            <label class="flex items-center gap-2 border border-2 border-gray-400 bg-green-500">
                <input type="text" class="input grow bg-white rounded-none" placeholder="******" id="username" />
            </label>

            <label for="password" class="text-2xl">Password Baru</label>
            <label class="flex items-center gap-2 border border-2 border-gray-400">
                <input type="password" class="input grow bg-white rounded-none" placeholder="******" id="password"/>
                <img src="./assets/icons/mata.png" alt="" class="w-9 mr-5"> 
            </label>

            <div class="flex justify-center">
                <button type="submit" class="btn bg-green-800 w-1/2 mt-5 text-white text-xl">Ubah</button>
            </div>
            <div class="flex justify-center">
                <small class="text-xl">Belum punya akun ? <a href="/registrasi" class="text-blue-500">Daftar</a></small>
            </div>
        </form>
    </div>
</body>

</html>