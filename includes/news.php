<?php

// $stmt = $mysqli->query("SELECT Accounts.*,Region.R_Name FROM `Accounts` INNER JOIN `Region` WHERE `Accounts`.`R_ID`=`Region`.`RID`");
$result = $mysqli->query("SELECT News.*,Accounts.A_Name from `News` INNER JOIN `Accounts` WHERE `News`.A_ID=`Accounts`.A_ID ORDER BY `News`.N_PTime DESC");

while($row = $result->fetch_row()) {
    $newsarr[] = $row;
}

?>
