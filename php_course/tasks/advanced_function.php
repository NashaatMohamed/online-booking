<?php 

	function taketiket($name,$age){
			$ticket = rand(100,100000);
		if ($age >= 30){
			$msg = "hello " . $name . " your age is " . $age . "<br>";
			$msg .= "you are gualified to take tiket :)" . "<br>" . "your ticket id is " . "[<span> $ticket </span>]";  
		}else{
			$msg = "hello " . $name . "your age is " . $age . "<br>";
			$msg .= "you are not gualified to take tiket :(" ;
		}
		return $msg;
	}
	 $id = taketiket("nashaat","35");
	function stylish($element){
		$frame = "<div class='nice_frame'>" . $element . "</div>"; 
		return $frame;
	}
		$MYELEMENT = stylish($id);
	?>
	<!DOCTYPE>
	<html>
		<head>
			<title> advanced function </title>
			<meta charset="utf-8">
			<style>
				.nice_frame{
					padding: 10px;
					text-align: center;
					width: 400px;
					margin: 20 auto;
					border-radius: 10px;
					background-color: green;
					color: black;
					font-size: bold;
					font-style: italic;
				}
				.nice_frame span{
					color: blue;
				}
			</style>
		</head>
		<body>
			<?php echo $MYELEMENT ; ?>
		</body>
	</html>