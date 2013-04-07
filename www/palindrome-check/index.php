<?php

require '/mnt/sda6/PROJECTS/CODE/code-snippets/www/inc/php/autoloader.php';

$phrase = "Taco cdat";

echo "Is '" . $phrase . "' a palindrome? ";

try {
    $palObj = new PalindromeCheck($phrase);
    if ($palObj->IsPalindrome())
        echo "Yes!\n";
    else
        echo "No...";
}
catch (Exception $e) {
    echo "Object was not able to be created.\n
          PalindromeCheck\n";
    error_log($e->getMessage());
}

?>