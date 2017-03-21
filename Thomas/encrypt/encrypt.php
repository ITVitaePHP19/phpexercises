<?php
include "index.php";
$filename = $_POST["filename"];
echo $filename;
var_dump($_POST);
function encryptData($value){
   $key = "ajdfkfnakjidnfak";
   $text = $value;
   $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
   $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
   $crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $text, MCRYPT_MODE_ECB, $iv);
   return $crypttext;
}
function decryptData($value){
	$key = "ajdfkfnakjidnfak";
	$crypttext = $value;
	$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
	$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
	$decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $crypttext, MCRYPT_MODE_ECB, $iv);
	return trim($decrypttext);
}

$filename = "Files/" . $filename .".txt";
if($handle = fopen($filename, "r"))
{
$content = fread($handle, filesize($filename));

	var_dump($_POST);
	if (isset($_POST['en']))
	{
		$handle = fopen($filename, "w");
		$EncryptedData=encryptData($content);
		fwrite($handle, $EncryptedData);
	}
	else if (isset($_POST['de']))
	{
		if($_POST['pass'] == "secret")
		{
		$handle = fopen($filename, "w");
		$DecryptedData=decryptData($content);
		fwrite($handle, $DecryptedData);
		}
		else 
		{
		echo "wrong password";	
		}
	}

}
else 
{
	$_SESSION['error'] = "ERROR: File was not found";
	//header("Location: index.php");
}

