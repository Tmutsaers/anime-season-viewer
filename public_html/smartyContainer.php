<?php 

require_once('..//vendor//smarty//smarty//libs//Smarty.class.php' );

// class Smarty_Anime extends Smarty
// {
//     function __construct()
//     {
//         parent::__construct();

//         $this->setTemplateDir('../templates');
//         $this->setConfigDir('../config');
//         $this->setCompileDir('../compile');
//         $this->setCacheDir('../cache');

//         $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
//         $this->assign('app_name', 'AnimeViewer');
//     }

// }

class SmartySingleton
{
    static private $instance;
    
    private function __construct() {}

    private function __clone() {}

    private function __wakeup() {}

    static public function instance() 
    {
        if (!isset(self::$instance))
        {
            $smarty = new Smarty();

            $smarty->setTemplateDir('../templates');
            $smarty->setConfigDir('../config');
            $smarty->setCompileDir('../compile');
            $smarty->setCacheDir('../cache');

            // $smarty->caching = Smarty::CACHING_LIFETIME_CURRENT;

            #define( 'CFG_DIR_TEMPLATES', $smarty->getTemplateDir(0) );
            
            self::$instance = $smarty;
        };
        return self::$instance;
    }
}