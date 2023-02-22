<?php

use Module\HttpClient\Handler;
use Module\HttpClient\WebPages;

require './smartyContainer.php';
require './Formhandler.php';
require './Webpages.php';
require './FileReader.php';
require './DatabaseInterface.php';

class AnimeManager
{
    // smarty template object
    var $tpl = null;

    public static $TPL_PATH = "./tpl/";
    public static $SEASONPICKER = "seasonpicker.tpl";
    public static $CURRENTSEASON = "main.tpl";
    public static $GENREPICKER = "genrepicker.tpl";
    public static $SEARCHPICKER = "searchpicker.tpl";
    public static $ANIMEDETAIL = "detailpage.tpl";
    public static $Genres = array();

    function __construct()
    {
        $this->tpl = SmartySingleton::instance();
        $this->initNav();
        self::$Genres = FileReader::ReadGenres();
        Handler::initDBConnection();
    }
    
    /**
     * initNav Initializes the navigation
     *
     * @return void
     */
    function initNav()
    {
        WebPages::init();
        $this->tpl->assign('Pages',WebPages::$webpageList);
    }
    
    /**
     * displayDetailPage Display the anime detail page
     *
     * @param  mixed $post
     * @return void
     */
    function displayDetailPage($post = array())
    {
        $animeDetail = Handler::handleGetFullAnime($post);
        
        $this->tpl->assign('animeDetail',$animeDetail);
        $this->tpl->assign('currentPage', self::$TPL_PATH . self::$ANIMEDETAIL);
        $this->tpl->display('index.tpl');
    }
    
    /**
     * handleCustomTpl Unused function
     *
     * @param  mixed $post
     * @return void
     */
    function handleCustomTpl($post = array())
    {
        $this->tpl->assign('currentPage', self::$TPL_PATH . $post['TPL']);
        $this->tpl->display('index.tpl');
    }
    
    /**
     * displaySearchPicker Display empty search picker (Search has yet to been done)
     *
     * @return void
     */
    function displaySearchPicker()
    {
        $this->tpl->assign('currentPage', self::$TPL_PATH . self::$SEARCHPICKER);
        $this->tpl->assign('genres', self::$Genres);
        $this->tpl->display('index.tpl');
    }
    
    /**
     * displaySearchPicked Display filled search picker (Search has been done)
     *
     * @param  mixed $post
     * @return void
     */
    function displaySearchPicked($post = array())
    {
        $animes = Handler::handlePostSearch($post);

        $this->tpl->assign('animes', $animes);
        $this->tpl->assign('currentPage', self::$TPL_PATH . self::$SEARCHPICKER);
        $this->tpl->assign('genres', self::$Genres);
        $this->tpl->display('index.tpl');
    }
    
    /**
     * displayGenrePicker Display empty genre picker (genre yet to be picked)
     *
     * @return void
     */
    function displayGenrePicker()
    {
        $this->tpl->assign('currentPage', self::$TPL_PATH . self::$GENREPICKER);
        $this->tpl->assign('genres', self::$Genres);
        $this->tpl->display('index.tpl');
    }
    
    /**
     * displayGenrePicked Display filled genre picker (genre has been picked)
     *
     * @param  mixed $post
     * @return void
     */
    function displayGenrePicked($post = array())
    {
        $animes = Handler::handlePostGenre($post);

        $this->tpl->assign('animes', $animes);
        $this->tpl->assign('currentPage', self::$TPL_PATH . self::$GENREPICKER);
        $this->tpl->assign('genres', self::$Genres);
        $this->tpl->display('index.tpl');
    }
    
    /**
     * displayCurrentSeason Displays the current season of Anime
     *
     * @return void
     */
    function displayCurrentSeason()
    {
        $animes = Handler::handleCurrentSeason();

        $this->tpl->assign('animes', $animes);
        $this->tpl->assign('currentPage', self::$TPL_PATH . self::$CURRENTSEASON);
        $this->tpl->display('index.tpl');
    }
    
    /**
     * displaySeasonPicked Displays a filled season picker (Season has been picked)
     *
     * @param  mixed $post
     * @return void
     */
    function displaySeasonPicked($post = array())
    {
        $animes = Handler::handlePost($post);

        $this->tpl->assign('animes', $animes);
        $this->tpl->assign('currentPage', self::$TPL_PATH . self::$SEASONPICKER );
        $this->tpl->assign('YEAR_VALUE',$post['year']);
        $this->tpl->assign('SEASON_VALUE',$post['season']);
        $this->tpl->display('index.tpl');
    }
    
    /**
     * displayEmptySeasonPicker Displays an empty season picker (Season has not yet been picked)
     *
     * @return void
     */
    function displayEmptySeasonPicker()
    {
        $this->tpl->assign('currentPage', self::$TPL_PATH . self::$SEASONPICKER );
        $this->tpl->assign('YEAR_VALUE','2023');
        $this->tpl->assign('SEASON_VALUE','Winter');
        $this->tpl->display('index.tpl');
    }
}