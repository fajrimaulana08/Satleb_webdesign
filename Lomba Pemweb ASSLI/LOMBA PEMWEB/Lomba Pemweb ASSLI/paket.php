<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Wedding</title>
    <link rel="stylesheet" href="styler.css">
    <style>
        html {
    scroll-behavior: smooth;
}
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .box {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 30%;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .box:hover {
            transform: scale(1.05);
        }
        .box img {
            width: 100%;
            border-radius: 10px;
        }
        .box h1 {
            font-size: 20px;
            margin: 15px 0;
            color: #333;
        }
        .box p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }
        .price {
            font-size: 18px;
            color: #e74c3c;
            font-weight: bold;
            margin: 10px 0;
        }
        @media screen and (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            .box {
                width: 80%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
  <!-- NAVIGATION BAR -->
  <nav class="navbar">
    <p class="merek">Wonder Wedding</p>
    <a class="nav-item home" href="index.php">Home</a>
    <a class="nav-item" href="paket.php">Paket Wedding</a> 
    <a class="nav-item" href="contact.php">Contact</a>
    <a class="nav-item" href="syarat.php">Syarat Dan Ketentuan</a>
    <a class="nav-item" href="feed.php">FeedBack</a>
</nav>

<div class="container" >
    <!-- Box 1 -->
    <div class="box">
        <a style="text-decoration: none;" href="#sederhana">
        <img src="assets/Sederhana.jpg" alt="Wedding Package 1">
        <h1>Paket Nikah Sederhana</h1>
        <p>Termasuk tenda, dekorasi sederhana, busana pengantin, dan tata rias.</p>
        <p class="price">Rp. 25 Juta</p>
            </a>
    </div>

    <!-- Box 2 -->
    <div class="box">
        <a href="#lengkap" style="text-decoration: none;">
            <img src="assets/Lengkap.jpg" alt="Wedding Package 2">
                <h1>Paket Nikah Lengkap</h1>
                <p>Termasuk tenda, dekorasi lengkap, busana pengantin, tata rias, dan hiburan.</p>
                <p class="price">Rp. 55 Juta</p>
            </a>
    </div>

    <!-- Box 3 -->
    <div class="box">
        <a href="#premium" style="text-decoration: none;">
            <img src="assets/Premium.jpg" alt="Wedding Package 3">
            <h1>Paket Nikah Premium</h1>
            <p>Termasuk tenda premium, dekorasi mewah, busana pengantin, tata rias, busana pagar ayu, dan hiburan lengkap.</p>
            <p class="price">Rp. 80 Juta</p>
        </a>
    </div>
</div>

<!-- INI PAKET SEDERHANA -->
<section id="sederhana" style="height: 100vh; ">
    <div style="display: flex; flex-direction: column;justify-content: center; align-items: center;">
        <img src="assets/1.png" style="width: 1000px; height: 250px; margin-top: 80px; margin-bottom: 40px;">
    </div>
    <div style="display: flex; flex-direction: row; justify-content: center;">
        <div style="width: 300px;  margin: 1em; line-height: 25px;">
            <b style="font-size: 30px;">Dekorasi</b>
        <li>Dekorasi standar untuk area akad dan resepsi.</li>
        <li>Bunga dan hiasan meja minimalis.</li>
        <li>Backdrop sederhana untuk foto pengantin.</li>
    </div>
    <div style="width: 250px; margin: 1em; line-height: 25px;">
        <b style="font-size: 30px;">Cattering</b>
        <li>Hidangan untuk 100 orang (prasmanan).</li>
        <li>Menu standar (nasi, lauk utama, sayur, minuman).</li>
    </div>
    <div style="width: 250px; margin: 1em; line-height: 25px;">
        <b style="font-size: 30px;">Dokumentasi</b>
        <li>Fotografer (3-4 jam selama acara akad dan resepsi).</li>
        <li>100 foto edited.</li>
        <li>Album foto standar.</li>
    </div>
    <div style="width: 200px;margin: 1em; line-height: 25px;">
        <b style="font-size: 30px;">Entertainment</b>
        <li>Musik latar (playlist pre-recorded atau 1 pemusik solo).</li>
    </div>
    <div style="width: 200px;margin: 1em; line-height: 25px;">
        <b style="font-size: 30px;">Lainnya</b>
        <li>Rias dan busana pengantin sederhana (1 kali ganti baju).</li>
        <li> MC (1 orang) untuk mengarahkan acara.</li>
    </div>
</div>
</section>

<!-- INI PAKET LENGKAP -->
<section id="lengkap" style="height: 100vh; ">
    <div style="display: flex; flex-direction: column;justify-content: center; align-items: center;">
        <img src="assets/2.png" style="width: 1000px; height: 250px; margin-top: 80px; margin-bottom: 40px;">
    </div>
    <div style="display: flex; flex-direction: row; justify-content: center;">
        <div style="width: 300px;  margin: 1em; line-height: 25px;">
            <b style="font-size: 30px;">Dekorasi</b>
        <li>Dekorasi tema yang lebih elegan untuk area akad dan resepsi.</li>
        <li>Bunga segar, lampu gantung, dan hiasan panggung.</li>
        <li>Photobooth sederhana untuk tamu.</li>
    </div>
    <div style="width: 250px; margin: 1em; line-height: 25px;">
        <b style="font-size: 30px;">Cattering</b>
        <li>Hidangan untuk 200 orang (prasmanan).</li>
        <li>Menu lengkap (nasi, 2 lauk utama, 2 lauk tambahan, sayur, dessert, dan minuman).  </li>
        <li>2 stall makanan tambahan (snack, soto, bakso, dll.).</li>
    </div>
    <div style="width: 250px; margin: 1em; line-height: 25px;">
        <b style="font-size: 30px;">Dokumentasi</b>
        <li> Fotografer dan videografer (selama acara, termasuk pre-wedding session).</li>
        <li>200 foto edited, video highlight 5 menit. </li>
        <li>Album foto premium dan USB drive berisi semua dokumentasi.</li>
    </div>
    <div style="width: 200px;margin: 1em; line-height: 25px;">
        <b style="font-size: 30px;">Entertainment</b>
        <li> Band akustik (3 personel) atau DJ untuk resepsi.</li>
        <li>Paket sound system lengkap.</li>
    </div>
    <div style="width: 200px;margin: 1em;line-height: 25px;">
        <b style="font-size: 30px;">Lainnya</b>
        <li>Rias dan busana pengantin lengkap (2 kali ganti baju).</li>
        <li>MC profesional (2 orang, bilingual jika diperlukan).</li>
        <li>Wedding planner dan koordinator acara.</li>
    </div>
</div>
</section>

<!-- INI PAKET PREMIUM -->
<section id="premium" style="height: 100vh; ">
    <div style="display: flex; flex-direction: column;justify-content: center; align-items: center;">
        <img src="assets/3.png" style="width: 1000px; height: 250px; margin-top: 80px; margin-bottom: 40px;">
    </div>
    <div style="display: flex; flex-direction: row; justify-content: center;">
        <div style="width: 300px;  margin: 1em;line-height: 25px; ">
            <b style="font-size: 30px;">Dekorasi</b>
        <li>Dekorasi premium dengan tema mewah (full custom, lighting spesial).    </li>
        <li>Bunga segar eksklusif, karpet merah, dan photobooth premium.        </li>
        <li>Lounge area untuk tamu VIP.</li>
    </div>
    <div style="width: 250px; margin: 1em; line-height: 25px;">
        <b style="font-size: 30px;">Cattering</b>
        <li>Hidangan untuk 300 orang (prasmanan dan set menu untuk VIP). </li>
        <li>Menu mewah (nasi, 3 lauk utama, 2 lauk tambahan, aneka sayuran, dessert premium, minuman spesial).        </li>
        <li>4 stall makanan tambahan (hidangan lokal dan internasional).        </li>
    </div>
    <div style="width: 250px; margin: 1em; line-height: 25px;">
        <b style="font-size: 30px;">Dokumentasi</b>
        <li>Fotografer dan videografer profesional (full day).        </li>
        <li>300 foto edited, video cinematic 10 menit.        </li>
        <li>Album foto eksklusif, USB drive, dan cetak kanvas.        </li>
    </div>
    <div style="width: 200px;margin: 1em; line-height: 25px;">
        <b style="font-size: 30px;">Entertainment</b>
        <li>Live band (5 personel) atau DJ terkenal.        </li>
        <li>Sound system dan lighting show untuk hiburan.        </li>
        <li>Performer tambahan (penari tradisional atau modern).        </li>
    </div>
    <div style="width: 200px;margin: 1em;line-height: 25px;">
        <b style="font-size: 30px;">Lainnya</b>
        <li>Rias dan busana pengantin mewah (3 kali ganti baju, termasuk pakaian adat).        </li>
        <li> MC profesional dengan 2 bahasa.        </li>
        <li>Wedding planner VIP dan koordinator acara lengkap.        </li>
        <li>fasilitas mobil pengantin dan penginapan 1 malam di hotel bintang 5.</li>
    </div>
</div>
</section>

<footer style="font-weight: 40px;background-color: rgb(128, 125, 125);padding: 20px; text-align: center;">
    <p>Copyright &copy; 2024 Wonder Wedding.</p>
</footer>
<script src="data.js" type="application/javascript"></script>
</body>
</html>