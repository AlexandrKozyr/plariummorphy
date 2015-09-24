<?php

/*
 * @ author: Alexandr Kozyr;
 * @ email: kozyr1av@gmail.com;
 * @ class Morhpy encapsulates all movements with library phpMorphy (pattern Facade)
 *   and makes a phpMorhpy easier to use. Main goal of this class is to complite task #2 -
 *   declension of words;
 */

class Morphy {

    //object of morphy (phpmorphy - gramma lib with thesaurus/dictionary)
    private $morphy;
    //word object to operate with
    private $word;

    public function __construct($word) {
        $this->morphy = $this->GetMorphy();
        $this->word   = new Word($this->CleanUp($word));
    }

    public function process() {
        if ($this->GetGramaInfo()) {
            $this->GetGramaInfo();
            $this->GetAllForms();
            return (true);
        } else {
            return (false);
        }
    }

    /*
     * this method creates an object of phpmorphy class
     * @returns object
     */

    private function GetMorphy() {
        //includes phpMorphy lib
        require_once( './libs/phpmorphy/src/common.php');

        $dir  = './libs/phpmorphy/dicts';
        $lang = 'ru_RU';
        $opts = array(
            'storage' => PHPMORPHY_STORAGE_FILE,
        );
        //creating our phpMorphy class object
        try {
            $morphy = new phpMorphy($dir, $lang, $opts);
            return $morphy;
        } catch (phpMorphy_Exception $e) {
            die('Error occured while creating phpMorphy instance: ' . $e->getMessage());
        }
    }

    /*
     * this method chose info about word and fixed it at our object Word
     * If there are no such form thenit shouldnt be processed further.
     */

    private function GetGramaInfo() {
        //get all possible variation of word info
        $tmp_info = $this->morphy->getGramInfo($this->word->GetContent());
        //put it into word object
        if (is_array($tmp_info)) {
            $this->word->SetGramInfo($this->FilterGrammaInfo($tmp_info));
            return (true);
        } else {
            return (false);
        }
    }

    /*
     * filters information leaving only word info if there are nominative.
     * @param array $tmp_info
     * @return string
     */

    private function FilterGrammaInfo(array $tmp_info) {
        $result = array();
        foreach ($tmp_info as $item) {
            foreach ($item as $part_of_lang) {
                if (in_array('ИМ', $part_of_lang["grammems"])) {
                    $result[] = $part_of_lang;
                }
            }
        }
        return $result;
    }

    /**
     * agregates all movements for form creation and put them into our Word object
     */
    private function GetAllForms() {
        $tmp_word_info = $this->word->GetGramInfo();
        $result        = array();
        foreach ($tmp_word_info as $info) {
            $result[] = $this->GenerateForms($this->CleanGrammaInfo($info));
        }
        $this->word->SetForms($result);
    }

    /**
     * makes 7 possible forms of our word using phpmorphy
     * @param array $info
     * @return array
     */
    private function GenerateForms(array $info) {
        $tmp_len      = (count($info["grammems"]));
        $tmp_len      = ++$tmp_len;
        $tmp_len      = -$tmp_len;
        $result["им"] = $this->morphy->castFormByGramInfo($this->word->GetContent(), $info["pos"], array_pad($info["grammems"], $tmp_len, "ИМ"), true);
        $result["рд"] = $this->morphy->castFormByGramInfo($this->word->GetContent(), $info["pos"], array_pad($info["grammems"], $tmp_len, "РД"), true);
        $result["дт"] = $this->morphy->castFormByGramInfo($this->word->GetContent(), $info["pos"], array_pad($info["grammems"], $tmp_len, "ДТ"), true);
        $result["вн"] = $this->morphy->castFormByGramInfo($this->word->GetContent(), $info["pos"], array_pad($info["grammems"], $tmp_len, "ВН"), true);
        $result["тв"] = $this->morphy->castFormByGramInfo($this->word->GetContent(), $info["pos"], array_pad($info["grammems"], $tmp_len, "ТВ"), true);
        $result["пр"] = $this->morphy->castFormByGramInfo($this->word->GetContent(), $info["pos"], array_pad($info["grammems"], $tmp_len, "ПР"), true);
        $result["зв"] = $this->morphy->castFormByGramInfo($this->word->GetContent(), $info["pos"], array_pad($info["grammems"], $tmp_len, "ЗВ"), true);

        return $result;
    }

    /**
     * delete a part of gramm info with nominative marker
     * @param array $info
     * @return array
     */
    private function CleanGrammaInfo(array $info) {
        $c = count($info["grammems"]);
        for ($i = 0; $i < $c; $i++) {
            if ("ИМ" == $info["grammems"][$i]) {
                unset($info["grammems"][$i]);
            }
        }

        return $info;
    }

    /**
     * 
     * @return array word
     */
    public function GetWordOut() {
        $word = array();
        $word["content"] = $this->word->GetContent();
        $word["gramm"] = $this->word->GetGramInfo();
        $word["forms"] = $this->word->GetForms();
        return $word;
    }

    /*
     * this method clean up and prepere our word to following methods 
     */

    private function CleanUp($word) {
        $cleaned_word = trim(strip_tags(mb_strtoupper($word)));

        return $cleaned_word;
    }

}
