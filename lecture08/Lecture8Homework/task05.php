<?php

// Задача 5:
// Да се състави програма, чрез която се въвеждат 2 редици от знаци
// (думи).
// Ако в двете редици участва един и същи знак, да се изведе на екрана
// първата редица хоризонтално, а втората вертикално, така че да се
// пресичат в общия си знак.
// Ако редиците нямат общ знак да се изведе само уведомително
// съобщение.
// Пример :
// м
// а
// шапка
// и
// н
// а

require_once 'readline.php';

$str1 = readline('Въведете дума: ');
$str2 = readline('Въведете дума: ');
$same = false;
$first = false;

for ($i = 0; $i < strlen($str2); $i++) {
	for ($j = 0; $j < strlen($str1); $j++) {
		if ($str2{$i} === $str1{$j}){
			$same = true;
			break 2;
		}
	}
}
if (!$same) {
	echo 'Нямат общ знак.';
} else {
	for ($k = 0; $k < strlen($str1); $k++) {
		if ($k == $j && !$first){
			$first = true;
			echo $str2, PHP_EOL;
		} else {
			$cnt = $i;
			while ($cnt > 0){
				echo ' ';
				$cnt--;
			}
			echo $str1{$k}, PHP_EOL;
		}	
	}
}