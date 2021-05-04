
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<input type="text" name="username" />
	<input type="submit" value="login" />
</form>
<?php
	//echo $_REQUEST["username"];
if($_SERVER['REQUEST_METHOD'] == 'GET'){
	echo $_POST["username"]; 
}else{
	echo "sorry yOu not here";
}
?>