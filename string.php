<?php
$data1 ="Again good morning and have an awesome day";
$wordsCount=str_word_count($data1);
echo "the number of words are".$wordsCount;
echo"<br>";
$data2="Again good morning $ have an awesome day";
$length=strlen($data2);
echo"the length of string is".$length;
echo"<br>";
$data3="Hello World";
$reverse=strrev($data3);
echo"the reverse of string is".$reverse;
echo"<br>";
$dollar1="Hello";
$dollar2="hello";
if(strpos($dollar1,$dollar2)!==false)
{
    echo"word found";
}
else{
    echo"word not found";
}
?>