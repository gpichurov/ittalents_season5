<?php

// 		������ 7:
// �������� 3 ���������� �� ��������� � ���, ���� ����, ���� ��� �����
// � ����� ��� �������� �� ��� ��.
// ��������� ��������, ����� ����� ������� �� ������ �� ���� ����� ��
// ������� �����:
// - ��� ��� ����� ���� �� �������
// - ��� ���� ���� �� �� ���� ���������
// - ��� ����� � �� ���� ����� � �� ��� ���
// - ��� ��� ����� �� ������ �� ���� � ��������
// - ��� ���� ��-����� �� 10 �� �� ����� �� ����
// �������� ��������� ���� ��������� � ��� ��������.

require_once 'readline.php';

$time = readline('���:', PHP_EOL);

$money = readline('���� ����:', PHP_EOL);

$health = readline('����� (1 �� ��, 0 �� ��):', PHP_EOL);

if ($health == 0){
	echo '���� �� �������';
	if ($money > 0){
		echo ' � �� �� ���� ���������.';
	}
	else {
		echo ', �� �� ���� ����� � �� ��� ���.';
	}
}
else if ($money < 10){
	echo '�� ����� �� ����.';
}
else{
	echo '�� ������ �� ���� � ��������.';
}