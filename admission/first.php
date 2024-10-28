<?php
echo "hello";$x=55;$y=45;
echo "\n<br>sum is ".$x+$y; 
if (extension_loaded('mysqli')) {
    echo 'PDO MySQL extension is loaded!';
} else {
    echo 'PDO MySQL extension is not loaded.';
}


?>