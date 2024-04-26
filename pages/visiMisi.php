<?php

session_start();
if (!isset($_SESSION['user'])) {
    echo "
        <script>
            window.location.href='login.php'
        </script>
    ";
}

if ($_SESSION['user']['role'] != "A") {
    echo "
            <script>
                window.location.href='user/home.php'
            </script>
        ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paleto Bay | Visi Misi</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>

<body class="vh-100">
    <div class="d-flex w-100">
        <div class="p-2 border border-dark d-flex justify-content-center align-items-center" style="width: 17%;">
            <img src="../assets/Paleto-bay-logo.jpg" alt="rocklee.png" style="width: 150px; height: 150px;">
        </div>
        <div class="p-2 border border-dark" style="width: 83%;">
            <h1 class="text-dark text-center" style="font-size: 130px;">Paleto Bay</h1>
        </div>
    </div>
    <nav class="w-100 d-flex">
        <a href="home.php" class="border border-dark rounded-0 text-decoration-none btn btn-light " style="width: 17%;">Hai, <?= $_SESSION['user']['nama'] ?></a>
        <a href="home.php" class="border border-dark rounded-0 text-decoration-none btn btn-light " style="width: 17%;">Home</a>
        <a href="visiMisi.php" class="border border-dark rounded-0 text-decoration-none btn btn-light active" style="width: 17%;">Visi dan Misi</a>
        <a href="produkKami.php" class="border border-dark rounded-0 text-decoration-none btn btn-light " style="width: 17%;">Produk Kami</a>
        <a href="kontak.php" class="border border-dark rounded-0 text-decoration-none btn btn-light " style="width: 16%;">Kontak Kami</a>
        <a href="about.php" class="border border-dark rounded-0 text-decoration-none btn btn-light" style="width: 16%;">Tentang Kami</a>
    </nav>
    <div class="w-100 d-flex" style="height: 65vh;">
        <aside class="border border-dark d-flex flex-column p-2" style="width: 17%;">
            <a href="galeriFoto.php" class="text-decoration-none btn btn-light">Galeri Foto</a>
            <a href="klien.php" class="text-decoration-none btn btn-light ">Klien</a>
            <a href="../util/logout.php" class="text-decoration-none btn btn-light">Log out</a>
        </aside>
        <main class="text-justify border border-dark p-4 position-absolute top-70 end-0 overflow-y-scroll" style="width: 83%; height:65vh">
            <h3>Visi dan Misi Kami</h3>
            <p>
                Visi kami adalah menjadi pusat kegiatan bagi para pengendara motor di Paleto Bay, tempat mereka dapat merayakan kebebasan bersepeda dan mengeksplorasi keindahan alam lokal. Misi kami adalah:
            </p>

            <ol>
                <li>Membangun Komunitas yang Solid: Kami berkomitmen untuk membangun ikatan yang kuat di antara anggota kami, menciptakan lingkungan yang ramah dan mendukung bagi semua pecinta motor.</li>
                <li>Memperkaya Pengalaman Berkendara: Kami ingin memperkaya pengalaman berkendara anggota kami dengan menyediakan kesempatan untuk menjelajahi rute yang menarik dan mengadakan acara yang menghibur.</li>
                <li>Menjunjung Tinggi Keselamatan: Kami mengutamakan keselamatan dalam setiap perjalanan kami dan berusaha untuk meningkatkan kesadaran akan pentingnya berkendara dengan aman dan bertanggung jawab.</li>
                <li>Mendorong Kebersamaan: Kami percaya bahwa petualangan yang dibagikan adalah petualangan yang lebih berarti. Kami mendorong anggota kami untuk saling mendukung dan merayakan pencapaian mereka di dunia motor.</li>
            </ol>
            <h3>Apa yang Kami Tawarkan</h3>
            <ul>
                <li>Perjalanan dan Petualangan: Kami mengadakan berbagai perjalanan, mulai dari jalan-jalan santai di sekitar Paleto Bay hingga perjalanan petualangan yang menantang</li>
                <li>Acara Sosial: Kami mengadakan acara sosial secara teratur, seperti pertemuan anggota, BBQ, dan acara amal, untuk memperkuat ikatan antara anggota kami.</li>
                <li>Kesempatan Belajar: Kami menyelenggarakan sesi belajar tentang keselamatan berkendara, perawatan motor, dan teknik berkendara yang lebih baik.</li>
            </ul>
            <h3>Bergabunglah dengan Kami!</h3>
            <p>Apakah Anda seorang pengendara motor yang bersemangat, atau hanya ingin mengeksplorasi keindahan alam Paleto Bay dengan semangat petualangan, Paleto Bay Riders adalah tempat yang tepat untuk Anda. Bergabunglah dengan kami hari ini dan jadilah bagian dari komunitas yang berkembang dan menyenangkan!</p>
            <a href="kontak.php" class="btn btn-light border border-dark">Kontak Kami</a>
        </main>
    </div>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>