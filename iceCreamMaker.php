<?php 

function iceCreamMaker() {

	$text = null;
	$x = rand(1, 100);

	if ($x % 5 == 0) {
    	  $text .= "Ice";
	} 
	
	if ($x % 3 == 0) {
    	  $text .= "Cream";
	}

	if ($text) {
	  return $text;
	} else {
	  return $x;
	}
}

print_r(iceCreamMaker() . PHP_EOL);
print_r(iceCreamMaker() . PHP_EOL);
print_r(iceCreamMaker() . PHP_EOL);
print_r(iceCreamMaker( ) . PHP_EOL);
print_r(iceCreamMaker() . PHP_EOL);
print_r(iceCreamMaker() . PHP_EOL);


?>
