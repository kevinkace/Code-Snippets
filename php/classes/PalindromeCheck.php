<?php

/**
 * Determines if a phrase is a palindrome.
 *
 * @package    Code Snippets
 * @subpackage PHP
 * @author     Kevin A. Cameron <kevin AT kacevisual.DOT com>
 * @copyright  None
 * @license    None
 * @version    1.0
 * @link       http://kacevisual.com
 * @since      Class available since release 1.01
 */

class PalindromeCheck
{
    /**
     * A phrase, to be checked if it is a palindrome.
     * Ex. "Taco cat"
     *
     * @var $phrase
     * @access private
     */
    private $phrase;

    /**
     * A simplified version of the phrase, spaces removed, converted to lower case.
     * Ex. "tacocat"
     *
     * @var $simplePhrase
     * @access private
     */
    private $simplePhrase;


    /**
     * Creates PalindromeCheck object
     *
     * @param string $phrase
     * @return PalindromeCheck A PalindromeCheck object.
     */
    public function __construct($phrase)
    {
        $this->phrase = $phrase;
        $this->simplePhrase = strtolower(str_replace(" ", "", $phrase));
    }


    /**
     * Recursively checks if the simple phrase is a palindrome.
     * @return bool TRUE if a palindrome, FALSE if not.
     */
    public function IsPalindrome()
    {
        $isPalindrome = TRUE;
        if (strlen($this->simplePhrase)>1) {
            if ($this->simplePhrase[0] == $this->simplePhrase[strlen($this->simplePhrase)-1]) {
                $subPhrase = new PalindromeCheck($this->GetSubString());
                $isPalindrome = $subPhrase->IsPalindrome();
            }
            else {
                $isPalindrome = FALSE;
            }
        }
        return $isPalindrome;
    }


    /**
     * Will replace once I have internet and see what the SPL substring function is.
     */
    public function GetSubString()
    {
        $subString = " ";
        for ($i=0; $i < (strlen($this->simplePhrase)-2); $i++) { 
            $subString[$i] = $this->simplePhrase[$i+1];
        }
        return $subString;
    }

}

?>