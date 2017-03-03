<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CIS 33 Assignment 03</title>
</head>
<body>
<?php 
	$rolling=TRUE;
	$roundNumber = 0;
	
	while($rolling){
		$roundNumber++;
		$die1=rand(1,6);
		$die2=rand(1,6);
		
		echo '<section id="round'.$roundNumber.'">';
			echo '<h2>Roll '.$roundNumber.'</h2>';
			echo "<img src='https://jeff.cis.cabrillo.edu/datasets/dice/die_0".$die1.".png' alt='die_0".$die1."' />";
			echo "<img src='https://jeff.cis.cabrillo.edu/datasets/dice/die_0".$die2.".png' alt='die_0".$die2."' />";
		echo '</section>';
		
		if($die1 == 1 && $die2 ==1){
			$rolling=FALSE;
			echo '<h1 id="total">'.$roundNumber.' rolls total</h1>';
		}
	}
?>
</body>
</html>
