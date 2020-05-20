<?php
//kode OTP random generator menggunakan standart umumnya OTP Code length = 4 dan integer only

function randomString($length = 4) {
	$str = "";
	$characters = array_merge(range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}
?>