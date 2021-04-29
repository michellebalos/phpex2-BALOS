<?php

include 'process.php';

$obj = new Range;
$max = $obj->mr($_POST['s1'], $_POST['s2']);
echo "<h1> The maximum range of the triangle is: $max</h1>";

$obj = new Ones;
$count = $obj->countOnes($_POST['int']);
echo "<h1> The total ones of the binary is: $count</h1>";

$obj = new CombinePaths;
$jpath = $obj->joinedPaths($_POST['p1'], $_POST['p2']);
echo "<h1> This is the combined path: $jpath</h1>";

$obj = new Sas;
$sasi = $obj->sassy($_POST['sastry']);
echo "<h1> Is your Sastry Number a perfect square? - $sasi </h1>";

?>