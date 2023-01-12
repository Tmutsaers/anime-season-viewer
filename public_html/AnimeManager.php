<?php

use Module\HttpClient\Handler;
use Module\HttpClient\WebPages;

require './smartyContainer.php';
require './Formhandler.php';
require './Webpages.php';

class AnimeManager
{
    // smarty template object
    var $tpl = null;

    public static $TPL_PATH = "./tpl/";
    public static $SEASONPICKER = "seasonpicker.tpl";
    public static $CURRENTSEASON = "main.tpl";

    function __construct()
    {
        $this->tpl = SmartySingleton::instance();
        $this->initNav();
    }

    function initNav()
    {
        WebPages::init();
        $this->tpl->assign('Pages',WebPages::$webpageList);
    }

    function handleCustomTpl($post = array())
    {
        $this->tpl->assign('currentPage', self::$TPL_PATH . $post['TPL']);
        $this->tpl->display('index.tpl');
    }

    function displayCurrentSeason()
    {
        $this->tpl->assign('currentPage', self::$TPL_PATH . self::$CURRENTSEASON);
        $this->tpl->display('index.tpl');
    }

    function displaySeasonPicked($post = array())
    {
        $animes = Handler::handlePost($post);
        $this->tpl->assign('animes', $animes);
        $this->tpl->assign('currentPage', self::$TPL_PATH . self::$SEASONPICKER );
        $this->tpl->assign('YEAR_VALUE',$post['year']);
        $this->tpl->assign('SEASON_VALUE',$post['season']);
        $this->tpl->display('index.tpl');
    }

    function displayEmptySeasonPicker()
    {
        $this->tpl->assign('currentPage', self::$TPL_PATH . self::$SEASONPICKER );
        $this->tpl->assign('YEAR_VALUE','2023');
        $this->tpl->assign('SEASON_VALUE','Winter');
        $this->tpl->display('index.tpl');
    }
}