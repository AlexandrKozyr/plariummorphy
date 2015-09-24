<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-24 12:44:48
         compiled from "D:\localsite\MorphyPlarium\sources\view\resultTaskTwo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176245603bf7b987984-01239660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bccba703679309143a7b8c0eb7205ff4945d736a' => 
    array (
      0 => 'D:\\localsite\\MorphyPlarium\\sources\\view\\resultTaskTwo.tpl',
      1 => 1443087885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176245603bf7b987984-01239660',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5603bf7b9e9410_30592927',
  'variables' => 
  array (
    'result' => 0,
    'v' => 0,
    'k' => 0,
    'v2lvl' => 0,
    'k2lvl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5603bf7b9e9410_30592927')) {function content_5603bf7b9e9410_30592927($_smarty_tpl) {?><div id="task_result2">
    <h4>Склонения по падежам :</h4>
    <?php if ((count($_smarty_tpl->tpl_vars['result']->value["gramm"])>0)) {?>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['result']->value["gramm"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <p>
                <b>
                    <?php echo $_smarty_tpl->tpl_vars['result']->value["content"];?>
 - (Часть речи: <?php echo $_smarty_tpl->tpl_vars['v']->value["pos"];?>
; Граматическая информация о слове: <?php echo implode(", ",$_smarty_tpl->tpl_vars['v']->value["grammems"]);?>
):
                </b>
            </p>
            <?php  $_smarty_tpl->tpl_vars['v2lvl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v2lvl']->_loop = false;
 $_smarty_tpl->tpl_vars['k2lvl'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['result']->value["forms"][$_smarty_tpl->tpl_vars['k']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v2lvl']->key => $_smarty_tpl->tpl_vars['v2lvl']->value) {
$_smarty_tpl->tpl_vars['v2lvl']->_loop = true;
 $_smarty_tpl->tpl_vars['k2lvl']->value = $_smarty_tpl->tpl_vars['v2lvl']->key;
?>
                <?php if (($_smarty_tpl->tpl_vars['v2lvl']->value)) {?>
                    <p>
                        <b>
                            <?php echo $_smarty_tpl->tpl_vars['k2lvl']->value;?>
 : 
                        </b>
                        <?php echo $_smarty_tpl->tpl_vars['v2lvl']->value[0];?>

                    </p>
                <?php }?>
            <?php } ?>
        <?php } ?>
    <?php } else { ?>
        <p>
           Вы ввели слово не в именительном падеже - пожалуйста проверьте правильность ввода!
        </p>
    <?php }?>
</div><?php }} ?>
