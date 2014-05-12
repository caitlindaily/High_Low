<?php

//Computer needs to make random number
$random = mt_rand(1, 100);

//Have a counter of how many guesses
$number_of_guesses = 1;


//Have computer ask for number
fwrite(STDOUT, 'Guess a number. ');

//Have user input number
$guess = fgets(STDIN);

//Tell user high, lower, or they were right

while ($guess != $random && $number_of_guesses <= 7){
	if($guess < $random) {
		echo "HIGHER-->\n";
		$guess = fgets(STDIN);	

	} elseif ($guess > $random) {
		echo "LOWER <--\n";
		$guess = fgets(STDIN);

	}

	$number_of_guesses++;

if ($number_of_guesses ==7){
	echo "Too many guesses, you lose.\n";
exit(0);	
}	
}		
echo "You guessed right in $number_of_guesses guesses!\n"; 


