<?php
    session_start();
    unset($_SESSION['admin_id']);
    session_destroy();
    header('Location:  devlan_sudo_pages_logout.php');
?>