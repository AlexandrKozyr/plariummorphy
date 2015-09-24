<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-23 20:07:58
         compiled from "D:\localsite\MorphyPlarium\sources\view\resultTaskOne.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270475602c4e01f2226-85998651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e853ecf8b2158d6e0c65dc92065a889c7693a8c5' => 
    array (
      0 => 'D:\\localsite\\MorphyPlarium\\sources\\view\\resultTaskOne.tpl',
      1 => 1443028075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270475602c4e01f2226-85998651',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5602c4e0219337_59622738',
  'variables' => 
  array (
    'result' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5602c4e0219337_59622738')) {function content_5602c4e0219337_59622738($_smarty_tpl) {?><div id="task_result1">

    <h4>Совпадения :</h4>
    <?php if (count($_smarty_tpl->tpl_vars['result']->value["task_1_1"])>0) {?>
        <p>
            <b>
                1 слово:
            </b></br>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['result']->value["task_1_1"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 ( к-во - <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
 )</br>
            <?php } ?>

        </p>
        <p>
            <b>
                <?php echo $_smarty_tpl->tpl_vars['result']->value["task_1_2"]["how_much_words"];?>
 слова:
            </b></br>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['result']->value["task_1_1"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <?php echo $_smarty_tpl->tpl_vars['k']->value;?>

            <?php } ?>
            ( к-во - <?php echo $_smarty_tpl->tpl_vars['result']->value["task_1_2"]["repeats"];?>
 )
        </p>
    <?php } else { ?>
        <p>
            К сожалению, нет совпадений!
        </p>
    <?php }?>
</div><?php }} ?>
