<?php
//
if (isset($_POST['encrypt'])) {
encrypt();

$file = 'encrypt.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Add variable content to file
$current .= $_POST['in'];
// Add string to variable $current using concatenate
file_put_contents($file, $current);
// echo file_get_contents("encrypt.txt");
}
//read the file in variable $file, get the contents of the file and return it
function fileRead ($file) {
	$fh = file_get_contents($file);
	return $fh;
}
//if the string length of variable $current is higher than 0
//run encrypt function as stated in variable $coded with parameter $current
//then put file contents into $file, running encrypt function (see below)
//lastly echo back the encrypted string
 if (strlen($current) > 0) {
	 $coded = encrypt($current);
            file_put_contents($file, $coded);
            echo "<code>$coded</code>";


 }
//function to encrypt a string
function encrypt($string) {
  $algorithm = 'rijndael-128'; // You can use any of the available
  $key = md5( "mypassword", true); // bynary raw 16 byte dimension.
  $iv_length = mcrypt_get_iv_size( $algorithm, MCRYPT_MODE_CBC );
  $iv = mcrypt_create_iv( $iv_length, MCRYPT_RAND );
  $encrypted = mcrypt_encrypt( $algorithm, $key, $string, MCRYPT_MODE_CBC, $iv );
  $result = base64_encode( $iv . $encrypted );
  return $result;
}

?>
