<?php 

require_once('..//vendor//smarty//smarty//libs//Smarty.class.php' );
class SmartySingleton
{
    static private $instance;

    static public function instance() 
    {
        if (!isset(self::$instance))
        {
            $smarty = new \Smarty();

            $smarty->setTemplateDir('../templates');
            $smarty->setConfigDir('../config');
            $smarty->setCompileDir('../compile');
            $smarty->setCacheDir('../cache');     
            
            self::$instance = $smarty;
        };
        return self::$instance;
    }
}