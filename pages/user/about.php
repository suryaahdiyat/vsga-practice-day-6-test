<?php

session_start();
if (!isset($_SESSION['user'])) {
    echo "
        <script>
            window.location.href='../login.php'
        </script>
    ";
}

if ($_SESSION['user']['role'] != "B") {
    echo "
            <script>
                window.location.href='../home.php'
            </script>
        ";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paleto Bay | Tentang Kami</title>
    <link rel="stylesheet" href="../../bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>

<body class="vh-100">
    <div class="d-flex w-100">
        <div class="p-2 border border-dark d-flex justify-content-center align-items-center" style="width: 17%;">
            <img src="../../assets/Paleto-bay-logo.jpg" alt="rocklee.png" style="width: 150px; height: 150px;">
        </div>
        <div class="p-2 border border-dark" style="width: 83%;">
            <h1 class="text-dark text-center" style="font-size: 130px;">Paleto Bay</h1>
        </div>
    </div>
    <nav class="w-100 d-flex">
        <a href="home.php" class="border border-dark rounded-0 text-decoration-none btn btn-light " style="width: 17%;">Hai, <?= $_SESSION['user']['nama'] ?></a>
        <a href="home.php" class="border border-dark rounded-0 text-decoration-none btn btn-light " style="width: 17%;">Home</a>
        <a href="visiMisi.php" class="border border-dark rounded-0 text-decoration-none btn btn-light " style="width: 17%;">Visi dan Misi</a>
        <a href="produkKami.php" class="border border-dark rounded-0 text-decoration-none btn btn-light " style="width: 17%;">Produk Kami</a>
        <a href="kontak.php" class="border border-dark rounded-0 text-decoration-none btn btn-light " style="width: 16%;">Kontak Kami</a>
        <a href="about.php" class="border border-dark rounded-0 text-decoration-none btn btn-light active" style="width: 16%;">Tentang Kami</a>
    </nav>
    <div class="w-100 d-flex" style="height: 65vh;">
        <aside class="border border-dark d-flex flex-column p-2" style="width: 17%;">
            <a href="galeriFoto.php" class="text-decoration-none btn btn-light">Galeri Foto</a>
            <a href="klien.php" class="text-decoration-none btn btn-light ">Klien</a>
            <a href="../../util/logout.php" class="text-decoration-none btn btn-light">Log out</a>
        </aside>
        <main class="text-justify border border-dark p-4 position-absolute top-70 end-0 overflow-y-scroll" style="width: 83%; height:65vh">
            <h3>Tentang Paleto Bay</h3>
            <p>
                Selamat datang di Paleto Bay Riders, komunitas yang bersemangat dalam menjelajahi keindahan alam dan petualangan di sekitar Paleto Bay dengan semangat persaudaraan dan kebersamaan.
            </p>
            <h3>Siapa Kami?</h3>
            <p>
                Paleto Bay Riders adalah klub motor yang didirikan oleh sekelompok pengendara motor yang berasal dari Paleto Bay dan sekitarnya. Kami adalah gabungan dari individu yang bersemangat, dari pengendara yang berpengalaman hingga mereka yang baru memulai petualangan mereka di dunia motor.
            </p>
            <h3>Sejarah Awal Pembentukan Paleto Bay</h3>
            <p>Paleto Bay Riders lahir dari semangat petualangan dan kebersamaan antara sekelompok pengendara motor yang bersemangat di kota kecil Paleto Bay. Ceritanya dimulai pada tahun 2008, ketika beberapa teman dekat yang tergila-gila pada motor dan kebebasan berkendara mereka mulai merasa bahwa keindahan alam sekitar Paleto Bay layak untuk dieksplorasi bersama.</p>
            <p>Pada suatu hari, mereka bertemu di salah satu bengkel motor lokal, sambil berbagi cerita petualangan mereka dan mimpi-mimpi tentang perjalanan jauh di sepanjang pesisir dan pegunungan yang indah. Dari pertemuan yang penuh semangat itu, gagasan untuk membentuk sebuah klub motor lokal mulai muncul.</p>
            <p>Dengan semangat yang membara, mereka mulai merencanakan perjalanan pertama mereka bersama-sama. Perjalanan ini, meskipun singkat, membawa mereka melewati pemandangan alam yang menakjubkan dan memperdalam persahabatan mereka. Setelah pengalaman yang memuaskan itu, mereka semakin yakin bahwa membentuk sebuah klub motor akan menjadi langkah yang tepat.</p>
            <p>Pada tahun 2009, Paleto Bay Riders resmi dibentuk dengan tujuan untuk mengumpulkan para pengendara motor lokal yang berbagi hasrat yang sama untuk petualangan dan kebersamaan. Dari waktu ke waktu, klub ini terus tumbuh, menarik pengendara motor dari berbagai latar belakang dan tingkat pengalaman, tetapi semua bersatu oleh cinta mereka terhadap kebebasan bersepeda dan keindahan alam Paleto Bay.</p>
            <p>Hingga saat ini, Paleto Bay Riders terus menjadi rumah bagi para pecinta motor di Paleto Bay dan sekitarnya, menjadi tempat bagi mereka untuk merayakan semangat petualangan dan persaudaraan.</p>
        </main>
    </div>
    <script src="../../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>