<?php
/**
 * strlen — Get string length
 * int strlen ( string $string )
 */
$str = 'abcdef';
echo strlen($str); // 6

$str = ' ab cd ';
echo strlen($str); // 7

$str = 'háhha';		
echo strlen($str);	//6

$str = '半角英数';
echo strlen($str);	//12

$foo = null;
$len = strlen(null);
$bar = '';

echo "Length: " . strlen($foo) . "<br>";	//0
echo "Length: $len <br>";					//0
echo "Length: " . strlen($bar) . "<br>";	//0

$arr = array(1,2,3);
echo strlen($arr) ."<br>";					//Warning: strlen() expects parameter 1 to be string

echo strlen('4string') ."<br>";				//7