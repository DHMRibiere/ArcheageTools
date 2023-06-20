<?php

include includes."sql.php";
include includes."admin.php";

$page = (!empty($_GET['page'])) ? $_GET['page'] : 'cargo';
if($page == 'index' || $page == 'cargo')
{
    include includes.'/news.php';
    include includes.'/cargo.php';
}
else
{
    include includes."{$page}.php";
}



?>