<?php

////////////////////////////// (1) //////////////////////////////

// ����� �� ��� ������
$str = "this is solve task-4 of issa soffer";

$arr =  explode(" ", $str);

// ���� ��� ����� �� ���� ���� ��� ��������
echo "<pre>";
print_r($arr);
echo "</pre>";


////////////////////////////// (2) //////////////////////////////

// ����� ���� ��������
foreach ($arr as $value)
{
    echo $value . "<br>";
}


////////////////////////////// (3) //////////////////////////////

// ����� �� ������
$randndex = array_rand($arr, 1);
$randString = $arr[$randndex];
echo $randString . "<br>";


////////////////////////////// (4) //////////////////////////////

// ��� ��� ��� ���� ���� ������ �� ��������
$randString = ucfirst($randString);
echo $randString . "<br>";


////////////////////////////// (5) //////////////////////////////

// ���� ��� ����  ��� ��� �� 6 ���� ���
if (strlen($str) > 6)
{
    echo "yes" . "<br>";
}
// ���� ���� ��
else
{
    "no" . "<br>";
}

////////////////////////////// (6) //////////////////////////////

// �� ��� ����� ��� ������ ���� ����

$str2 = "My name's <b>taymoor</b> and my website is <a>taymoor.com</a> and i'm learning <i>php</i>";

echo $str2 . "<br>"; // ��� �� ����
// ��� ���� �����
$strWithoutTags = strip_tags($str2);
echo $strWithoutTags . "<br>"; // ��� ��� ��� �����
// ��� ������ ����
$strWithslashes = addslashes($str2);
echo $strWithslashes . "<br>"; // ��� ��� ����� �����

?>