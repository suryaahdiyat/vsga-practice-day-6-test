<?php

include "../util/connection.php";

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

$q = mysqli_query($conn, "SELECT * FROM users");
$users = [];
mysqli_fetch_assoc($q);
while ($u = mysqli_fetch_assoc($q)) {
    $users[] = $u;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paleto Bay | Klien</title>
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
        <a href="visiMisi.php" class="border border-dark rounded-0 text-decoration-none btn btn-light " style="width: 17%;">Visi dan Misi</a>
        <a href="produkKami.php" class="border border-dark rounded-0 text-decoration-none btn btn-light " style="width: 17%;">Produk Kami</a>
        <a href="kontak.php" class="border border-dark rounded-0 text-decoration-none btn btn-light " style="width: 16%;">Kontak Kami</a>
        <a href="about.php" class="border border-dark rounded-0 text-decoration-none btn btn-light" style="width: 16%;">Tentang Kami</a>
    </nav>
    <div class="w-100 d-flex" style="height: 65vh;">
        <aside class="border border-dark d-flex flex-column p-2" style="width: 17%;">
            <a href="galeriFoto.php" class="text-decoration-none btn btn-light">Galeri Foto</a>
            <a href="klien.php" class="text-decoration-none btn btn-light active">Klien</a>
            <a href="../util/logout.php" class="text-decoration-none btn btn-light">Log out</a>
        </aside>
        <main class="border border-dark p-4 overflow-x-auto" style="width: 83%;">
            <?php if (isset($_GET['d'])) : ?>
                <p class="position-relative bg-info p-3 border border-info text-success text-center" style="--bs-bg-opacity: .4;">Klien Berhasil Dihapus <a href="klien.php" class="position-absolute d-block text-decoration-none text-danger bg-light rounded-circle border border-danger top-0 start-100 translate-middle" style="width: 28px;height: 28px;--bs-bg-opacity: .7;">x</a></p>
            <?php endif; ?>
            <div class="p-3">
                <h2 class="">Semua Klien</h2>
            </div>
            <table class="table w-100 table-striped text-center">
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Hp</th>
                    <th>Aksi</th>
                </tr>
                <?php $index = 1; ?>
                <?php foreach ($users as $u) : ?>
                    <tr>
                        <td><?= $index ?></td>
                        <td>
                            <img src="../assets/users/<?= $u['gambar'] ?>" alt="<?= $u['gambar'] ?>" class="border border-dark" style="width: 50px;height:50px;">
                        </td>
                        <td><?= $u['nama'] ?></td>
                        <td><?= $u['email'] ?></td>
                        <td><?= $u['no_hp'] ?></td>
                        <td>
                            <div class="">
                                <a href="../util/hapusKlien.php?id=<?= $u['id'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data ini?')">Hapus</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </main>
    </div>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>