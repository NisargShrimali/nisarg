<?php
$array = array(1, 2, 3, 4, 5);

echo count($array) . "<br>";

echo array_sum($array) . "<br>";

echo array_product($array) . "<br>";

echo max($array) . "<br>";

echo min($array) . "<br>";

echo in_array(3, $array) ? 'Found' : 'Not Found' . "<br>";

echo array_search(3, $array) . "<br>";

array_push($array, 6);

print_r($array) . "<br>";

array_pop($array);

print_r($array) . "<br>";

array_shift($array);

print_r($array) . "<br>";

array_unshift($array, 0);

print_r($array) . "<br>";

echo implode("-", $array) . "<br>";

print_r(explode("-", "1-2-3-4-5")) . "<br>";

print_r(array_reverse($array)) . "<br>";

print_r(array_merge($array, array(6, 7, 8))) . "<br>";

print_r(array_merge_recursive(array("a" => 1, "b" => 2), array("b" => 3, "c" => 4))) . "<br>";

print_r(array_slice($array, 1, 3)) . "<br>";

print_r(array_splice($array, 1, 2)) . "<br>";

print_r(array_map(function($value) { return $value * 2; }, $array)) . "<br>";

print_r(array_filter($array, function($value) { return $value % 2 == 0; })) . "<br>";

array_walk($array, function(&$value) { $value *= 2; });
print_r($array) . "<br>";

print_r(array_keys($array)) . "<br>";

print_r(array_values($array)) . "<br>";

print_r(array_flip($array)) . "<br>";

echo array_rand($array) . "<br>";

print_r(array_unique(array(1, 2, 2, 3, 4, 4))) . "<br>";

print_r(array_chunk($array, 2)) . "<br>";

print_r(array_pad($array, 7, 0)) . "<br>";

print_r(array_diff(array(1, 2, 3), array(2, 3, 4))) . "<br>";

print_r(array_intersect(array(1, 2, 3), array(2, 3, 4))) . "<br>";

print_r(array_diff_key(array("a" => 1, "b" => 2), array("a" => 1))) . "<br>";

print_r(array_intersect_key(array("a" => 1, "b" => 2), array("b" => 2))) . "<br>";

print_r(array_diff_assoc(array("a" => 1, "b" => 2), array("a" => 1, "b" => 3))) . "<br>";

print_r(array_intersect_assoc(array("a" => 1, "b" => 2), array("a" => 1, "b" => 2))) . "<br>";

print_r(array_fill(0, 5, "apple")) . "<br>";

print_r(array_flip(array("a" => 1, "b" => 2))) . "<br>";

print_r(array_keys(array("a" => 1, "b" => 2))) . "<br>";

array_multisort($array, SORT_DESC, $array2);
print_r($array);
print_r($array2) . "<br>";

echo array_reduce($array, function($carry, $item) { return $carry + $item; }) . "<br>";

print_r(array_replace(array("a" => "red", "b" => "green"), array("b" => "blue", "c" => "yellow"))) . "<br>";

print_r(array_unique(array(1, 2, 3, 2, 1))) . "<br>";


array_unshift($array, 0);

print_r($array) . "<br>";

?>
