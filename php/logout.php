<?php

session_start();
if ($_SESSION['username']) {
    session_destroy();
    header("Location: ../index.php");
    echo "<script>alert('You are successfully logged out');</script>";
    echo "<script>window.open('../index.php', '_self');</script>";
} else {
    echo "<script>alert('You are not logged in');</script>";
    echo "<script>window.open('../index.php', '_self');</script>";
}
