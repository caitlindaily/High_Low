<?php
/*if ($argc < 2) {
	fwrite (STDERR, "Hey I require at least one argument!\n");
	exit (1);
}
echo "\$argc ";
// Dump arg count
var_dump($argc);

echo "\$argv ";
// Dump arg vars
var_dump($argv);
// Exit with 0 errors
exit(0);
*/
//In using the command line, what we call "commands" are called 
//"arguments"
$name = $argv[1];

if($argc < 2) {
	echo "Hey! I need your name to say hello!\n";
}   else {
	echo "Hello " . $name . "\n";
}	
//This allows the user to set arguments in the code 
//from the command line.

//If typed 'php argv_argc.php Caitlin' --> Hello Caitlin results
//for the above code
//	Like in an array, the elements on the command line start
//	at 0. "php" is 0, "argv_argc.php" is 1 and "Caitlin" is 2
//	etc. 
//So if $argc < 2 then that means a name has not been entered yet.
//-Or the second element in order to make the if statement true.
