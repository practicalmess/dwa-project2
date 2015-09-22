<?php
require "word-scraper.php";

$specials = Array (
	'!',
	'@',
	'#',
	'$',
	'%',
	'^',
	'&',
	'*',
	'?',
	'<',
	'>',
	'/',
	'+');

//Set default values
if (empty($_GET["length"])){
	$_GET["length"]=4;
}
if (empty($_GET["number"])){
	$_GET["number"]="off";
}
if (empty($_GET["special"])){
	$_GET["special"]="off";
}
if (empty($_GET["hyphens"])){
	$_GET["hyphens"]="on";
}


#Convert number of words requested into number of times to interate through for loop
$length = (int)$_GET["length"];
$hyphens = $_GET["hyphens"];

#Create password string
$password = "";
for($i=1; $i<=$length; $i++){
	$password .= trim($wordList[array_rand($wordList)]);
	if($hyphens=="on" AND $i<$length){
		$password .= "-";
	}
}


?>