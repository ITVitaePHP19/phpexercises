<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //If $_POST contains something more the a empty string, else giva a
    //errormessage.
    if(isset($_POST['file']) && $_POST['file'] != '') {
      $file = $_POST['file'];
      $data = fileRead($file);
      if(strlen($data) > 0) {
        switch($_GET['do']) {
          //Encrypt the file and overwrite it with the encrypted data.
          //Shows the encrypted data.
          case 'encrypt.php':
            $coded = encrypt($data);
            file_put_contents($file, $coded);
            echo "<code>$coded</code>";
            break;
          //Decrypt a encrypted file (That was encrypted with the
          //encrypt()-function of this program.)
          case 'decrypt.php':
            $encoded = decrypt($data);
            file_put_contents($file, $encoded);
            echo "<code>$encoded</code>";
            break;
        }
      } else {
        echo 'Error: The file appears to be a empty .txt file';
      }
    } else {
      echo 'Error: Please add a file.';
    }
  }

  //Creates a string with the content of the $file and returns it.
  function fileRead($file){
    $f = file_get_contents($file);
    return $f;
  }

  //Encrypt a string
  function encrypt( $string ) {
    $algorithm = 'rijndael-128'; // You can use any of the available
    $key = md5( "mypassword", true); // bynary raw 16 byte dimension.
    $iv_length = mcrypt_get_iv_size( $algorithm, MCRYPT_MODE_CBC );
    $iv = mcrypt_create_iv( $iv_length, MCRYPT_RAND );
    $encrypted = mcrypt_encrypt( $algorithm, $key, $string, MCRYPT_MODE_CBC, $iv );
    $result = base64_encode( $iv . $encrypted );
    return $result;
  }

  //Decrypt a string
  function decrypt( $string ) {
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
