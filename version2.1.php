<!DOCTYPE html>
<html>
<head>
	<title>Nice one!</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<?php
	$count = 1;
	do{
		echo "$count times 12 is ". $count * 12 ."<br>";
		++$count;
	}while ($count<=12);
	echo "<hr>";

	$count = 0;
	$day = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturn-Day','Sundae!');
	do{
		echo $count+1 . ") " . $day[$count%7] ."<br>";
		++$count;
	}while ($count<=27);
	echo "<hr>";

	$count = 1;
	
	do{
		echo "$count squared is " . $count * $count . "<br>";
		$count++;
	}while ($count<=12);
	echo "<hr>WAZZTUP<hr>";

	for ($count=1; $count <=12 ; $count++) { 
		echo "$count squared is " . $count * $count . "<br>";
	}

	echo "<hr>";

	$count = 1;
	do{
		// echo "<div class='col-lg-4'>";
		if ($count <= 15) {
		echo " $count multiplied by 2 is" . $count * 2 . "<br>"."<br>";
		}
		if ($count >= 16 && $count <= 35) {
			echo "30 - $count divided by 2 is " . (30 - $count) / 2 . "<br>";
		}
		if ($count >= 36 && $count <= 50) {
			echo "$count added by 6 is " . ($count + 6) . "<br><br>";
		}
		$count++;
	}while ($count<=50);
	echo "<hr>asdasdasd";

	
	for ($count=1; $count <=50 ; $count++) { 
		if ($count <= 15) {
		echo " $count multiplied by 2 is" . $count * 2 . "<br>"."<br>";
		}
		if ($count >= 16 && $count <= 35) {
			echo "30 - $count divided by 2 is " . (30 - $count) / 2 . "<br>";
		}
		if ($count >= 36 && $count <= 50) {
			echo "$count added by 6 is " . ($count + 6) . "<br><br>";
		}
	}

	$count = 1;
	$ans = 1;
	
	while($count<7){

		 $ans *= $count;
		echo "factorial of $count is $ans"."<br>";
		
		$count++;
	}
	echo "<hr>";
	$ans = 1;
	for ($count=1; $count < 7; $count++){
		$ans *= $count;
		echo "factorial of $count is $ans"."<br>";
	}

	echo "<hr>";


	$ans = 0;
	$odd = 0;
	for ($count=1; $count <=50 ; $count++) { 
		if ($count%2 == 0) {
		$ans += $count;
		}		
		else {
		$odd += $count;
		}
	}
	echo "even sum is $ans <br>";
	echo "odd sum is $odd <br>";
	echo "<hr>";

	$string = "The quick brown fox.";
	for ($count=0; $count <=19 ; $count++) { 
		 $letter = $string[$count];
		 echo " . " . $letter . "<br>";
	}
	echo "<hr>";
	echo "&nbsp&nbsp&nbsp";
	$string = "The quick brown fox.";
	for ($count=0; $count <=19 ; $count++) { 
		$letter = $string[$count];
		echo strtolower($letter);
		
		$count += 1;
		$letter = $string[$count];
		echo strtoupper($letter);
	}
	echo "<hr>";

	$string = "The quick brown fox.";
	
	$matches = preg_match_all('/[aeiou]/i', $string);
	echo "There are <strong>".preg_match_all('/[aeiou]/i',$string,$matches)." vowels</strong> in the string <strong>".$string."</strong>";

	echo "<hr>";

	for ($i=1; $i < 6; $i++) { 

		for ($j=1; $j < 6; $j++) { 

				echo $i * $j . " &nbsp &nbsp ";
			}	
		echo "<br>";
	}
	echo "<hr>";

	
	$x = 0;    
	$y = 1; 
	echo $x . " " . $y;
	for($i=0;$i<=13;$i++)
	{    
	$z = $x + $y;    
    echo " " . $z;         
    $x=$y;       
    $y=$z;
    }   

	echo "<hr>";
	?>


</body>
</html>