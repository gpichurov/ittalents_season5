<?php

// ������ 11:
// ��������� ��������, ����� �� ������ ���������o ����� ���������
// ���� ������� �� ���� �� ����� ���� �����. ��� ���������� ����� ��
// ���� ����� 0.

require_once 'readline.php';

$a = readline('���������� ���������� ����� ��� ����� 0:', PHP_EOL);

$a1 = $a % 10;
$a2 = floor($a / 10) % 10;
$a3 = floor($a / 100) % 10;

if ($a1 == 0 || $a2 == 0|| $a3 == 0 || $a > 999 || $a < 111){
	echo '���������� �������� �����.';
}
else {
	if ($a % $a1 == 0 && $a % $a2 == 0 && $a % $a3 == 0){
		echo '������� �� ���� �� ����� ���� �����.';
	}
	else {
		echo '������� �� �� ���� �� ����� ���� �����.';
		
	}
}