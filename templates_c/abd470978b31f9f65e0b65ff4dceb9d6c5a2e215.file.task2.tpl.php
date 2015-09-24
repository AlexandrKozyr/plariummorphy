<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-24 12:46:54
         compiled from "D:\localsite\MorphyPlarium\sources\view\task2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43955602af6b6043f2-82268940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abd470978b31f9f65e0b65ff4dceb9d6c5a2e215' => 
    array (
      0 => 'D:\\localsite\\MorphyPlarium\\sources\\view\\task2.tpl',
      1 => 1443088006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43955602af6b6043f2-82268940',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5602af6b63af10_16699197',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5602af6b63af10_16699197')) {function content_5602af6b63af10_16699197($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('view/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="main_info">
    <div class="task">
        <h4>Задание 2.</h4>
        <p>
            Пользователь вводит слово в текстовое 
            поле. Необходимо найти и вывести все 
            доступные склонения данного слова.
        </p>
    </div>
    <div class="solution">
        <h4>Решение</h4>
        <p>
            Для решения даного задания было использовано библиотеку phpmorphy.
            Детальную информацию по сокращениям можете найти по ссылке: </br>
            <a href="http://phpmorphy.sourceforge.net/dokuwiki/manual-graminfo" target="_blank">http://phpmorphy.sourceforge.net/dokuwiki/manual-graminfo</a>
        </p>
        <p>
            Для тестирования приложения введите в поле ниже слово в именительном падеже.
            После чего нажмите на кнопку найти.
        </p>
        <form class="form-signin" id="formtosend">
            <div class="form-group">
                <label for="word"></label>
                <input type="text" class="form-control" id="word">
            </div>
        </form>
        <button class="btn" id="search" style="margin-right: 20px; clear: left" onclick="ajx('taskTwo')">Склонять</button>
    </div>
    <div id="result">
    </div>
</div>


<?php }} ?>
