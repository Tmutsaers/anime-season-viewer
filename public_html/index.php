<?php  

    require_once __DIR__.'../../vendor/autoload.php';

    $smarty = new Smarty();

    $smarty->setTemplateDir('../templates');
    $smarty->setConfigDir('../config');
    $smarty->setCompileDir('../compile');
    $smarty->setCacheDir('../cache');
//$smarty->testInstall();
    $smarty->display('index.tpl');
 ?>