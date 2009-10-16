<?php
$textfile ="include/upcoming/upcoming.txt"; 
	$f = implode('', file("$textfile"));
	#print "$f";
	$tmp = str_replace("\n", "<br \>\n", $f);
	$content = $tmp;
	print "$content";
	?>