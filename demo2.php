<?php 

	$t = 0;
	$p = 35;
	$a = 12;
	$b = 35;
	$n = 1000;

	for($i=0;$i<=$n;$i++){
		if($p<=($b*$i))
		{
			$t = $t+($a*$i);
			echo $t;
		}
		break;
	}

?>