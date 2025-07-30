<?php

session_start();
$id_user = $_SESSION['id'];

session_destroy();
header('Location: ../../index.php');


?>