<?php

/*
 * @ author: Alexandr Kozyr;
 * @ email: kozyr1av@gmail.com;
 * class Text realize all moves with our text for its analizing and geting needed info
 */

class TextAnalizator {

    private $allLines                   = array();
    private $linesWithRepeatableWords   = array();
    private $repeatableWordsInfo        = array();
    private $allWordsRepeatsInformation = array();

    public function __construct($text) {
        $this->explodeTextIntoLines($text);
    }

    /**
     * this method makes base explode on strings and created an array of lines
     * called from constructed on text needed to analize
     * @param type $text
     */
    private function explodeTextIntoLines($text) {

        $temp_lines_array = explode("\n", $this->CleanUp($text));
        foreach ($temp_lines_array as $item) {
            $line             = new Line($item);
            $this->allLines[] = $line;
        }
    }

    /**
     * method to handle all analize process
     * @return array result
     */
    public function process() {

        $this->analize();

        $result = array(
            "task_1_1" => $this->repeatableWordsInfo,
            "task_1_2" => $this->allWordsRepeatsInformation,
        );

        return $result;
    }

    /*
     * this method is created to operate data in case if we need count
     * repeats through whole text
     */

    private function analize() {
        $this->CheckIsRepeatableWordAtWholeText();
        $this->MoveRepeatableWordsAtLines();
        $this->GetLinesWithRepeatableWordsIn();
        $this->MakesAllWordsRepeatsInformation();
    }

    /**
     * this method answer the second part of task 1 how much times all repeated
     * word are repeated together at one line of text
     */
    private function MakesAllWordsRepeatsInformation() {
        $flag = 0;
        foreach ($this->linesWithRepeatableWords as $item) {
            if ($this->CheckIsAllWordsRepeateableAtLines($item)) {
                $flag++;
            }
        }
        $this->allWordsRepeatsInformation = array(
            "how_much_words" => count($this->repeatableWordsInfo),
            "repeats"        => $flag);
    }

    /**
     * checks is word repeatable at different lines
     * @param Line $line - each line object
     * @return boolean
     */
    private function CheckIsAllWordsRepeateableAtLines(Line $line) {
        $temp_words = array();
        foreach ($this->repeatableWordsInfo as $key => $value) {
            $temp_words[] = $key;
        }
        $flag   = 0;
        $amount = count($temp_words);
        foreach ($line->GetRepeatableWords() as $word) {
            foreach ($temp_words as $item) {
                if ($item == $word->GetContent()) {
                    $flag++;
                }
            }
        }
        if ($flag != $amount) {
            return (false);
        } else {
            return (true);
        }
    }

    /**
     * moves lines with repeatable words into special attribute of this object
     * for further analize
     */
    private function GetLinesWithRepeatableWordsIn() {
        foreach ($this->allLines as $item) {
            if ($item->GetRepeatableWords() != false) {
                $this->linesWithRepeatableWords [] = $item;
            }
        }
    }

    /**
     * moves words wich are repeatable at specific attributes of line object
     * for faster following analize
     */
    private function MoveRepeatableWordsAtLines() {
        foreach ($this->allLines as $item) {
            $temp_words = $item->GetAllWords();
            foreach ($temp_words as $item2) {

                if ($item2->GetIsRepeatable() == true) {
                    $item->AddRepeatableWord($item2);
                }
            }
        }
    }

    /*
     * this method checks do some word repeats at whole text if it do then counts it
     * and setting attribute at Word Object
     */

    private function CheckIsRepeatableWordAtWholeText() {
        $words = $this->MakeWordsArray();
        foreach ($words as $item) {
            $flag              = 0;
            $temp_looking_word = $item;
            foreach ($words as $item2) {
                if ($temp_looking_word->GetContent() == $item2->GetContent()) {
                    $flag++;
                }
            }
            if ($flag > 1) {
                $item->SetIsRepeatable();
                $this->repeatableWordsInfo[$item->GetContent()] = $flag;
            }
        }
    }

    /**
     * put all words at one array
     * @return array - whole words of our text
     */
    private function MakeWordsArray() {
        $temp_all_words = array();
        $temp           = array();
        foreach ($this->allLines as $item) {
            $temp[] = $item->GetAllWords();
        }
        foreach ($temp as $item) {
            foreach ($item as $item2) {
                $temp_all_words[] = $item2;
            }
        }
        return $temp_all_words;
    }

    /*
     * this method clean up and prepere our text elements to following methods 
     */

    private function CleanUp($text) {
        $cleaned_text = str_replace('<br>', '\r\n', $text);
        $cleaned_text = trim(mb_strtolower($cleaned_text));
        $cleaned_text = preg_replace("/\s\s+/", ' ', $cleaned_text);
        return $cleaned_text;
    }

}
