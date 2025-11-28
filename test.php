<?php
$a_bool = true;   // bool
$a_str  = "foo";  // string
$a_str2 = 'foo';  // string
$an_int = 12;     // int

echo get_debug_type($a_bool), "\n";
echo get_debug_type($a_str), "\n";

// 数値であれば、4を足す
if (is_int($an_int)) {
    $an_int += 4;
}
var_dump($an_int);

// $a_bool が文字列であれば, それをprintする
if (is_string($a_bool)) {
    echo "String: $a_bool";
}
?>