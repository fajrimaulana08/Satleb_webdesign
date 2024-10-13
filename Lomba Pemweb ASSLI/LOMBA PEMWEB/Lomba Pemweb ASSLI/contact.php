<?php
require 'koneksi.php';

$form = query("SELECT * FROM form");

// query table
$reportQuery = "SELECT * FROM form"; // Sesuaikan dengan nama tabel dan kolom
$reportResult = mysqli_query($conn, $reportQuery);

// Memastikan query berhasil
if ($reportResult && mysqli_num_rows($reportResult) > 0) {
    $reports = mysqli_fetch_all($reportResult, MYSQLI_ASSOC); // Mengambil semua data laporan
} else {
    $reports = []; // Tidak ada laporan
}

// Mengecek jika form di-submit
if (isset($_POST["submit"])) {
    $first = $_POST["first"];
    $last = $_POST["last"];
    $email = $_POST["email"];
    $nomor = $_POST["nomor"];
    $date = $_POST["date"];
    $service = $_POST["service"];
    $budget = $_POST["budget"];
    $guest = $_POST["guest"];
    $request = $_POST["request"];

    // Insert data ke dalam database
    $query = "INSERT INTO form VALUES('', '$first', '$last', '$email', '$nomor', '$date', '$service', '$budget', '$guest', '$request')";
    mysqli_query($conn, $query);

    // Redirect ke halaman yang sama setelah berhasil menyimpan
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat</title>
    <link rel="stylesheet" href="styler.css">
    
</head>
<body>
  <style>
    .KantorPusat p {
      margin: 0px 0 0 20px;
    }

    body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.container {
    width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.title {
    text-align: center;
    font-size: 2em;
    font-weight: bold;
    margin-bottom: 10px;
}

.subtitle {
    text-align: center;
    font-size: 18px;
    color: #666;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
    margin-right: 25px;
}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

input, select, textarea {
    width: 100%;
    padding: 10px;
    font-size: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    display: block;
    width: 100%;
    padding: 10px;
    font-size: 20px;
    background-color: #EAD8B1;
    color: #000000;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #bfb8aa;
}

  </style>
  <nav class="navbar">
        <p class="merek">Wonder Wedding</p>
        <a class="nav-item home" href="index.php">Home</a>
        <a class="nav-item" href="paket.php">Paket Wedding</a> 
        <a class="nav-item" href="contact.php">Contact</a>
        <a class="nav-item" href="syarat.php">Syarat Dan Ketentuan</a>
        <a class="nav-item" href="feed.php">FeedBack</a>
        </nav>
        <div style="background-color: #ead8b1; height: 70px"></div>

        <h1 style="margin:70px 0 10px 150px">Hubungi Kami</h1>
        <div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width:1200px ; height: 1500px;margin: 0 0 20px 150px;  ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6895614991004!2d112.67250617481317!3d-7.2761209927310135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fda07abaa35d%3A0x6b5d00bd3cf8abcd!2sGaleri%20Busana%20Khaela%20Wedding!5e0!3m2!1sid!2sid!4v1728452969255!5m2!1sid!2sid"
          width="1200px" height="450px" >
          </iframe>
          <h1 style="margin: 10px 0 0 30px">Kantor Pusat</h1>

        <div style="display: flex; "> 

          <div>
            <div class="KantorPusat" style="background-color: rgb(100, 100, 100); box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);filter: brightness(200%);width: 500px; height: 150px; margin: 20px 0 0 30px; ">
              <div style="display: flex; flex-direction: column; margin: 20px 0 0 0; ">  
                <p style="margin-top: 20px ;">Wonder Wedding</p>
                <p>Jl. Gunungsari 1 no 86, Wonokromo, Surabaya, Jawa Timur, Indonesia, 60242</p>
                <p>+6281222238416</p>
                <p>wonderweddingofficial@gmail.com</p>
                <p>08:00 - 21:00</p>
              </div>
            </div>
            <h1 style="margin: 10px 0 0 30px">Kantor Cabang</h1>
                <div class="KantorPusat" style="background-color: rgb(100, 100, 100); box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);filter: brightness(200%);width: 500px; height: 150px; margin: 20px 0 0 30px;">
                  <div style="display: flex; flex-direction: column; margin: 20px 0 0 0; "> 
                    <p style="margin-top: 20px ;">Wonder Wedding</p>
                    <p>Jl. Gunungsari 1 no 86, Wonokromo, Surabaya, Jawa Timur, Indonesia, 60242</p>
                    <p>+6281222238416</p>
                    <p>wonderweddingofficial@gmail.com</p>
                    <p>08:00 - 21:00</p>
                  </div>
                  </div>

                  <img src="assets/logo wonder.png" alt="logo">
                </div>

                <!-- form -->
                <div class="container">
                  <h1 class="title">GET IN TOUCH WITH US</h1>
                  <p class="subtitle">Let's plan your dream wedding together</p>
                  <form id="wedding-form" action="" method="post" autocomplete="off" onsubmit="kirim()">
                    <div class="form-group">
                        <label for="first-name">First Name *</label>
                        <input type="text" id="first-name" name="first" required>
                      </div>
                      <div class="form-group">
                        <label for="last-name">Last Name *</label>
                        <input type="text" id="last-name" name="last" required>
                      </div>
                      <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required>
                      </div>
                      <div class="form-group">
                        <label for="phone">Phone Number / WhatsApp *</label>
                        <input type="tel" id="phone" name="nomor" required>
                      </div>
                      <div class="form-group">
                        <label for="wedding-date">Wedding Date *</label>
                        <input type="date" id="wedding-date" name="date" required>
                      </div>
                    <div class="form-group">
                      <label for="service">Service *</label>
                        <select id="service" name="service" required>
                            <option value="wedding-planner">Wedding Planner</option>
                            <option value="venue-decoration">Wedding Organizer</option>
                            <option value="catering">Wedding Packages</option>
                          </select>
                        </div>
                        <div class="form-group">
                        <label for="budget">Wedding Budget *</label>
                        <select id="budget" name="budget" required>
                            <option value="25-50">IDR 25 Juta - IDR 45 Juta</option>
                            <option value="51-79">IDR 50 Juta - IDR 75 Juta</option>
                            <option value="80+">IDR 80 Juta+</option>
                          </select>
                        </div>
                    <div class="form-group">
                        <label for="guests">Approximate Number of Guests *</label>
                        <input type="number" id="guests" name="guest" required>
                      </div>
                    <div class="form-group">
                        <label for="special-request">Any Special Request?</label>
                        <textarea id="special-request" name="request"></textarea>
                    </div>
                    <button type="submit" name="submit">Submit</button>
                  </form>
                </div>
                
                <!-- dad -->
              </div>
              </div>
              
              <footer style="font-weight: 40px;background-color: rgb(128, 125, 125);padding: 20px; text-align: center;">
            <p>Copyright &copy; 2024 Wonder Wedding.</p>
          </footer>
          <script>
            function kirim(){
              alert("Submit Berhasil!");
            }
          </script>
        </body>
</html>