<html>
    <head>
        <title>String Function</title>
</head>

<body>

    <?php
    $str_slash=addcslashes("Hello Nisarg","N");
    echo($str_slash);
    ?>
    <br>

    <?php
    $st_lwr=strtolower("Hello aKtiv Software");
    echo($st_lwr);
    ?>
    <br>

    <?php
    $st_upp=strtoupper("hello nisarg v");
    echo($st_upp);
    ?>
    <br>

    <?php
    $st_len=strlen("Hello World");
    echo($st_len);
    ?>
    <br>

    <?php
    $st_chr=strchr("Hello Aktiv","Aktiv");
    echo($st_chr);
    ?>
    <br>

    <?php
    $st_rep=str_ireplace("World","Aktiv Software","Hello World");
    echo($st_rep);
    ?>
    <br>

    <?php
    $st_ccmp=strcasecmp("hello","HELLO");
    echo($st_ccmp);
    ?>
    <br>

    <?php
    $st_cspn=strcspn("Hello World!!!!","!");
    echo($st_cspn);
    ?>
    <br>

    <?php
    $st_pos=strpos("Hello This Is Php,Here is only Php","Php");
    echo($st_pos);
    ?>
    <br>

    <?php
    $st_pbrk=strpbrk("Hello Aktiv Software","AS");
    echo($st_pbrk);
    ?>
    <br>

    <?php
    $st_str=strstr("Hello Aktiv","Aktiv");
    echo($st_str);
    ?>
    <br>    

    <?php
    $st_rt=strtr("Hilla Warld","ia","eo");
    echo($st_rt);
    ?>
    <br>

    <?php
    $st_sub=substr("Software Developer",7);
    echo($st_sub);
    ?>
    <br>

    <?php
    $st_subcmp=substr_compare("Hello Software","Hello Software",0);
    echo($st_subcmp);
    ?>
    <br>

    <?php
    $st_wrdcnt=str_word_count("Hello How Are You,Good Evening Have A Nice Day!!!");
    echo($st_wrdcnt);
    ?>
    <br>
    
    <?php
    $st_subcnt=substr_count("Hello World .The World Is Nice","World");
    echo($st_subcnt);
    ?>
    <br>

    <?php
    $st_subrep=substr_replace("Nisarg","Download",0);
    echo($st_subrep);
    ?>
    <br>

    <?php
    $st_trim=("Hello World");
    echo $st_trim; "<br>";
    echo trim($st_trim,"Hed");
    ?>
    <br>

    <?php
    $st_ucfir=ucfirst("hello World Of Programming");
    echo($st_ucfir);
    ?>
    <br>

    <?php
    $st_ucwrd=ucwords("aktiv sof");
    echo($st_ucwrd);
    ?>
    <br>

    <?php
    $st_split=str_split("Hello World Of Aktiv Software");
    print_r($st_split);
    ?>
    <br>    

    <?php
    $st_shuffle=str_shuffle("Icreative Technologies");
    echo($st_shuffle);
    ?>
    <br>

    <?php
    $st_rep=str_repeat("Hello",5);
    echo($st_rep);
    ?>
    <br>

    <?php
    $st_sndex=soundex("Aktiv");
    echo($st_sndex);
    ?>
    <br>

    <?php
    $st_rev=strrev("Software");
    echo($st_rev);
    ?>
    <br>

    <?php
    $st_pt=parse_str("name=nisarg&age=22");
    echo $name.$age;
    ?>
    <br>
    
</body>
</html>


