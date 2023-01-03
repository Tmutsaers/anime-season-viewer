<?php

namespace Module\HttpClient;

use Module\HttpClient\Main;

$year = $_POST["year"];
$season = $_POST["season"];

var_dump($_POST);

$main = new Main();

$test = NULL;

var_dump($main);

$test = $main->getString();

var_dump($main);

//$smarty->assign('animes', $main->getSeason($year,$season));

