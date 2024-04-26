<?php
session_start();

unset($_SESSION['user']);
session_destroy();
echo "
    <script>window.location.href='../pages/login.php'</script>
";
