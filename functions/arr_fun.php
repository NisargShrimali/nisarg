<html>
    <head>
        <title>Array Function</title>
</head>
<body>

    

    <?php
    $f_name=array("Hello","Aktiv","Icreative");
    $l_name=array("world","Software","Technologies");

    print_r(array_merge($f_name,$l_name));
    
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
    <br>

    <?php
    $cars=array("volvo","BMW","cd220d");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>
    <br>

    <?php
    $cars=array("volvo"=>"5","bmw"=>"4","mercedes"=>"3");
    print_r(array_change_key_case($cars,CASE_UPPER));
    ?>
    <br>

    <?php
    $cars=array("volvo","bmw","cd","minicooper");
    print_r(array_chunk($cars,2));
    ?>
    <br>

    <?php
    $cars=array("volvo","BMW","rangerover","toyota","honda");
    $price=array("50lac","60lac","90lac","45lac","10lac");

    $merge=array_combine($cars,$price);
    print_r($merge);
    ?>
    <br>

    <?php
    $cars=array("volvo","bmw","cd","minicooper");
    print_r(array_count_values($cars));
    ?>
    <br>

    <?php
    $arr_1=array("a"=>"red","b"=>"green","c"=>"yellow","d"=>"black");
    $arr_2=array("e"=>"red","f"=>"green","g"=>"blue");

    $result=array_diff($arr_1,$arr_2);
    print_r($result);
    ?>
    <br>

    <?php
    $arr_1=array("a"=>"red","b"=>"green","c"=>"yellow","d"=>"black");
    $arr_2=array("e"=>"red","f"=>"green","g"=>"blue");

    $result=array_diff_assoc($arr_1,$arr_2);
    print_r($result);
    ?>
    <br>

    <?php
    $arr_1=array("a"=>"red","b"=>"green","c"=>"yellow","d"=>"black");
    $arr_2=array("a"=>"red","b"=>"green","g"=>"blue");

    $result=array_diff_key($arr_1,$arr_2);
    print_r($result);
    ?>
    <br>

    <?php
    $cars=array("volvo","bmw","cd","minicooper");
    array_multisort($cars);
    print_r($cars);
    ?>
    <br>
    
    <?php
    $color=array("Green","red");
    print_r(array_pad($color,6,"blue"));
    ?>
    <br>

    <?php
    $color=array("Green","red","blue","black");
    array_pop($color);
    print_r($color);
    ?>
    <br>

    <?php
    $tech=array("php","java",".net","C#");
    array_push($tech,"shopify");
    print_r($tech);
    ?>
    <br>

    <?php
    $a_pro=array(10,10);
    print_r(array_product($a_pro));
    ?>
    <br>

    <?php
    $a=array("blue","red");
    $b=array("pink","orange");
    print_r(array_replace($a,$b));
    ?>
    <br>

    <?php
    $cars=array("a"=>"bmw","b"=>"volvo","c"=>"suzuki");
    print_r(array_reverse($cars));
    ?>
    <br>

    <?php
    $cars=array("a"=>"bmw","b"=>"volvo","c"=>"suzuki");
    echo array_search("bmw",$cars);
    ?>
    <br>

    <?php
    $cars=array("a"=>"bmw","b"=>"volvo","c"=>"suzuki");
    echo array_shift($cars);
    print_r($cars);
    ?> 
    <br>

    <?php
    $clr_slc=array("blue","green","red","pink","black","orange");
    print_r(array_slice($clr_slc,2)); 
    ?>
    <br>

    <?php
    $a_sum=array(5,10,34,38);
    echo array_sum($a_sum);
    ?>
    <br>

    <?php
    $arr_val=array("Name"=>"Nisarg","Age"=>"22","City"=>"Ahmedabad");
    print_r(array_values($arr_val));
    ?>
    <br>

    <?php
    $age_srt=array("Nisarg"=>"22","Mitul"=>"20","Kishan"=>"21");
    print_r(arsort($age_srt));
    ?>
    <br>

    <?php
    $tech_stack=array("Php","java",".Net","Angular","javscript","React");
    print_r(each($tech_stack));
    ?>
    <br>

    <?php
    $f_name="Nisarg";
    $l_name="Shrimali";
    $age="22";

    $result=compact("f_name","l_name","age");
    print_r($result);
    ?>
    <br>
    
    <?php
    $name_count=array("Parth","Het","Dev");
    echo count($name_count);
    ?>
    <br>

    <?php
    $tech_stack=array("Php","java",".Net","Angular","javscript","React");
    echo "The key of current position Is:-" . key($tech_stack);
    ?>
    <br>
    
</body>
</html>