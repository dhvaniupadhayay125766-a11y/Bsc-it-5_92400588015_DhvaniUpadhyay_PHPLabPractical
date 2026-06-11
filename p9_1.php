<?php
    $num = $_get['uname'];
    echo "<h3>original Array:</h3>";
    foreach($nm as $val)
    {
        echo $val . "<br>";
    }
    echo "<h3>Reversed Array:</h3>"
    $rev = array_reversed($nm);
    foreach($rev as $val)
    {
        echo $val . "<br>"
    }