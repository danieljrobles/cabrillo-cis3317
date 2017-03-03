<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CIS 33 Assignment 2</title>
  <style>
    body { text-align: center; }
    #number { font-size: 300%; }
    #asl figure { padding: 10px; border: 1px dashed; border-radius: 10px }
    #asl figure:hover { background-color: #ffffdd; }
  </style>
</head>
<body>
<?php	  
	//Generates a random integer value between 0 and 999 (inclusive), using either the rand or mt_rand function.
	$randNumber = rand(0,999);
	//Displays that value in a div element with an id attribute of number

	echo "<div id='number'>$randNumber</div>";
	echo "<div id='asl'>";
	//Displays up to three figure elements:
	$counter = 0;
	for($i=strlen($randNumber); $i>0 ; $i--){
		
		if($i==3){
			//if the string length is 3, then the number is > 99
			$id='hundreds';
		} elseif ($i==2){
			//if the string length is 2, then the number is >9 and < 100
			$id='tens';
		} elseif ($i==1) {
			//if the string length is 1, then the number is >0 and <10
			$id='ones';
		}
		$digitValue = substr($randNumber,$counter,1);
		$caption="$digitValue $id";
		//A img element referring to the appropriate small (sm) version of the ASL images
		echo "<figure id='$id' title='$caption' >";
		echo "<img src='http://jeff.cis.cabrillo.edu/datasets/asl-0-10/us-0".$digitValue."_sm.png' alt='$caption'/>";
		echo "<figcaption>$caption</figcaption>";
		echo "</figure>";
		$counter++;
	}
	echo "</div>";
?>
</body>
</html>