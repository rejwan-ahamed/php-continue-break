<?php

// continue case in php

for ($a = 1; $a < 10; $a++) {

    if ($a == 3) {
        echo "NO : 3" . "<br>";
        continue;
    }


    echo "Number :" . $a . "<br>";
}

echo "<br>";

// break case in php

for ($a = 1; $a < 10; $a++) {

    if ($a == 3) {
        echo "NO : 3" . "<br>";
        break;
    }


    echo "Number :" . $a . "<br>";
}
