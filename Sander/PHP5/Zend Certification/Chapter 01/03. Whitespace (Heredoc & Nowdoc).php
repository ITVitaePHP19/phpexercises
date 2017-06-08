<?php

// Make variable $foo
$foo = 'bar';

// Heredoc executes code within, HERE can be any name
$here = <<<HERE
	I'm here, $foo!
HERE;

// Nowdoc doesn't execute code, 'NOW' can be any name
$now = <<<'NOW'
	I'm now, $foo!
NOW;

// Echo variables
echo $here . '<br>' . $now;

?>