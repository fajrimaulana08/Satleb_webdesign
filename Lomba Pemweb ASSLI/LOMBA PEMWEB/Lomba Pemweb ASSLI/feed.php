<?php
include 'connections.php';

$feedback = query("SELECT * FROM feedback");

// query table
$reportQuery = "SELECT * FROM feedback"; // Sesuaikan dengan nama tabel dan kolom
$reportResult = mysqli_query($conn, $reportQuery);

// Memastikan query berhasil
if ($reportResult && mysqli_num_rows($reportResult) > 0) {
    $reports = mysqli_fetch_all($reportResult, MYSQLI_ASSOC); // Mengambil semua data laporan
} else {
    $reports = []; // Tidak ada laporan
}

// Mengecek jika form di-submit
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $feedback = $_POST["feedback"];
    $rating = $_POST["rating"];

    // Insert data ke dalam database
    $query = "INSERT INTO feedback VALUES('', '$nama', '$feedback', '$rating')";
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
    <link rel="stylesheet" href="styler.css">
    <title>Feedback</title>
</head>

<body>
    <style>
        label {
            display: block;
        }
        
        li {
            list-style: none;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .feedback-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }

        button {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .feedback-list {
            margin-top: 20px;
            padding: 10px;
            border-top: 1px solid #ccc;
        }

        .feedback-item {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
    <!-- NAVIGATION BAR -->
    <nav class="navbar">
        <p class="merek">Wonder Wedding</p>
        <a class="nav-item home" href="index.php">Home</a>
        <a class="nav-item" href="paket.php">Paket Wedding</a> 
        <a class="nav-item" href="contact.php">Contact</a>
        <a class="nav-item" href="syarat.php">Syarat Dan Ketentuan</a>
        <a class="nav-item" href="feedback.php">FeedBack</a>
    </nav>
    <div style="background-color: #ead8b1; height: 70px"></div>



        <div class="container">
        <h1>Feedback Form</h1>
        <form id="feedbackForm" class="feedback-form" action="" method="post" autocomplete="off">
            <input type="text" id="name" name="nama" placeholder="Your Name" required>
            <textarea id="feedback" name="feedback" rows="4" placeholder="Your Feedback" required></textarea>
            <label for="rating">Rating:</label>
            <select id="rating" value="" required name="rating">
                <option value="⭐⭐⭐⭐⭐">⭐⭐⭐⭐⭐</option>
                <option value="⭐⭐⭐⭐">⭐⭐⭐⭐</option>
                <option value="⭐⭐⭐">⭐⭐⭐</option>
                <option value="⭐⭐">⭐⭐</option>
                <option value="⭐">⭐</option>
            </select>

            <button type="submit" name="submit">Submit Feedback</button>
        </form>


        <div class="feedback-list" id="feedbackList">
            </div>
            <h2>User Feedback:</h2>

             <div class="feedback-list" id="feedbackList">
                
                <?php if (empty($reports)): ?>
                    <p>Tidak ada laporan yang tersedia.</p>
                <?php else: ?>
                    <?php foreach ($reports as $report): ?>
                        <div
                            style="background-color: #ebeae7; padding: 15px; border-radius: 5px; margin-bottom: 20px; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);">
                            <ul style="list-style: none; padding: 0;">
                                <li style="font-size: 20px;"><?= htmlspecialchars($report['nama']) ?></li>
                                <li><?= htmlspecialchars($report['rating']) ?></li>
                                <li style="color: #555555;"><?= htmlspecialchars($report['feedback']) ?></li>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

    </div>

    </div>
    <!--  -->
</body>

</html>