<?php
$adminlevel = 0;
if(isset($_SESSION['A_ID'])) {
    $checkAdmin = $mysqli->query("SELECT `Permissions`.* FROM `Permissions` WHERE `Permissions`.`A_ID` = ");

    if($ca = $checkAdmin->fetch_assoc())
    {

    }
}
    ?>