<?php
	$langs= array(
		"" => "66%",
		"html1" => "66%",
		"html1" => "66%",
		"html1" => "50%",
		"html2" => "69%",
		"html3" => "68%",
		"html4" => "67%",
		"html5" => "66%",
	);
	$langs["nashaat"]="99";
	echo "<ul>";
	foreach($langs as $lang => $progress){
		echo "<li>" . $lang . "=>" . $progress . "</li>" ;
	}
	echo "</ul>";