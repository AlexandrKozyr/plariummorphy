<?php

/*
 * @ author: Alexandr Kozyr;
 * @ email: kozyr1av@gmail.com;
 * @ class Controller is a part of MVC model of this application and
 * is constructed to operate of all other elements of our system;
 */

class Controller {

    public function process() {

        if (isset($_GET["TaskOne"])) {
            $this->TaskOne();
        } else if (isset($_GET["TaskTwo"])) {
            $this->TaskTwo();
        } else if (isset($_GET["resultOne"])) {
            $this->AjaxTaskOne($_POST["text"]);
        } else if (isset($_GET["resultTwo"])) {
            $this->AjaxTaskTwo($_POST["word"]);
        } else {
            $this->StartPage();
        }
    }

    /**
     * 
     */
    private function StartPage() {
        $smarty = new Smarty();
        $smarty->display($_SERVER['DOCUMENT_ROOT'] . 'view/main.tpl');
    }

    private function TaskOne() {
        $smarty = new Smarty();
        $smarty->display($_SERVER['DOCUMENT_ROOT'] . 'view/task1.tpl');
    }

    private function TaskTwo() {
        $smarty = new Smarty();
        $smarty->display($_SERVER['DOCUMENT_ROOT'] . 'view/task2.tpl');
    }

    /**
     * 
     * @param string $text
     * @param int $type - 1(diff lines seach) or 0(all lines) 
     * @return type
     */
    private function AjaxTaskOne($text) {
        $smarty = new Smarty();
        $tmp_text   = new TextAnalizator($text);
        $r = $tmp_text->process();
        $smarty->assign('result', $r);
        $smarty->display($_SERVER['DOCUMENT_ROOT'] . 'view/resultTaskOne.tpl');
    }

    /**
     * 
     * @param string $word
     */
    private function AjaxTaskTwo($word) {
        $smarty = new Smarty();
        $morphy = new Morphy($word);
        $r      = $morphy->process();
        if ($r) {
            $smarty->assign('result', $morphy->GetWordOut());
            $smarty->display($_SERVER['DOCUMENT_ROOT'] . 'view/resultTaskTwo.tpl');
        } else {
            $smarty->display($_SERVER['DOCUMENT_ROOT'] . 'view/errorTaskTwo.tpl');
        }
    }

}
