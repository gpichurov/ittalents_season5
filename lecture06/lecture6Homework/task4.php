<?php

// ������ 4:
// ����� ������������� �������� ��������� �� �������� � ��������
// ����� - ���������� �����.
// �� �� ������� ��������, ���� ����� �� �������� ����������� ��
// ���������� � �������� ����� ���� ���������� �� �� +90 �������.
// ������:
// 1,2,3,4
// 5,6,7,8
// 9,10,11,12
// 13,14,15,16
// �����
// 13,9,5,1
// 14,10,6,2
// 15,11,7,3
// 16,12,8,4

$array = array(
		array(1, 2, 3, 4),
		array(5, 6, 7, 8),
		array(9, 10, 11, 12),
		array(13, 14, 15, 16),
);
$arrayNew = [];

for ($i = 0; $i < count($array); $i++){
	for ($j = count($array) - 1, $k = 0; $k < count($array); $j--, $k++){
		$arrayNew [$i] [$k] = $array[$j] [$i];
	}
}

print_r($arrayNew);

