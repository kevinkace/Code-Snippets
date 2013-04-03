<?php
phpinfo();
require '/home/kcameron/www/code-snippets/htdocs/inc/php/autoloader.php';

try {
    $dictObj = new DictionarySearch(array("apple","orange","banana","carrot","pepper","omlette","mushroom","hotdog","kiwi"),"hdiaslepadkljpmcsknajakwpsidofjjasdfip");
    var_dump($dictObj->FindLongestWords());
} catch (Exception $e) {
    echo "Object was not able to be created.\n";
    error_log($e->getMessage());
}

?>