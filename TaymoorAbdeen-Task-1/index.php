<?php
$number1 = 10;
$number2 = 15;
$number3 = 13;

$mul = $number1  * $number2 * $number3;

$mod = $mul % $number1;
if ($mod == 8)
echo "This is greater equal to 8".$mod;
else if ($mod >8)
echo "This is greater gratet than 8";
else
echo "This is another";

$mod = $mul % $number2;
if ($mod == 8)
echo "This is greater equal to 8".$mod;
else if ($mod >8)
echo "This is greater gratet than 8";
else
echo "This is another";

$mod = $mul % $number3;
if ($mod == 8)
echo "This is greater equal to 8".$mod;
else if ($mod >8)
echo "This is greater gratet than 8";
else
echo "This is another";



/*
���� ���� ����� ����� ����� �� ����� ����  
mul
�� ���� �� ��� ������� ���� ������ ���� ������� �� ����� ���� 
mod
�� ����� 
�� ����� ��� 8 �� ���� ������ ���� ����� �� 
mod
��� ��� : ���� ��
���� ��� ��� ���� �� 8 
��� ��� : ���� �� �� ��� ������
���� 
���� ��
*/

?>