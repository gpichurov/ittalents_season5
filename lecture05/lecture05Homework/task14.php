<?php

// ������ 14:
// ����� ������������� ������� ��������� �����, �������� ������
// �����.
// �� �� ������� ��������, ���� ����� �� ������� ���� �������� ���
// ��������� �� ��������� [-2.99..2.99] � ������ ������ �� ������� ��
// ������.
// ������: 7.1,8.5,0.2,3.7,0.99,1.4,-3.5,-110,212,341,1.2
// �����: 0.2; 0.99; 1.4; 1.2

require_once 'readline.php';

$array = [];
$array2 = [];

do {
	$element = readline('�������� ������� ' . count($array) . ' �� ������: ' . PHP_EOL);
	if ($element !== '') {
		$array[] = $element;
	}
} while ($element !== '');

for ($i = 0; $i < count($array); $i++) {
	if (($array[$i] > (- 2.99)) && ($array[$i] < 2.99)) {
		$array2[] = $array[$i];
	}
}

echo implode('; ', $array2);