<?php

namespace Module\HttpClient;

require '..\modules\HttpClient\Webpage.php';

class WebPages 
{
    static public $webpageList = array();

    static public function init()
    {
        array_push(self::$webpageList, new WebPage("Current Season", "main", "currentseason"));
        array_push(self::$webpageList, new WebPage("Pick a Season", "seasonpicker", "seasonpicker"));
    }

}