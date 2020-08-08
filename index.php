<?php

include_once "config.inc.php";
include_once "functions.inc.php";
include_once "users.inc.php";

my_page_start("Web Career Portal");

if (getUserConnection()){
    $page = prepareUserMenu();
}else{
    $page = prepareConnectionForm();
}

displayPage($page);
