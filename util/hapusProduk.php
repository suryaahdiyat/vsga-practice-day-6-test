<?php

include "connection.php";

session_start();

if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['role'] == "A") {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $q = mysqli_query($conn, "DELETE FROM produk WHERE id = '$id'");


            echo "
                <script>
                    window.location.href='../pages/produkKami.php?d=y'
                </script>
            ";
        }
    }
}
