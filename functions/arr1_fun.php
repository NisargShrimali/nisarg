<?php
    $f_name=array("Hello","Aktiv","Icreative");
    $l_name=array("world","Software","Technologies");

    $result=(array_merge($f_name,$l_name));
    print_r($result);
    ?>
    <br>

    <?php
    function functionsqr($num)
    {
        return($num*$num);

    }

    $a=array(1,2,3,4,5,6,7,8,9,10);
    print_r(array_map("functionsqr",$a));
    ?>


