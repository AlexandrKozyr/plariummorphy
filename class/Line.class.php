<?php

/*
 * @ author: Alexandr Kozyr;
 * @ email: kozyr1av@gmail.com;
 * @ class Line is a entity responceble of each line of text agregates word objects
 */

class Line {

    // consist of words objects
    private $allWords        = array();
    //words which repeats in other lines
    private $repeatableWords = array();

    public function __construct($line) {
        $this->explodeLineIntoWords($this->CleanUp($line));
    }

    public function explodeLineIntoWords($line) {     
        $temp_words_array = explode(' ', trim($line));
        foreach ($temp_words_array as $item) {
            $word             = new Word($item);
            $this->allWords[] = $word;
        }
    }

    public function GetAllWords() {
        if (isset($this->allWords)) {
            return $this->allWords;
        } else {
            return false;
        }
    }

    //adding word to array of repeated words objects
    public function AddRepeatableWord($reapeatableWord) {
        $this->repeatableWords[] = $reapeatableWord;
    }

    public function GetRepeatableWords() {
        if (isset($this->repeatableWords)) {
            return $this->repeatableWords;
        } else {
            return false;
        }
    }

    /*
     * this method cleans from all symbols exept letters, numbers and spaces
     */

    private function CleanUp($str) {
        $str = preg_replace("/[^a-z а-яё]+/iu", '', $str);
        return $str;
    }

}
