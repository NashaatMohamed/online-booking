<?php
$ticketprice= 200;
if ($ticketprice>700 && $ticketprice<100) {
	echo "your ticket price is " . $ticketprice . " usd" . " you have discount 5%";
}
elseif ($ticketprice>=400) {
	echo "your ticket price is " . $ticketprice . " usd" . " you have discount 15%";

}else{
	echo "sorry you dont have any discount";

}