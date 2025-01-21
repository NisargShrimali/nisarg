<?php
echo strtoupper("hello world") . "<br>";

echo strtolower("HELLO WORLD") . "<br>";

echo ucfirst("hello world") . "<br>";

echo ucwords("hello world") . "<br>";

echo strlen("hello world") . "<br>";

echo strpos("hello world", "world") . "<br>";

echo substr("hello world", 6) . "<br>";

echo trim("  hello world  ") . "<br>";

echo rtrim("  hello world  ") . "<br>";

echo ltrim("  hello world  ") . "<br>";

echo str_replace("world", "PHP", "hello world") . "<br>";

echo str_ireplace("WORLD", "PHP", "hello WORLD") . "<br>";

echo implode("-", array("hello", "world")) . "<br>";

echo explode(" ", "hello world")[1] . "<br>";

echo strrev("hello world") . "<br>";

echo strchr("hello world", "world") . "<br>";

echo strrchr("hello world", "world") . "<br>";

echo substr_count("hello world", "o") . "<br>";

echo str_repeat("hello ", 3) . "<br>";

echo str_pad("hello", 10, "_") . "<br>";

echo str_word_count("hello world") . "<br>";

echo htmlentities("<b>hello world</b>") . "<br>";

echo htmlspecialchars("<b>hello world</b>") . "<br>";

echo addslashes("hello 'world'") . "<br>";

echo stripslashes("hello \'world\'") . "<br>";

echo printf("The number is: %d", 10) . "<br>";

echo sprintf("The number is: %d", 10) . "<br>";

echo vsprintf("The number is: %d", array(10)) . "<br>";

echo strtr("hello world", "elo", "123") . "<br>";

echo base64_encode("hello world") . "<br>";

echo base64_decode("aGVsbG8gd29ybGQ=") . "<br>";

echo chunk_split("hello world", 2, "-") . "<br>";

echo wordwrap("hello world this is a test", 5, "<br>") . "<br>";

echo md5("hello world") . "<br>";

echo sha1("hello world") . "<br>";
?>
