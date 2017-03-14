<?php

/*
$text = "Testicle 1-2, testicle 1-2.";
$enc = MCRYPT_RIJNDAEL_128;
$mode = MCRYPT_MODE_CBC;
$iv = mcrypt_create_iv(mcrypt_get_iv_size($enc, $mode), MCRYPT_DEV_URANDOM);
$keys = array();
// smaller than 128 bit key gets padded to 128 bit
$keys[] = pack('H*', "00112233445566778899aabbccddee");
$keys[] = pack('H*', "00112233445566778899aabbccddee00");
// larger than 128 bit key gets padded to 192 bit
$keys[] = pack('H*', "00112233445566778899aabbccddeeff00");
$keys[] = pack('H*', "00112233445566778899aabbccddeeff0000000000000000");
// larger than 192 bit key gets padded to 256 bit
$keys[] = pack('H*', "00112233445566778899aabbccddeeff001122334455667700");
$keys[] = pack('H*', "00112233445566778899aabbccddeeff00112233445566770000000000000000");
// larger than 256 bit key will be truncated (with a warning)
$keys[] = pack('H*', "00112233445566778899aabbccddeeff00112233445566778899aabbccddeeff00");
foreach ($keys as $key)
{ echo bin2hex(mcrypt_encrypt($enc, $key, $text, $mode, $iv))."\n";
}
foreach ($keys as $key)
{ echo mcrypt_encrypt($enc, $key, $text, $mode, $iv)."\n";
}

echo "<br><br>";
*/


$enc = MCRYPT_RIJNDAEL_128;
$mode = MCRYPT_MODE_CBC;
$key = 'SanderDitIsNodigVoor16bi';
$text = 'Testicle 1-2, testicle 1-2.';
$iv = mcrypt_create_iv(mcrypt_get_iv_size($enc, $mode), MCRYPT_DEV_URANDOM);


echo $text;

echo "<br>";

$output = mcrypt_encrypt($enc, $key, $text, $mode, $iv);

echo $output;

echo "<br>";

echo mcrypt_decrypt($enc, $key, $output, $mode, $iv);

?>