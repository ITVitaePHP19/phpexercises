<?php

// Check if 'post' contains anything
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
	return 'Encrypt';
}

function decrypt() {
	return 'Decrypt';
}

$cypher = openssl_cipher_iv_length($input);

print_r($cypher);

?>