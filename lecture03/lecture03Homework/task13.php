<?php

// ������ 13: �� �� ������� ��������, ����� ������� ������
// ���������� ���������� �����, ����� ���� ���� �� ������� �����
// �� ������ �����.
// ������ : sum, ������ 2>=sum<=27.
// ������: 26
// �����: 899, 989, 998.

require_once 'readline.php';

do {
	$n = readline('�������� ����� N[2...27]: ', PHP_EOL);
} while (($n < 2) || ($n > 27));

for ($i = 100; $i < 1000; $i++) {

	$n0 = $i % 10;
	$n1 = ($i / 10) % 10;
	$n2 = ($i / 100) % 10;

	if ($n0 + $n1 + $n2 == $n){
		echo "$i ";
	}
}