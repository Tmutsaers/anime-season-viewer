<?php  

    require_once __DIR__.'../../vendor/autoload.php';

    $smarty = new Smarty();

    $GLOBALS['smarty'] = $smarty;

    $smarty->setTemplateDir('../templates');
    $smarty->setConfigDir('../config');
    $smarty->setCompileDir('../compile');
    $smarty->setCacheDir('../cache');
//$smarty->testInstall();
    $smarty->display('index.tpl');

    // if(empty($_GET['page'])) 
    // {
    //     $template = "main.tpl";
    //     $smarty->assign('currentPage', 'main')
    // }

 ?>