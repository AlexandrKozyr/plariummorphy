<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-24 11:47:28
         compiled from "D:\localsite\MorphyPlarium\sources\view\task1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123985602ae3dde7364-93987795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccc046ba5758abe7ea04e213f322b6aa740b182d' => 
    array (
      0 => 'D:\\localsite\\MorphyPlarium\\sources\\view\\task1.tpl',
      1 => 1443084444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123985602ae3dde7364-93987795',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5602ae3de19ff9_35837345',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5602ae3de19ff9_35837345')) {function content_5602ae3de19ff9_35837345($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('view/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="main_info">
    <div class="task">
        <h4>Задание 1.</h4>
        <p>
            Есть набор строк. Необходимо: 
            1.  Найти все совпадающие слова.
            2.  Найти количество строк, в 
            которых присутствуют все найденные 
            совпадающие слова.
        </p>
    </div>
    <div class="solution">
        <h4>Решение</h4>
        <p>
            Для тестирования приложения введите в поле ниже текст и выбирите вариант поиска.
            После чего нажмите на кнопку найти
        </p>
        <form class="form-signin">
            <textarea id ="text" class="form-control" rows="6"></textarea>
        </form>
        <button class="btn btn-large btn-info" id="search" style="margin-right: 20px; clear: left" onclick="ajx('taskOne');">Найти</button>
    </div>
    <div id="result">
    </div>
</div>

<?php }} ?>
