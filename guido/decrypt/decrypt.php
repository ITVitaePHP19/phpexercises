<?php
// file "encrypt.tx" needs to be in same folder as decrypt.php
if (isset($_POST['file'])) {

$fh = $_POST['file'];
$data = fileRead($fh);


//if string length is higher than 0
// run decrypt function
if (strlen($data) > 0) {
  $decode = decrypt($data);
  file_put_contents($fh, $decode);
  echo "<code>$decode</code>";
}
 }

 //function to read the file previously set in variable $fh
 function fileRead ($fh) {
     $f = file_get_contents($fh);
     return $f;

 }

//decrypt function divided in seperate variables, same algorithm as encrypt function
//see encrypt.php for algorithm,key,iv
function decrypt ($string) {
  $algorithm =  'rijndael-128';
  $key = md5( "mypassword", true );
  $iv_length = mcrypt_get_iv_size( $algorithm, MCRYPT_MODE_CBC );
  $string = base64_decode( $string );
  $iv = substr( $string, 0, $iv_length );
  $encrypted = substr( $string, $iv_length );
  $result = mcrypt_decrypt( $algorithm, $key, $encrypted, MCRYPT_MODE_CBC, $iv );
  return $result;

}

?>
