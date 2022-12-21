<?php

function smarty_function_run_function($parametersFromSmarty, $template)
{
    /*
    *@param string $return
    */
    $return = '';

    if(!isset($parametersFromSmarty['cClass']) || !isset($parametersFromSmarty['pFunction']))
    {
        return '';
    }

    $parameters = (isset($parametersFromSmarty['aParameters']) && is_array($parametersFromSmarty['aParameters']) ? $parametersFromSmarty['aParameters'] : []);
    $runstatic = (isset($parametersFromSmarty['bStatic']) && $parametersFromSmarty['bStatic'] === true) ? true : false;

    if (!class_exists($parametersFromSmarty['cClass'])) {
        return false;
    }

    if($runstatic === false)
    {
        $oClass = new $parametersFromSmarty['cClass']();

        $return = call_user_func_array([$oClass, $parametersFromSmarty['pFunction']], $parameters);

    } else {

       $return = call_user_func_array([$parametersFromSmarty['cClass'], $parametersFromSmarty['pFunction']], $parameters);
    }

    if(isset($parametersFromSmarty['aVariable']) && $parametersFromSmarty['aVariable'] != '')
    {
        $template->assign($parametersFromSmarty['aVariable'], $return);
    } else 
    {
        return $return;
    }
    
}
?>