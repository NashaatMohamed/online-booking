<?php
/*

	for ($i=0;$i<=6;$i++){
		echo $i . "<br>";
	}
$langs=array("nashaat","mohamed","ahmed","khaled","abdallah");
echo count($langs) . "<br>";
echo $langs[3];	
echo"<ul>";
for($i=0;$i<count($langs);$i++){
	echo "<li>" . $langs[$i] . "</li>";
}
echo "</ul>";

echo "<select name = year>";
for($year=1990;$year<= 2020;$year++){
	echo "<option value= $year>" . $year . "</option>" ;
}
echo "</select>";
*/
$i=1;
for(;;){
	if($i>20){
		break;
	}
	echo $i . "<br>";
	$i++;
}