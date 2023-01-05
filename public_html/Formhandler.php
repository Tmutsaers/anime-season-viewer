<?php

namespace Module\HttpClient;


require '..\modules\HttpClient\Weekdays.php';
require '..\modules\HttpClient\Main.php';
require '..\modules\HttpClient\Anime.php';

// $year = $_POST["year"];
// $season = $_POST["season"];

class Handler
{
    public static $FILES_PATH = ".\\files";

    public static function handleGet(): array
    {
        $readFile = file_get_contents(self::$FILES_PATH . '\animeSeason.txt');
        $processed = main::processSeasonJSON(json_decode($readFile,true));
        return $processed;
    }

    public static function handlePost($Post): array
    {
        // if(file_exists(self::$FILES_PATH . '\animeSeason.txt') === false)
        // {
        //     $year = $Post['year'];
        //     $season = $Post['season'];

        //     $cUrlConnection = curl_init();

        //     curl_setopt($cUrlConnection, CURLOPT_URL, 'https://api.jikan.moe/v4/seasons/'.$year.'/'.$season);
        //     curl_setopt($cUrlConnection, CURLOPT_RETURNTRANSFER, true);

        //     $answer = curl_exec($cUrlConnection);
        //     curl_close($cUrlConnection);

        //     file_put_contents(self::$FILES_PATH . '\animeSeason.txt', $answer);
        // }
        // $readFile = file_get_contents(self::$FILES_PATH . '\animeSeason.txt');

        $year = $Post['year'];
        $season = $Post['season'];

        $cUrlConnection = curl_init();

        curl_setopt($cUrlConnection, CURLOPT_URL, 'https://api.jikan.moe/v4/seasons/'.$year.'/'.$season);
        curl_setopt($cUrlConnection, CURLOPT_RETURNTRANSFER, true);

        $answer = curl_exec($cUrlConnection);
        curl_close($cUrlConnection);

        $processed = main::processSeasonJSON(json_decode($answer,true));
        return $processed;
    }
}

// Working curl 
//------------------------------------------------------------------------------------
// $cUrlConnection = curl_init();

// curl_setopt($cUrlConnection, CURLOPT_URL, 'https://api.jikan.moe/v4/seasons/'.$year.'/'.$season);
// curl_setopt($cUrlConnection, CURLOPT_RETURNTRANSFER, true);

// $answer = curl_exec($cUrlConnection);
// curl_close($cUrlConnection);


// $processed = main::processSeasonJSON(json_decode($answer,true));

// var_dump($processed);