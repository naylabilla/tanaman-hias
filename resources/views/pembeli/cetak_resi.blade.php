<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Resi</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .border {
            outline: 3px solid black;
            /* Mengatur outline dengan ketebalan 3px dan warna hitam */
        }

        .font1 {
            font-size: 24px;
            margin-top: -8px;
        }

        .border1 {
            outline: 3px solid black;
            /* Mengatur outline dengan ketebalan 3px dan warna hitam */
            padding-top: 18px;
            /* Menambahkan padding atas */
        }

        .text1 {
            margin-left: 36px;
        }

        .grid {
            display: grid;
            grid-template-columns: auto 3px auto;
            /* Dua kolom: kiri, garis pemisah, kanan */
            gap: 0;
            /* Tidak ada jarak antar kolom */
        }

        .box1 {
            width: 600px;
            /* Atur lebar kotak */
            height: 38px;
            /* Atur tinggi kotak */
            background-color: #d4d4d8;
            /* Warna abu-abu */
            border-radius: 54px;
            /* Ujung tumpul */
            display: flex;
            align-items: center;
            justify-content: center;
            color: black;
            /* Warna teks dalam kotak */
            font-size: 25px;
            /* Ukuran teks dalam kotak */
            margin-top: -253px;
            /* Jarak antara label dan kotak */
            margin-left: -560px;
            /* Membuat kotak berada di tengah secara horizontal */
        }

        .new-text {
            margin-left: -850px;
            /* Atur jarak kiri teks penerima */
            font-size: 20px;
            margin-top: 0px;
            /* Mengatur jarak atas teks penerima */
        }

        .divider {
            margin-top: 0px;
            height: 55px;
            /* Memanjangkan garis pemisah untuk menutupi tinggi elemen */
            background-color: black;
            /* Warna garis pemisah */
        }

        .flex {
            align-items: center;
            justify-content: center;
        }

        .absolute {
            margin-top: -10px;
        }

        .rawr {
            margin-top: -40px;
            transform: scale(1.3);
        }
    </style>

</head>

<body class="bg-[#f8fafc] h-screen">
    <div class="mt-14">
        <div class="grid grid-cols-1 grid-flow-row gap-0 border border-black w-5/6 mx-auto">
            <div class="h-10 mx-5 mt-4 relative">
                <img src="./assets/icons/toko.png" alt="" class="absolute left-0 h-full">
                <h1 class="font1 ml-12">Lustilvy</h1>
                <img src="./assets/icons/delivery.png" alt="" class="rawr absolute right-1 h-full">
            </div>

            <div class="h-80 flex border relative">
                <!-- Kotak tengah baru -->
                <div class="box1">
                    <div class="">
                        No. Pesanan 240320GGVM1HUD
                    </div>
                </div>

                <!-- Teks Penerima -->
                <div class="new-text">
                    Penerima : Marsya Huriyah <br>
                    Username : hryyyh <br><br>
                    Orchard Park Blok X No. 505 <br>
                    Batam Centre, 29431<br>
                    +628341428919

                    <div class="new-text-right ml-100">Pengirim : Lustilvy</div>

                </div>
            </div>

            <div class="h-14 grid">
                <div class="flex mb-4 ">CASHLESS</div>
                <div class="divider"></div>
                <div class="flex mb-4">2 pcs</div>
            </div>
            <div class="h-28 border1">
                <span class="text1">Waktu Pengiriman : 28/03/2024</span> <br>
                <span class="text" style="margin-left: 36px;">Monstera Deliciosa</span>
                <span class="text" style="margin-left: 40px;">Rp. 165.000</span> <br>
                <span class="text" style="margin-left: 36px;">Calla Lily</span>
                <span class="text" style="margin-left: 114px;">Rp. 200.000</span>
            </div>
        </div>



</body>

</body>

</html>