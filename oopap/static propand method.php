<?php

class mobile{
	public  static $name = "nashaat";
	public  static $ram = "2GB";

	public static  function sayhello(){
		return "hello";
	}
}
$mobile = new mobile();
//echo mobile::$name . "<br>";
//echo mobile::$ram . "<br>";
//echo mobile::sayhello();

echo $mobile->sayhello();


