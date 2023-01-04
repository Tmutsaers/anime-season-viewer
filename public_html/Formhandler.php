<?php

namespace Module\HttpClient;

//use GuzzleHttp\Client;

require '..\modules\HttpClient\Weekdays.php';
require '..\modules\HttpClient\Main.php';
require '..\modules\HttpClient\Anime.php';

//$client = new \GuzzleHttp\Client();

$year = $_POST["year"];
$season = $_POST["season"];


$cUrlConnection = curl_init();

//curl_setopt($cUrlConnection, CURLOPT_URL, 'https://api.jikan.moe/v4/seasons/2020/fall');
curl_setopt($cUrlConnection, CURLOPT_URL, 'https://api.jikan.moe/v4/seasons/'.$year.'/'.$season);
curl_setopt($cUrlConnection, CURLOPT_RETURNTRANSFER, true);

$answer = curl_exec($cUrlConnection);
curl_close($cUrlConnection);

//json_decode($answer,true);

$processed = main::processSeasonJSON(json_decode($answer,true));

var_dump($processed);

//var_dump($answer);

//handler::handleForm();

// class handler
// {
//     public static function handleForm()
//     {
//         //$client = new \GuzzleHttp\Client();
//         //Main::onlyCreateClient();

//         $cUrlConnection = curl_init();

//         curl_setopt($cUrlConnection, CURLOPT_URL, 'https://api.jikan.moe/v4/seasons/2020/fall');
//         curl_setopt($cUrlConnection, CURLOPT_RETURNTRANSFER, true);

//         $answer = curl_exec($cUrlConnection);
//         curl_close($cUrlConnection);

//         var_dump($answer);

//         var_dump('test');
//     }
// }

















//----------------------------------------------------------------

// //echo getcwd();

// var_dump($_POST);

// $rootTest = new rootTest;

// var_dump($rootTest->text);

// //$main = new Main;

// var_dump("test");

// //var_dump($GLOBALS);

// $test = NULL;

// //var_dump($main);

// $test = main::getString();

// //$test3 = new \GuzzleHttp\Client();

// var_dump($test);

// //$smarty->assign('test','TestValue');

// var_dump($test);

// $test2 = array();
// $test2 = main::getTest();

// var_dump($test);

// var_dump($test2);

// //$smarty->assign('animes', $main->getSeason($year,$season));

