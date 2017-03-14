<!doctype html>
<html>
<head>
<title>versleutelen</title>
</head>

<body>
<form method="post">
	<fieldset>
	<legend> tekst versleutelen </legend>
		<input type="file" name="file">
		<br>
		<br>
		<input type="radio" name="crypt" value="encrypt">Encrypt <br>
		<input type="radio" name="crypt" value="decrypt">Decrypt <br><br>
		<button type="submit" name="submit">insturen</button>
	</fieldset>
</form>

<?php
if (isset($_POST['crypt'])){
	$crypt=$_POST['crypt'];
}
else{
	$crypt="";
}

if (isset($_POST['file'])){
	$input = file_get_contents($_POST['file']);
}
else{
	$input="";
}


if($crypt=="encrypt"){
	encrypt($input);
}
elseif($crypt=="decrypt"){
	decrypt($input);
}
else{
	echo "Kies encrypt of decrypt.";
}


//Encrypt the data
function encrypt($input){
	$cipher= MCRYPT_RIJNDAEL_128;
	$mode= MCRYPT_MODE_CBC;
	$key = md5('secrectKey',true);
	$ivs = mcrypt_get_iv_size($cipher, $mode);
	$iv= mcrypt_create_iv($ivs);
	$data= mcrypt_encrypt($cipher, $key, $input, $mode, $iv);
	$data= base64_encode($data);
	file_put_contents('test.txt',$data);
	echo $data;
}

//Decrypt the data
function decrypt($input){
	$cipher= MCRYPT_RIJNDAEL_128;
	$mode= MCRYPT_MODE_CBC;
	$key = md5('secrectKey',true);
	$ivs = mcrypt_get_iv_size($cipher, $mode);
	$iv= mcrypt_create_iv($ivs);
	//$data= mcrypt_encrypt($cipher, $key, $input, $mode, $iv);
	$data= base64_decode($input);
	$input = mcrypt_decrypt($cipher, $key, $data, $mode, $iv);
	file_put_contents('test.txt',$input);
	echo $input;
}

?>
</body>
</html>