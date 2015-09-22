<?php
$firstPage = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html');
$wordList = explode("<li>", $firstPage);
//Remove </li> and navigation links from word list (method from source in README file)
foreach($wordList as $key => $value){
	$wordList[$key]=substr($wordList[$key], 0, strpos($wordList[$key], "<"));
}
//Iterate through each page of word list
for($i=3; $i<=5; $i+=2){
	if($i<=8){
		$from='0'.$i;
		$to='0'.($i+1);
	}
	else{
		$from=$i;
		$to=$i+1;
	}
	$newPage = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-'.$from.'-'.$to.'-hundred.html');
	$newWords = explode("<li>", $newPage);
	foreach($newWords as $key => $value){
	$newWords[$key]=substr($newWords[$key], 0, strpos($newWords[$key], "<"));
}
	//Add new array of words to the array of existing words
	$wordList = array_merge($wordList, $newWords);
}


?>