<?php
for ($i=1; $i<6; $i++) { 
	for ($j=5; $j>=$i; $j--) { 
		echo '&nbsp&nbsp';
	}
	for ($b=1; $b<=$i; $b++) { 
		echo '*';
	}
	echo '<br>';
}
?>