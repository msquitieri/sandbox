<?php

require 'RandomWordGenerator.php';
require 'GoogleSearchAPI.php';

$gen = new RandomWordGenerator();
$googapi = new GoogleSearchAPI();

$word = $gen->getWord();

echo "\n\n\n\n\n$word\n\n\n\n";

$result = $googapi->search($word);

$str = "";
for ($i=0; $i<sizeof($result); $i++) {
	$str .= $result[$i]["snippet"];
}

echo $str;

?>
