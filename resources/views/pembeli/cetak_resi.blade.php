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
    outline: 3px solid black; /* Mengatur outline dengan ketebalan 3px dan warna hitam */    
    }

    .font1 {
        font-size: 24px;
        margin-top: -8px;
    }
    .border1 {
    outline: 3px solid black; /* Mengatur outline dengan ketebalan 3px dan warna hitam */    
    padding-top: 18px; /* Menambahkan padding atas */
    }

    .text1  {
        margin-left: 36px;
    }
    
    .grid {
        display: grid;
        grid-template-columns: auto 3px auto; /* Dua kolom: kiri, garis pemisah, kanan */
        gap: 0; /* Tidak ada jarak antar kolom */
    }

    .box1 {
    width: 600px; /* Atur lebar kotak */
    height: 38px; /* Atur tinggi kotak */
    background-color: #d4d4d8; /* Warna abu-abu */
    border-radius: 54px; /* Ujung tumpul */
    display: flex;
    align-items: center;
    justify-content: center;
    color: black; /* Warna teks dalam kotak */
    font-size: 25px; /* Ukuran teks dalam kotak */
    margin-top: -253px; /* Jarak antara label dan kotak */
    margin-left: -560px; /* Membuat kotak berada di tengah secara horizontal */
}

.new-text {
    margin-left: -850px; /* Atur jarak kiri teks penerima */
    font-size: 20px;
    margin-top: 0px; /* Mengatur jarak atas teks penerima */   
}

    .divider {
        margin-top: 0px;
        height: 55px; /* Memanjangkan garis pemisah untuk menutupi tinggi elemen */
        background-color: black; /* Warna garis pemisah */
    }
    
    .flex {
        align-items: center;
        justify-content: center;
    }

    .absolute 
    {
        margin-top: -10px;
    }

    .rawr
    {
        margin-top: -40px;
        transform: scale(1.3);
    }

    </style>
    
</head>

<body class="bg-[#f8fafc] h-screen">
<div class="mt-14"> 
    <div class="grid grid-cols-1 grid-flow-row gap-0 border border-black w-5/6 mx-auto">
    <div class="h-10 mx-5 mt-4 relative"> <!-- Tambahkan class "relative" untuk posisi relatif -->
    <img src="/assets/icons/toko.png" alt="" class="absolute left-0 h-full">
    <h1 class="font1 ml-12">Lustilvy</h1> <!-- Sesuaikan margin kiri untuk membuat ruang di sebelah gambar -->
    <img src="/assets/icons/mobil.png" alt="" class="rawr absolute right-5 h-full"> 
    </div>

            <div class="flex border-t border-b border-black py-4 mt-2">
                <!-- Kotak tengah baru -->
                <div class="bg-gray-300 rounded-full w-2/3 h-9 flex items-center justify-center mx-auto text-black text-xl">
                    No.Pesanan : {{ $resi_id }}
                </div>
            </div>

            <!-- Teks Penerima dan Pengirim -->
            <div class="flex justify-between text-lg mt-4 px-4 mr-60 ml-5">
                <div>
                    Penerima <span class="ml-4">: {{ $pesananGroup->first()->resi->nama_penerima }}</span><br>
                    Username <span class="ml-2">: {{ $pesananGroup->first()->resi->username }}</span><br><br>
                    {{ $pesananGroup->first()->resi->alamat }}<br>
                    {{ $pesananGroup->first()->resi->kecamatan }}, {{ $pesananGroup->first()->resi->kode_pos }}<br>
                    {{ $pesananGroup->first()->resi->no_hp }}
                </div>
                <div>
                    Pengirim : Lustilvy
                </div>
            </div>

            <div class="flex justify-center items-center mt-4 border-t border-b border-black py-4 relative">
                <div class="text-center w-2/3">{{ $pesananGroup->first()->resi->metode_pembayaran }}</div>
                <div class="absolute left-1/2 transform -translate-x-1/2 w-0.5 h-14 bg-black"></div>
                <div class="text-center w-2/3">2 pcs</div>
            </div>

            <div class="py-4 mt-4">
                <span class="block ml-4">Waktu Pemesanan : {{ $pesananGroup->first()->resi->updated_at }}</span>
                @foreach ($pesananGroup as $pesanan)
                <span class="block ml-4">{{ $pesanan->produk->nama }} x{{ $pesanan->jumlah }}<span class="ml-10">Rp{{ number_format($pesanan->jumlah * $pesanan->harga_satuan, 0, ',', '.') }}</span></span>
                <!-- <span class="block ml-4">Calla Lily<span class="ml-28">Rp.200.000</span></span> -->
                @endforeach

            </div>
        </div>
    </div>
</body>

</html>

<script type="text/javascript">
    window.print();
</script>

