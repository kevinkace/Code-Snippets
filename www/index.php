<!doctype html>
<html>
<head>
    <title>Code Snippets</title>
</head>
<body>

<?php


class PalindromeCheck
{

    private $phrase;

    public function __construct($phrase)
    {
        $this->phrase = $phrase;
    }

    public function IsPalindrome()
    {
        $isPalindrome = TRUE;
        if (strlen($this->phrase)>1) {
            if ($this->phrase[0] == $this->phrase[strlen($this->phrase)-1]) {
                $subPhrase = new PalindromeCheck($this->GetSubString());
                $isPalindrome = $subPhrase->IsPalindrome();
            }
            else {
                $isPalindrome = FALSE;
            }
        }
        return $isPalindrome;
    }

    public function GetSubString()
    {
        $subString = " ";
        for ($i=0; $i < (strlen($this->phrase)-2); $i++) { 
            $subString[$i] = $this->phrase[$i+1];
        }
        return $subString;
    }

}

$palindrome = new PalindromeCheck("tettitet");

var_dump($palindrome->IsPalindrome());

//$palindrome->GetSubString();




?>



    <h1>Code Snippets</h1>
    <ul>
        <li><a href="/dictionary-check/">Dictionary Check</a></li>
    </ul>

</body>
</html>