<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-23 18:25:41
         compiled from "view\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212635602ae3de21cf3-12778341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4f67c78e45c6eb8432740f0a4a58b2c66fa6ecb' => 
    array (
      0 => 'view\\header.tpl',
      1 => 1443021717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212635602ae3de21cf3-12778341',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5602ae3de25b72_58609866',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5602ae3de25b72_58609866')) {function content_5602ae3de25b72_58609866($_smarty_tpl) {?><html>
    <head>
        <title>Morphy for Plarium :)</title>
        <link href="/css/bootstrap.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="/favicon.png" />
        <?php echo '<script'; ?>
 src="js/jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/main.js" type="text/javascript"><?php echo '</script'; ?>
>
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container topmenu">
                <div class="topcon nav1">
                    <a class="navbar-brand" href="/index.php"><img src="img/logo.jpg" alt="Morphy for Plarium"/> Morphy for Plarium</a>
                </div>
                
                <div class="topcon nav2">
                    <a href="/index.php?TaskOne"><button class="btn btn-primary btn-success"> Задание №1</button></a>
                    <a href="/index.php?TaskTwo"><button class="btn btn-primary btn-success"> Задание №2</button></a>
                    <a href="/index.php"><button class="btn btn-primary btn-danger">На главную</button></a>
                </div>
            </div>
        </nav>
       <?php }} ?>
