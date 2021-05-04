<?php
	
	/*$workers = array(
		"mohamed" => "10%",
		"ali" => "10%",
		"khaled"=> "10%",
		"atef"=> "10%",
		"hassan"=> "10%",
		"nashaat"=> "10%",
		"10"=> "10%"
	);*/

	/*if(in_array(10,$workers)){
		echo "its found";
	}
	*/
	/*$work= array_search("10", $workers);
	echo $work . " " . $workers[$work];
	*/
	/*if(array_key_exists("hassan", $workers)){ 
		echo "yessssssssssssssssssss";
	}else{
		echo "nooooooooooooooooooooooooooooo";
	}
	*/
	/// ad athem array
$workers = array("mohamed","ali","khaled","atef","hassan","nashaat");
array_push($workers,"mmmmm","hhhhhh","rrrrrttrt");
array_unshift($workers,"ttttttt","yyyyyyyyy","uuuuuuuu");
echo "<pre>" ;
print_r($workers);
echo "</pre>";