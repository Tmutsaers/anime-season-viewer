<?php

namespace Module\HttpClient;

require '..\modules\HttpClient\Weekdays.php';
require '..\modules\HttpClient\Main.php';

$year = $_POST["year"];
$season = $_POST["season"];

var_dump($_POST);

$main = new Main;

var_dump("test");

$test = NULL;

//var_dump($main);

$test = $main->getString();

//$test3 = new \GuzzleHttp\Client();

var_dump($test);

$smarty->assign('test','TestValue');

var_dump($test);

$test2 = array();
$test2 = $main->getTest();

var_dump($test);

var_dump($test2);

//$smarty->assign('animes', $main->getSeason($year,$season));

