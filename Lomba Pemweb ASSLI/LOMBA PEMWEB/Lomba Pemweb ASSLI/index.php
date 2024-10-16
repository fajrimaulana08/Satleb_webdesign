<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wonder Wedding</title>
    <link rel="stylesheet" href="styler.css">
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
        }

        .partner-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 30px;
            padding: 40px 10%;
        }

        .partner-item {
            position: relative;
            overflow: hidden;
        }

        .partner-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .partner-item:hover img {
            transform: scale(1.1);
        }

        .partner-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .partner-item:hover::before {
            opacity: 1;
        }

        .partner-item h2 {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: white;
            font-size: 1.5rem;
            z-index: 1;
            opacity: 1;
            transition: opacity 0.3s ease;
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

    <div class="parallax beranda">
        <p>Planning To Get Married?</p>
        <p style="font-size: 20px;">Wonder Wedding Merupakan Platform Untuk Merencanakan Acara Pernikahan</p>
        <p style="font-size: 20px;">Kami Siap Melayani Anda!</p>
        <a id="a" href="paket.php" class="tombol">Our Packet Wedding</a>
    </div>

    <div class="parallax deskripsi">
        <p class="teksDeskripsi1">Wonder Wedding Planner Organizer & Wedding Package</p>
        <p class="teksDeskripsi2">"Pernikahan yang sempurna bukanlah tentang dua orang sempurna yang bersatu, </p>
        <p class="teksDeskripsi2"> melainkan tentang dua orang tidak sempurna yang bersedia bekerjasama untuk membuat segalanya sempurna"</p>
        <p class="teksDeskripsi2" style="margin-bottom: 80px;">-Unknown-</p>
        <div style="display: flex;">
            <div style="margin-left: 50px;">
                <b style="margin: 40px 30px; font-size: 50px;">Tentang Kami</b>
                <p class="teksDeskripsi3">Wonder Wedding hadir sebagai startup yang bergerak di bidang layanan pernikahan, menawarkan berbagai solusi praktis dan elegan untuk mewujudkan pernikahan impian Anda. Dengan layanan paket pernikahan lengkap, wedding planner profesional, serta wedding organizer berpengalaman, kami berkomitmen untuk mempermudah perjalanan Anda menuju hari istimewa. Wonder Wedding memberikan perhatian khusus pada setiap detail, sehingga Anda dan pasangan dapat merayakan awal kehidupan rumah tangga yang harmonis dengan penuh kebahagiaan dan kenangan indah.</p>
            </div>
            <img src="assets/logo wonder.png" alt="" style="width:350px;height: 350px;position: relative; margin-left: 100px;">
        </div>
        <button style="border: none;position: relative; margin-left:90px;">
            <a href="contact.php" style="border-radius: 50px;font-size: 20px; padding: 20px; text-decoration: none;color: black; background-color:#EAD8B1;">Hubungi Kami</a>
        </button>
    </div>

    <div>
        <b style="margin: 40px 30px 20px 70px; font-size: 50px;">Our Partner</b>
        <div class="partner-grid">
            <div class="partner-item">
                <img src="assets/dekorasi.jpg" alt="Decorations">
                <h2>DECORATIONS</h2>
            </div>
            <div class="partner-item">
                <img src="assets/entertaiment.jpg" alt="Entertainment">
                <h2>ENTERTAINMENT</h2>
            </div>
            <div class="partner-item">
                <img src="assets/dokumentasi.jpg" alt="Documentation">
                <h2>DOCUMENTATION</h2>
            </div>
            <div class="partner-item">
                <img src="assets/catering.jpg" alt="Catering">
                <h2>CATERING</h2>
            </div>
        </div>
    </div>

    <footer style="font-weight: 40px;background-color: rgb(128, 125, 125);padding: 20px; text-align: center;">
        <p>Copyright &copy; 2024 Wonder Wedding.</p>
    </footer>
    
    <script src="data.js" type="application/javascript"></script>
</body>
</html>
