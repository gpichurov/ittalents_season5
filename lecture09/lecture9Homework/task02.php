<?php

// ������ 2:
// �� �� ������� ��������, ����� ��������� ������������ �� ���
// ���������� ����� =>2, ���� �� �������� ���� ��������.
// ������ �����: 2 ���������� �����.
// ������: 4, 5
// �����: 20

require_once 'readline.php';

do {
	$n = readline('�������� ���������o ����o n =>2: ');
} while ($n < 2);

do {
	$m = readline('�������� ���������o ����o m =>2: ');
} while ($m < 2);

function multi($n, $m) {

	if ($m == 1) {
		return $n;
	}
	
	return $n + multi($n, $m - 1);
}

echo multi($n, $m);