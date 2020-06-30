<?php
    $password = $_POST['password'];
    $security_code = $_POST['security-code'];

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