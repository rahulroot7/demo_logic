
<table>
    <?php

    $num = array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20',
    			'21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40',
    			'41','42','43','44','45','46','47','48','49','50');

    foreach ($num as $key => $x)
    {
    	if($x%10 ==1){
    		$max =  $x.',';
    		$ar = array($max);
    	}
    	if($x%10 ==2){
    		$max1 =  $x.',';
    		$ar1 = array($max1);
    	}
    	if($x%10 ==3){
    		$max2 =  $x.',';
    		$ar2 = array($max2);
    	}
    	if($x%10 ==4){
    		$max3 =  $x.',';
    		$ar3 = array($max3);
    	}
    	if($x%10 ==5){
    		$max4 =  $x.',';
    		$ar4 = array($max4);
    	}
    	if($x%10 ==6){
    		$max5 =  $x.',';
    		$ar5 = array($max5);
    	}
    	if($x%10 ==7){
    		$max6 =  $x.',';
    		$ar6 = array($max6);
    	}
    	if($x%10 ==8){
    		$max7 =  $x.',';
    		$ar7 = array($max7);
    	}
    	if($x%10 ==9){
    		$max8 =  $x.',';
    		$ar8 = array($max8);
    	}
    	if($x%10 ==0){
    		$max9 =  $x.',';
    		$ar9 = array($max9);
    	}
    		
        if($x%10 ==1)
        {
            echo "<tr><td>" . "<br>" . "</tr></td>";
        }
        echo "<tc><td>" . $x . "</td></tc>" ;

    }   
	echo max($ar);
	echo max($ar1);
	echo max($ar2);
	echo max($ar3);
	echo max($ar4);
	echo max($ar5);
	echo max($ar6);
	echo max($ar7);
	echo max($ar8);
	echo max($ar9);
    ?>
</table>

