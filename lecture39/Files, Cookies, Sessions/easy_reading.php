<?php
/**
 * 
 * @param $file
 * @param $flags
 * @param $fileHandle
 * @param $ofset
 * @param $length
 * 
 * fopen('files/demo.txt', 'r'); fread($fp);fclose();
 */
//$string = file_get_contents('files/demo.txt',0, null,  3, 2);
$string = file_get_contents('files/demo.txt');
var_dump($string);