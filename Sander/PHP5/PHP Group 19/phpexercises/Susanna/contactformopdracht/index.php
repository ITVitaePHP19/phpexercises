<DOCTYPE! HTML>
<html>
<head></head>

<nav>
<a href="index.php?pagina=info" class="button-style">Info</a>
<a href="index.php?pagina=home" class="button-style">Home</a>
<a href="index.php?pagina=contact" class="button-style">Contact</a>
</nav>

<body>
<style>

nav {
text-align: center; 
}

/* required for stretching out background gradient, so it doesnt tile */
html {
	min-height: 100% 
}

/* makes the background look pretty */
body {
	background-color: #CBFFFA;
	background:linear-gradient( #CBFFFA, #21B6A8);

}

/* pretty buttons */
.button-style {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    background-color: #21B6A8; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
	background-image:radial-gradient(#21B6A8, #CBFFFA);
}
</style>


<!--
This didnt work either.... 
Can not put query parameters in the url of a Form... "?pagina=info" is the referenced query parameter.

<form action="/assignments/index.php?pagina=info" method="get" >
    <button type="submit">Info</button>
</form>

<form method="get" action="/assignments/index.php?pagina=home">
    <button type="submit">Home</button>
</form>

<form method="get" action="/assignments/index.php?pagina=contact">
    <button type="submit">Contact</button>
</form>
-->


<!--
worked but linked to seperate files for each page...

<TABLE BORDER="0">
<TR>

<TD><FORM METHOD="LINK" ACTION="home.php">
<INPUT TYPE="submit" VALUE="Home">
</FORM></TD>

<TD><FORM METHOD="LINK" ACTION="info.php">
<INPUT TYPE="submit" VALUE="Info">
</FORM></TD>

<TD><FORM METHOD="LINK "ACTION="contact.php">
<INPUT TYPE="submit" VALUE="Contact">
</FORM></TD>

<TD><FORM METHOD="LINK" ACTION="euler1.php">
<INPUT TYPE="submit" VALUE="euler1">
</FORM></TD>

</TR>

</TABLE>
-->





<?php


//worked but wasnt supposed to use Javascript for this... i think..
//echo("<button onclick=\"location.href='index.php?pagina=home'\">Home</button>");
//echo("<button onclick=\"location.href='index.php?pagina=info'\">Info</button>");
//echo("<button onclick=\"location.href='index.php?pagina=contact'\">Contact</button>");


if (isset($_GET['pagina'])) {
	$page = $_GET['pagina'];
} else {
	$page = 'index';
}

if($page === 'info')
	{include 'info.php';}
if($page === 'home')
	{include 'home.php';}
if($page === 'contact')
	{include 'contact.php';}
if($page === 'index')
	{echo 'index pagina';}



?>

</body>


</html>
