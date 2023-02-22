<?php

namespace Module\HttpClient;

require '..\modules\HttpClient\Webpage.php';

/**
 * WebPages All the internal webpages are listed here
 */
class WebPages 
{
    static public $webpageList = array();

    static public function init()
    {
        array_push(self::$webpageList, new WebPage("Current Season", "main", "currentseason"));
        array_push(self::$webpageList, new WebPage("Pick a Season", "seasonpicker", "seasonpicker"));
        array_push(self::$webpageList, new WebPage("Pick a Genre", "genrepicker", "genrepicker"));
        array_push(self::$webpageList, new WebPage("Search an Anime", "searchpicker", "searchpicker"));
    }

}