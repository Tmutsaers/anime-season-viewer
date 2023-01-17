<?php

use Module\HttpClient\Handler;
use Module\HttpClient\WebPages;

require './smartyContainer.php';
require './Formhandler.php';
require './Webpages.php';
require './FileReader.php';

class AnimeManager
{
    // smarty template object
    var $tpl = null;

    public static $TPL_PATH = "./tpl/";
    public static $SEASONPICKER = "seasonpicker.tpl";
    public static $CURRENTSEASON = "main.tpl";
    public static $GENREPICKER = "genrepicker.tpl";
    public static $SEARCHPICKER = "searchpicker.tpl";
    public static $Genres = array();

    function __construct()
    {
        $this->tpl = SmartySingleton::instance();
        $this->initNav();
        self::$Genres = FileReader::ReadGenres();
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

    function displaySearchPicker()
    {
        $this->tpl->assign('currentPage', self::$TPL_PATH . self::$SEARCHPICKER);
        $this->tpl->assign('genres', self::$Genres);
        $this->tpl->display('index.tpl');
    }

    function displaySearchPicked($post = array())
    {
        $animes = Handler::handlePostSearch($post);
        $this->tpl->assign('animes', $animes);
        $this->tpl->assign('currentPage', self::$TPL_PATH . self::$SEARCHPICKER);
        $this->tpl->assign('genres', self::$Genres);
        $this->tpl->display('index.tpl');
    }

    function displayGenrePicker()
    {
        $this->tpl->assign('currentPage', self::$TPL_PATH . self::$GENREPICKER);
        $this->tpl->assign('genres', self::$Genres);
        $this->tpl->display('index.tpl');
    }

    function displayGenrePicked($post = array())
    {
        $animes = Handler::handlePostGenre($post);
        $this->tpl->assign('animes', $animes);
        $this->tpl->assign('currentPage', self::$TPL_PATH . self::$GENREPICKER);
        $this->tpl->assign('genres', self::$Genres);
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