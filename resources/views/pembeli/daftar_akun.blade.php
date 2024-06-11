<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftarakun</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('assets/images/tamu/register.png');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="h-screen flex items-center justify-center bg-black">
    <div class="max-w-md w-full p-7 bg-opacity-75 rounded-xl text-black -ml-64 -mt-10">
        <h1 class="text-center font-bold text-3xl font-mono pt-2">DAFTAR AKUN</h1>
        <form method="POST" action="{{ route('register') }}" class="form-control">
            @csrf

            <label for="nama_pengguna" class="text-xl">Nama Pengguna</label>
            <label class="flex items-center gap-2 border border-2 border-gray-400 bg-red-700">
                <input type="text" class="input grow bg-white rounded-none py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Nama Pengguna" id="nama_pengguna" name="nama_pengguna" value="{{ old('nama_pengguna') }}" required>
            </label>

            <label for="email" class="text-xl">Email Pengguna</label>
            <label class="flex items-center gap-2 border border-2 border-gray-400 bg-red-700">
                <input type="email" class="input grow bg-white rounded-none py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="nama@example.com" id="email" name="email" value="{{ old('email') }}" required>
            </label>

            <label for="nomor_hp" class="text-xl">Nomor HP</label>
            <label class="flex items-center gap-2 border border-2 border-gray-400 bg-red-700">
                <input type="number" class="input grow bg-white rounded-none py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="08xx-xxxx-xxxx" id="nomor_hp" name="nomor_hp" value="{{ old('nomor_hp') }}" required>
            </label>

            <label for="alamat" class="text-xl">Alamat</label>
            <label class="flex items-center gap-2 border border-2 border-gray-400 bg-red-700">
                <input type="text" class="input grow bg-white rounded-none py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Alamat" id="alamat" name="alamat" value="{{ old('alamat') }}" required>
            </label>

            <label for="password" class="text-xl">Kata Sandi</label>
            <label class="flex items-center gap-2 border border-2 border-gray-400 bg-red-700">
                <input type="password" class="input grow bg-white rounded-none py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="******" id="password" name="password" required>
            </label>

            <label for="password_confirmation" class="text-xl">Konfirmasi Kata Sandi</label>
            <label class="flex items-center gap-2 border border-2 border-gray-400 bg-red-700">
                <input type="password" class="input grow bg-white rounded-none py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="******" id="password_confirmation" name="password_confirmation" required>
            </label>

            <div class="flex justify-center">
                <button type="submit" class="btn bg-red-700 w-1/2 mt-5 text-white text-xl">Daftar</button>
            </div>
            <div class="flex justify-center">
                <small class="text-xl">Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500">Masuk</a></small>
            </div>
        </form>
    </div>
    </div>



</body>

</html>