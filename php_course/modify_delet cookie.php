<?php
setcookie("background","",time()-3600,"/");
$maincolor="white";
if($_SERVER['REQUEST_METHOD'] == "POST"){

	$maincolor=$_POST["color"];
	setcookie("background",$maincolor,time()+3600,"/");
	echo $maincolor;
}
if(isset($_COOKIE["background"])){
	$body = $_COOKIE["background"];
}else{
	$body = $maincolor;
}
echo "<pre";
	print_r($_COOKIE);
echo "</pre>";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>modify cookie</title>
</head>
<body style = "background-color: <?php echo $body; ?>">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<input type="color" name="color">
		<input type="submit" value="choose">
	 </form>
</body>
</html>