<?php
    $password = $_GET['password'];
    $security_code = $_GET['security-code'];

    $d_password = "";
    $d_security_code = "";
    if ($password == $d_password && $security_code == $d_security_code) {
        //seguir
        /* Connect("");//aquí */
        /* include "../pages/admin.php"; */

        header('Location: ../pages/admin.php');
    } else {
        header("Location: ../login.html");
    }
?>