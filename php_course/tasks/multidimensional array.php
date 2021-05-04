<?php
	// multidimensional array(indexed)
	/*$diet = array(
		array("mohamed","ahmed","mahmoud","khaled","atef"),
		array("osama","hoda","nashaat","abdallah","seif"),
		array("mo","ah","ma","kg","hh"),
		array("mohamed556666","ahmed55555","mahmoud555","khaled333",array("apple","banaa","sugar",array("naat","lolo","manar",array(111,1122,11113))),"atef444"),
	);
	echo "<pre>";
	print_r($diet);
	echo "</pre>";
	echo $diet[3][3] . "<br>";
	echo $diet[3][4][3][3][1];
	*/
	
	/*// multidimensional array(associative)
	$diet = array(
		"day one" => array("math","arabic","english"),
		"day two" => array("science","breake","english"),
		"day three" => array("math","chemstery","franish"),
		"day four" => array("math","games","english",
			array("nashaat","mohamed","khaled"),
			array(
				"teacher" => "hosam",
				"students" => "hesham"
			)
	)
	);
	echo "<pre>";
	print_r($diet);
	echo "</pre>";
	echo $diet["day four"][4]["teacher"];
	*/
			// practice array//
	$diet = array(
		"day one" => array("math","arabic","english"),
		"day two" => array("science","breake","english"),
		"day three" => array("math","chemstery","franish")
	);
	foreach($diet as $key=>$value){
		echo "<h2>" . $key . "</h2>";
		foreach($value as $value2){
			echo $value2 . "<br>";
		}
	}
	
