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
    <title>Paleto Bay | Kontak</title>
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
        <a href="kontak.php" class="border border-dark rounded-0 text-decoration-none btn btn-light active" style="width: 16%;">Kontak Kami</a>
        <a href="about.php" class="border border-dark rounded-0 text-decoration-none btn btn-light" style="width: 16%;">Tentang Kami</a>
    </nav>
    <div class="w-100 d-flex" style="height: 65vh;">
        <aside class="border border-dark d-flex flex-column p-2" style="width: 17%;">
            <a href="galeriFoto.php" class="text-decoration-none btn btn-light">Galeri Foto</a>
            <a href="klien.php" class="text-decoration-none btn btn-light ">Klien</a>
            <a href="../../util/logout.php" class="text-decoration-none btn btn-light">Log out</a>
        </aside>
        <main class="text-justify border border-dark p-4 position-absolute top-70 end-0 overflow-y-scroll" style="width: 83%; height:65vh">
            <h3>Kontak Paleto Bay</h3>
            <ul>
                <li><strong>Alamat Klub:</strong></li>
                <h6>Paleto Bay Riders Clubhouse</h6>
                <h6>Jalan Sunset, Paleto Bay</h6>
                <h6>Los Santos County, San Andreas</h6>
                <li><strong>Alamat Klub:</strong></li>
                <h6>Paleto Bay Riders <br>
                    PO Box 1234</h6>
                <h6>Paleto Bay, San Andreas <br>
                    Kode Pos: 54321</h6>
                <li><strong>Email: <a href="">info@paleto-bay-riders.com</a></strong></li>
                <li><strong>Telp: +1 (555) 123-4567</strong></li>
                <li><strong>Sosial Media</strong></li>
                <ul>
                    <li>Facebook : <a href="">facebook.com/paleto-bay-riders</a></li>
                    <li>Instagram : <a href="">instagram.com/paleto-bay-riders</a></li>
                    <li>TikTok : <a href="">TikTok.com/paleto-bay-riders</a></li>
                    <li>X : <a href="">x.com/paleto-bay-riders</a></li>
                </ul>
            </ul>
        </main>
    </div>
    <script src="../../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>