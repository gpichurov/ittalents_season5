<?php

// ������ 3:
// �� �� ������� ��������, ����� ��������� ����: �������������
// ������� ����� �� ���������� ����� � �������� ��� �������� ���.
// ���������� �� ������� ��������� � � ����� ������.
// ������:
// 1 3 5 7 9 11 10
// �����:
// 11 > 10
// ���������� �� ������ �� �� ���������.

$array = [1, 3, 5, 7, 9, 11, 10];
$result = '���������� �� ������ �� ���������.';

for ($i = 0; $i < count($array) - 1; $i++) {
	if ($array[$i] > $array[$i + 1]) {
		echo $array[$i] . ' > ' . $array[$i + 1] . PHP_EOL;
		$result = '���������� �� ������ �� �� ���������.';
		break;
	} 
}

echo $result;