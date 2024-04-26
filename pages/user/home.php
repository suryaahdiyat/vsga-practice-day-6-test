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
    <title>Paleto Bay | Home</title>
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
        <a href="home.php" class="border border-dark rounded-0 text-decoration-none btn btn-light active" style="width: 17%;">Home</a>
        <a href="visiMisi.php" class="border border-dark rounded-0 text-decoration-none btn btn-light " style="width: 17%;">Visi dan Misi</a>
        <a href="produkKami.php" class="border border-dark rounded-0 text-decoration-none btn btn-light " style="width: 17%;">Produk Kami</a>
        <a href="kontak.php" class="border border-dark rounded-0 text-decoration-none btn btn-light " style="width: 16%;">Kontak Kami</a>
        <a href="about.php" class="border border-dark rounded-0 text-decoration-none btn btn-light" style="width: 16%;">Tentang Kami</a>
    </nav>
    <div class="w-100 d-flex" style="height: 65vh;">
        <aside class="border border-dark d-flex flex-column p-2" style="width: 17%;">
            <a href="galeriFoto.php" class="text-decoration-none btn btn-light">Galeri Foto</a>
            <a href="klien.php" class="text-decoration-none btn btn-light">Klien</a>
            <a href="../../util/logout.php" class="text-decoration-none btn btn-light">Log out</a>
        </aside>
        <main class="border border-dark p-4 overflow-x-auto" style="width: 83%;">
            <h1>Selamat Datang di Paleto Bay Riders!</h1>
            <p>
                Temukan kebebasan berkendara dan petualangan tanpa batas bersama komunitas pengendara motor terbaik di Paleto Bay.
            </p>
            <h3>Jelajahi Keindahan Paleto Bay</h3>
            <p>Bergabunglah dengan kami dalam perjalanan mingguan dan petualangan epik di sekitar Paleto Bay dan San Andreas. Rasakan kebebasan dan kegembiraan berkendara di tengah pemandangan alam yang menakjubkan.</p>
            <h3>Manfaat Bergabung dengan Kami</h3>
            <ol>
                <li>
                    <strong>Perjalanan Rutin</strong>
                    <ul>
                        <li>Ikuti perjalanan mingguan kami ke pantai, pegunungan, dan tempat-tempat indah lainnya di sekitar Paleto Bay</li>
                        <li>Rasakan adrenalin dalam perjalanan jarak jauh ke destinasi luar biasa di San Andreas</li>
                    </ul>
                </li>
                <li>
                    <strong>Acara Sosial</strong>
                    <ul>
                        <li>Nikmati pertemuan klub, BBQ, dan acara sosial lainnya untuk merayakan persaudaraan pengendara motor</li>
                        <li>Temukan komunitas yang ramah dan mendukung untuk berbagi cerita dan pengalaman</li>
                    </ul>
                </li>
                <li>
                    <strong>Pelatihan Berkendara</strong>
                    <ul>
                        <li>Tingkatkan keterampilan berkendara Anda melalui workshop keselamatan dan keterampilan berkendara.</li>
                        <li>Dapatkan tips dan trik dari pengendara berpengalaman untuk menjelajahi jalan raya dengan percaya diri.</li>
                    </ul>
                </li>
            </ol>
        </main>
    </div>
    <script src="../../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>