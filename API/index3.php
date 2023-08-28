<?php
// $arr = [ $_GET ['h1'],$_GET ['h2'],$_GET ['h3']];
$arr = $_GET ["h"];

echo max($arr);
echo "<br>";
echo array_sum($arr) / count($arr);
?>