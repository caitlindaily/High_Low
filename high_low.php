<?php

//Computer needs to make random number
$random = rand(1, 100);


//Have computer ask for number
fwrite(STDOUT, 'Guess a number. ');

//Have user input number
$guess = fgets(STDIN);

//Tell user high, lower, or they were right

while ($guess != $random){
	if($guess < $random) {
		echo "HIGHER-->\n";
		$guess = fgets(STDIN);	

	} elseif ($guess > $random) {
		echo "LOWER <--\n";
		$guess = fgets(STDIN);

	}
}		
echo "You guessed right!\n"; 

