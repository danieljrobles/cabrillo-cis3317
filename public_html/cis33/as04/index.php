<?php ini_set('display_errors', 1); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CIS 33 Assignment 04</title>
</head>
<body>
<?php 
	/** Class SixSidedDie represents a simple, rollable 6-sided die */
	class SixSidedDie {
		// Variables:

		/** The current roll value for this die (-1 until rolled) */
		protected $currentValue = -1;

		// Functions:

		/** "Rolls" the die (generates a new, random, current roll value) */
		function roll() {
			$this->currentValue=rand(1,6);
		}

		/** Returns the current value of this die. */
		function getValue() {
			return $this->currentValue;
		}

		/** Returns the image URL that represents the current roll */
		function getImageURL() {
		// To do: Return the URL for the image representing the current roll
			return 'https://jeff.cis.cabrillo.edu/33data/dice/die_0'.($this->getValue()).'.png';
		}
	}

	class DicePair {

		protected $die1;
		protected $die2;

		function DicePair() {
			$this->die1 = new SixSidedDie();
			$this->die2 = new SixSidedDie();
		}

		//"Roll" both dice
		function roll() {
			//$this->die1->roll();
			//$this->die2->roll();
			$this->die1->roll();
			$this->die2->roll();
		}
		
		//Return the value of the first die
		function getDie1Value(){
			return $this->die1->getValue();
		}
		
		//Return the value of the second die
		function getDie2Value(){
			return $this->die2->getValue();
		}

		//Return a Boolean value indicating whether this pair represents snake eyes
		function isSnakeEyes() {
			if($this->die1->getValue() == 1 && $this->die2->getValue() ==1){
				return TRUE;
			} else {
				return FALSE;
			}
		}

	}
	$diePairObject = new DicePair();
	$roundNumber = 0;
	
	while(!($diePairObject->isSnakeEyes())){
		$roundNumber++;
		$diePairObject->roll();
		echo '<section id="round'.$roundNumber.'">';
			echo '<h2>Roll '.$roundNumber.'</h2>';
			echo "<img src='https://jeff.cis.cabrillo.edu/datasets/dice/die_0".($diePairObject->getDie1Value()).".png' alt='die_0".($diePairObject->getDie1Value())."' />";
			echo "<img src='https://jeff.cis.cabrillo.edu/datasets/dice/die_0".($diePairObject->getDie2Value()).".png' alt='die_0".($diePairObject->getDie2Value())."' />";
		echo '</section>';
	}
	echo '<h1 id="total">'.$roundNumber.' rolls total</h1>';
?>
</body>
</html>
