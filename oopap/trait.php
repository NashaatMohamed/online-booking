<?php


/*trait finger{      //consider class or like class
	public function ff(){
	echo "feature 1";
	return $this;
}
}
trait head{
	public function hh(){
	echo "feature 2";
	return $this;
}
}
trait leg{
	public function ll(){
	echo "feature 3 ";
	return $this;
}
}
trait allfeature{
	use finger ,head,leg; 
}

class nashaat{
	use allfeature;
}
class mohamed{
	use head , leg;
}
class ahmed{
	use leg;
}
$nashaat = new nashaat();
$nashaat ->ff()->hh()->ll();
echo "<pre>";print_r($nashaat);echo "</pre>";

$mohamed = new mohamed();
$mohamed->hh()->ll();
echo "<pre>";print_r($mohamed);echo "</pre>";

$ahmed = new ahmed();
$ahmed->ll();
echo "<pre>";print_r($ahmed);echo "</pre>";
*/
/*trait mobile{
	public function sayhello(){
		echo "welcome to naat" ;
	}
}
class phone {
	public function sayhello(){
		echo "welcome ya baba";
	}
}
class myphone extends phone{
	use mobile;
}
$myphone = new myphone();
$myphone ->sayhello();
echo "<pre>";print_r($myphone);echo "</pre>";
*/
trait nashaat{
	public function name(){
		echo "nashaat";
	}
}
trait manar{
	public function name(){
		echo "manar";
	}
}
class myname{
	use nashaat , manar{
		nashaat ::name as nashaatmehtod;
		manar ::name insteadof nashaat ;
	} 
}
$myname = new myname();
$myname ->name(); 
$myname ->nashaatmehtod();

echo "<pre>";print_r($myname);echo "</pre>";