<?php

/**
 * Find which words in input dictionary are able to be made with input letters.
 *
 * @package    Code Snippets
 * @subpackage PHP
 * @author     Kevin A. Cameron <kevin AT kacevisual DOT com>
 * @copyright  None
 * @license    None
 * @version    1.0
 * @link       http://kacevisual.com
 * @since      Class available since Release 1.0
 */

class DictionarySearch
{
    /**
     * A array of words. Can be searched for which words are constructable by the input lettes.
     * Ex. array("cat", "dog", "bird", "donkey", "cow");
     *
     * @var $dictArray
     * @access private
     */
    private $dictArray;

    /**
     * A string of characters. Used for determining which words can be spelt.
     * Ex. "dbhfbhbhsdlkjpoweruow";
     *
     * @var $inputLetters
     * @access private
     */
    private $inputLetters;


    /**
     * Creates DictionarySearch object
     *
     * @param array(string) $dictArray An array of words.
     * @param string $inputLetters A string of letters.
     * @return DictionarySearch A DictionarySearch object.
     */
    public function __construct($dictArray, $inputLetters) {
        $this->dictArray = $dictArray;
        $this->inputLetters = $inputLetters;
    }


    /**
     * Finds the longest words from the input words array that can be constructed by the input letters.
     * @return array(string) The longest words.
     */
    public function FindLongestWords()
    {
        $longestWords = array();
        $validWords = $this->FindValidWords();
        $longestWordLength = max(array_map("strlen",$validWords));

        foreach ($validWords as $validWord) {
            if (strlen($validWord) == $longestWordLength) {
                array_push($longestWords, $validWord);
            }
        }
        return $longestWords;
    }


    /**
     * Finds all words from the input words array that can be constructed by the input letters.
     * @return array(string) All words.
     */
    private function FindValidWords()
    {
        $validWords = array();

        foreach ($this->dictArray as $key => $searchWord) {
            if (self::IsWordValid($searchWord,$this->inputLetters)) {
                array_push($validWords,$searchWord);
            }
        }
        return $validWords;
    }


    /**
     * Determines if the input word can be constructed by the input letters.
     * @param string $word The word to test.
     * @param string $letters The letters to test.
     * @return bool Whether the word can be constructed by the input letters.
     */
    private static function IsWordValid($word, $letters)
    {
        $wordValid = TRUE;
        $wordHash = self::HashFromString($word);
        $letterHash = self::HashFromString($letters);

        foreach ($wordHash as $wordLetter => $wordLetterCount) {
            if (array_key_exists($wordLetter, $letterHash)) {
                if (($wordLetterCount - $letterHash[$wordLetter])>0) {
                    $wordValid = FALSE;
                }
            }
            else {
                $wordValid = FALSE;
            }
        }
        return $wordValid;
    }


    /**
     * Creates an associative array (hash map) of the letters of the input string.
     * Ex. "abccbcdf" ---> array("a"=>1, "b"=>2, "c"=>3, "d"=>1, "f"=>1)
     * @param string $word Letters/words to change into hash map.
     * @return array("X"=>int) Hash map of letters in input string.
     */
    private static function HashFromString($word)
    {
        $wordLetterHash = array();

        for ($i=0; $i < strlen($word); $i++) {
            if (!array_key_exists($word[$i], $wordLetterHash)) {
                $wordLetterHash = array_merge(array($word[$i]=>0),$wordLetterHash);
            }
            ++$wordLetterHash[$word[$i]];
        }
        return $wordLetterHash;
    }
}

?>
