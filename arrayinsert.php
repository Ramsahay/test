<?php
	$a1=array(2,5,7,8);
	$a2=array(3,4,5,8);
	for($i=0;$i<count($a1);$i++){
		for($j=0;$j<count($a2);$j++){
			$newa[]=$a2[$j];
		}
		$newa[]=$a1[$i];
	}
	print_r($newa);
?>