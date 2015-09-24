<?php

/*
 * @ author: Alexandr Kozyr;
 * @ email: kozyr1av@gmail.com;
 * @ class Word is basic element for our app contents word and other usfull information about it;
 */

class Word {

    // word as it is
    private $content;
    //forms for 2 task
    private $forms;
    //gramInfo for 2 task
    private $gramInfo;
    private $isRepeatable = false;

    public function __construct($word) {
        $this->SetContent($word);
    }
    /**
     * 
     * @param $word
     */
    public function SetContent($word) {
        $this->content = (string) $word;
    }
    /**
     * 
     * @return boolean
     */
    public function GetContent() {
        if (isset($this->content)) {
            return $this->content;
        } else {
            return false;
        }
    }

    public function SetIsRepeatable() {
        $this->isRepeatable = true;
    }

    public function GetIsRepeatable() {
        return $this->isRepeatable;
    }

    public function SetGramInfo(array $gramInfo) {
        $this->gramInfo = $gramInfo;
    }

    public function GetGramInfo() {
        return $this->gramInfo;
    }

    public function SetForms(array $forms) {
        $this->forms = $forms;
    }
    /**
     * 
     * @return boolean
     */
    public function GetForms() {
        if (isset($this->forms)) {
            return $this->forms;
        } else {
            return false;
        }
    }

}
