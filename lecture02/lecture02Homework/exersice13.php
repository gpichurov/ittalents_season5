<?php

// 		������ 13:
// �� �� ������� ��������, ����� �� ������� ����� � �������/����� ��
// ���������� ����������� t � ������ ������.
// �������������� ��������� ��:
// ��� -20 ������ �������;
// ����� 0 � -20 - �������;
// ����� 15 � 0 - ������;
// ����� 25 � 15 - �����;
// ��� 25 � ������.
// ������ �����: ���� ����� �� ��������� [-100..100].
// ������: 12
// �����: ������

require_once 'readline.php';

$t = readline('����������� [-100..100]:', PHP_EOL);

if ($t < -100 || $t > 100) {
	echo '���������� �������� �����.';
}
else if ($t < -20) {
	echo '������ �������';
}
else if ($t >= -20 &&  $t <0) {
	echo '�������';
}
else if ($t >= 0 && $t < 15) {
	echo '������';
}
else if ($t >= 15 && $t < 25) {
	echo '�����';
}
else if ($t >= 25) {
	echo '������';
}