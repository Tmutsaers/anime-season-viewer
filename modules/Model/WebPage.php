<?php

namespace Module\Model;

class WebPage
{
    public $pageDisplayName;
    public $pageTpl;
    public $pageUrl;

    function __construct($dispName,$tpl,$url)
    {
        $this->pageDisplayName = $dispName;
        $this->pageTpl = $tpl . ".tpl";
        $this->pageUrl = $url;
    } 
}

