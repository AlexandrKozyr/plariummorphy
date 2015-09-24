<?php
header("Content-Type: text/html; charset=utf-8");

/*
 * @ author: Alexandr Kozyr;
 * @ email: kozyr1av@gmail.com;
 * @ this file are front controller constructed for calling our main controll class;
 */
require_once 'libs/Smarty.class.php';
require_once 'class/Morphy.class.php';
require_once 'class/Controller.class.php';
require_once 'class/TextAnalizator.class.php';
require_once 'class/Line.class.php';
require_once 'class/Word.class.php';


$contr = new Controller;
$contr->process();







