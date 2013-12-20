<hmtl>


<p>
	<?php
		
		function fact($n){
		if($n == 1) return $n;
		else 									return $n*fact($n-1);
		}
		$num=$_GET["num"];
		echo fact($num);
	?>
</p>
	



</html>