<?php
//phpinfo();
require '/mnt/sda6/PROJECTS/CODE/code-snippets/www/inc/php/autoloader.php';

$dict = array("apple","orange","banana","carrot","pepper","omlette","mushroom","hotdog","kiwi");
$letters = "hdiaslepadkljpmcsknajakwpsidofjjasdfip";

echo "What are the longest words in ";
foreach ($dict as $dictWord) {
    echo $dictWord . ", ";
}
echo "that can be written with these letters: '" . $letters . "'.\n";

try {
    $dictObj = new DictionarySearch($dict, $letters);
    echo "Longest words: ";
    foreach ($dictObj->FindLongestWords() as $longWords) {
        echo $longWords . ", ";
    }
} catch (Exception $e) {
    echo "Object was not able to be created.\n
          DictionarySearch\n";
    error_log($e->getMessage());
}

?>