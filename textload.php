<hmtl>

<p>
<?php 

$name=$_POST["roll"];
$file=fopen("$name.txt","r");
 
 while(!feof($file)){
 if($file==" ")
 {
 echo "nooooooooooooooooo";
 continue;
 }
 echo fgets($file);
 
 }
 
 fclose($file);

 if(empty($_POST["roll"]))
							echo "no image is available";
else
							echo "<img src='$name.png' alt='error'>";
 
 
?>
</p>
</hmtl>