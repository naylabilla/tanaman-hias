<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#618264] h-screen">
    <h1 class="text-center text-white text-3xl font-bold">Pembayaran</h1>
    <div class="flex items-center text-white text-2xl font-semibold mt-8">
        <i class="fas fa-arrow-left ml-12 align-middle text-black"></i>
        <div class="text-left font-semibold pb-2 border-b-2 border-white w-5/6 mx-auto ml-12 flex items-center">
            <img src="/assets/icons/user.png" class="w-8 h-8 mr-2">
            <span class="inline-block align-middle">hryyyh</span>
        </div>
    </div>
    <div class="text-white text-2xl font-semibold mt-8 ml-11">
        <div class="pl-20">
            <p>Total Pembayaran</p>
            <p class="inline-block align-middle text-[#136E3B] font-bold text-3xl">Rp. 365.000</p>
        </div>
        <br>
        <input type="text" value="Bank BNI" readonly class="text-black bg-white border-[#51EC4E] border pl-5 w-1/6 mx-auto mt-2 max-w-[200px] ml-20">
        <br><br>
        <label class="ml-20">No. Rekening</label>
        <br>
        <input type="text" value="1083915345" readonly class="text-[#327C54] bg-white border-[#51EC4E] border p-5 w-2/6 mx-auto mt-2 max-w-[400px] ml-20">
        <br>
        <div class="border-b-2 border-white w-5/6 mx-auto ml-20 pt-8 flex items-center"></div>
        <br>
        <label for="foto_produk" class="text-white ml-20">Bukti Pembayaran</label>
        <div class="d-flex justify-content-between mb-2">
            <input name="foto_produk" id="foto_produk" type="file" class="border-[#51EC4E] border bg-white p-5 w-3/6 mx-auto mt-2 max-w-[600px] ml-20" data-placeholder="Berkas Tidak Dipilih">
        </div>
    </div>

    <style>
        input[type="file"]::file-selector-button {
            color: black;
        }

        input[type="file"]::file-upload-button {
            color: grey;
        }
    </style>

    <button class="bg-[#00A651] hover:bg-green-800 text-white font-bold p-2 w-1/6 mx-auto block text-xl mt-8">OK</button>

</body>

</html>