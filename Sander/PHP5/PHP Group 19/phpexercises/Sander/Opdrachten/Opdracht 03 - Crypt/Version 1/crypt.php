<?php

// Define Mcrypt variables
$enc = MCRYPT_RIJNDAEL_128;
$mode = MCRYPT_MODE_CBC;
$key = 'SanderDitIsNodigVoor16bi';
$iv = mcrypt_create_iv(mcrypt_get_iv_size($enc, $mode), MCRYPT_DEV_URANDOM);

// Check if 'submit' is set
if (isset($_POST['submit'])) {

	// Check if 'text' is set
	if (!empty($_POST['text'])) {
		
		// Check if 'crypt' is set
		if (isset($_POST['crypt'])) {
		
			// Retrieve 'text'
			$input = $_POST['text'];

			// Check for encrypt/decrypt
			switch ($_POST['crypt']) {
				case 'encrypt':
					$result = encrypt();
					break;
				case 'decrypt':
					$result = decrypt();
					break;
			}

			echo $result;
		}

		// If 'crypt' is not set
		else {
			echo 'Please select encrypt or decrypt.';
		}
	}

	// If 'text' is not set
	else {
		echo 'Please fill in some text.';
	}
}

function encrypt() {
	global $enc, $key, $input, $mode, $iv;
	$encrypted = mcrypt_encrypt($enc, $key, $input, $mode, $iv);
	$output = base64_encode($encrypted);
	return $output;
}

function decrypt() {
	global $enc, $key, $input, $mode, $iv;
	$decrypted = base64_decode($input);
	$output = mcrypt_decrypt($enc, $key, $decrypted, $mode, $iv);
	return $output;
}

?>