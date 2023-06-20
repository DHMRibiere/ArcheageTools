<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
DEFINE ("rootdir",getcwd());
const includes = rootdir . "/includes/";

global $reply;

require "config.php";
include includes."sql.php";
include includes.'cargo.php';



$action = (!empty($_GET['action'])) ? $_GET['action'] : 'invalid';

function authAPI($APIKey = NULL)
{

}

function News()
{
    global $mysqli;
    $myNews = new stdClass();
    $result = $mysqli->query("
            SELECT 
                News.*,Accounts.A_Name 
            from 
                `News` 
                    INNER JOIN `Accounts` 
            WHERE `News`.A_ID=`Accounts`.A_ID ORDER BY `News`.N_PTime DESC");
    $i = 0;
    while($row = $result->fetch_assoc())
    {
        $newsarr[$i]['Action'] = 'News';
        $newsarr[$i]['N_ID'] = $row['N_ID'];
        $newsarr[$i]['A_Name'] = $row['A_Name'];
        $newsarr[$i]['A_News'] = $row['A_News'];
        $newsarr[$i]['N_PTime'] = $row['N_PTime'];
        $i++;
    }
    $myJSON = json_encode($newsarr);
    return $myJSON;
    unset($myJSON);
}

function InvalidAction($action = NULL)
{
    if($action == NULL) {
        $invalidAction[0]['Action'] = "No Valid Action";
    }
    if($action != NULL) {
        $invalidAction[0]['Action'] = $action;
    }
    $myJSON = json_encode($invalidAction);
    return $myJSON;
}

function getCargo($server = NULL)
{
    if($server == NULL)
    {
        return InvalidAction("Give in Servername or ID");
    }
}

function updateCargo($server = NULL)
{

}



switch ($action)
{
    case "news":
        print News();
        break;
    case "getCargo":
        print getCargo();
        break;
    default:
        print InvalidAction();
        break;

}



?>