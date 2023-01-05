<?php

use Module\HttpClient\Handler;

require './smartyContainer.php';
require './Formhandler.php';

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
        $this->tpl->display('index.tpl');
    }

    function displayEmptySeasonPicker()
    {
        $this->tpl->assign('currentPage', self::$TPL_PATH . self::$SEASONPICKER );
        $this->tpl->display('index.tpl');
    }
}