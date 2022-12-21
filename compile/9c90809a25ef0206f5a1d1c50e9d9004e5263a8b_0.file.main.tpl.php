<?php
/* Smarty version 3.1.47, created on 2022-12-21 14:01:24
  from '/shared/httpd/test-project/templates/tpl/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63a311b432fce5_48916935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c90809a25ef0206f5a1d1c50e9d9004e5263a8b' => 
    array (
      0 => '/shared/httpd/test-project/templates/tpl/main.tpl',
      1 => 1671631281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a311b432fce5_48916935 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/shared/httpd/test-project/vendor/smarty/smarty/libs/plugins/function.run_function.php','function'=>'smarty_function_run_function',),));
echo smarty_function_run_function(array('cClass'=>"Module\HttpClient\Main",'pFunction'=>"testJSON",'aParameters'=>array(),'aVariable'=>"animes",'bStatic'=>false),$_smarty_tpl);?>


<div class="animes_container">
    <div class="animes__inner-title">
        <h1 class="animes-general-title">Animes airing this season.</h1>
    </div>
    <div class="animes__inner">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['animes']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <div class="anime-container">
                <div class="anime__inner">
                    <div class="anime__inner-image">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['images']['jpg']['image_url'];?>
">
                        <a class="block-link" href="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
"></a>
                    </div>

                    <div class="anime__inner-title">
                        <p><?php echo $_smarty_tpl->tpl_vars['value']->value['titles'][0]['title'];?>
</p>
                    </div>

                    <div class="anime__inner-description">
                        <p><?php echo $_smarty_tpl->tpl_vars['value']->value['synopsis'];?>
</p>
                    </div>

                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}
