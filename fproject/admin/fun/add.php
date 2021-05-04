<?php
include ('../../connect.php');
$mlanguage =$_POST['mlanguage'];
$mtitle=$_POST['mtitle'];
$mhome=$_POST['mhome'];
$mabout=$_POST['mabout'];
$mprotofolio=$_POST['mprotofolio'];												
$mcontact=$_POST['mcontact'];
$mline1=$_POST['mline1'];
$mline2=$_POST['mline2'];				
$mbutton1=$_POST['mbutton1'];
$mbutton2=$_POST['mbutton2'];
$mbutton3=$_POST['mbutton3'];
$mbutton4=$_POST['mbutton4'];
$mparagraph1=$_POST['mparagraph1'];
$mparagraph2=$_POST['mparagraph2'];
$mail=$_POST['mail'];
$mdepartement1=$_POST['mdepartement1'];
$mdepartement2=$_POST['mdepartement2'];
$mdepartement3=$_POST['mdepartement3'];
$mdepartement4=$_POST['mdepartement4'];
$mgetintouch =$_POST['mgetintouch'];
$mname=$_POST['mname'];
$memail=$_POST['memail'];
$mmassage=$_POST['mmassage'];
$msend=$_POST['msend'];
$mfacebook=$_POST['mfacebook'];
$mtwiter=$_POST['mtwiter'];
$myoutube=$_POST['myoutube'];
$minstagram=$_POST['minstagram'];
$mline3=$_POST['mline3'];
/*
$mimg1= $_FILES['mimg1']['name'];
$mimg1tmb= $_FILES['mimg1']['tmp_name'];																
$upload_file='../../img/'; 
move_uploaded_file($mimg1tmb, $upload_file.$mimg1);

$mimg2=$_FILES['mimg2']['name'];
$mimg2tmb=$_FILES['mimg2']['tmp_name'];
$upload_file='../../img/'; 
move_uploaded_file($mimg2tmb, $upload_file.$mimg2);
*/
$sql="INSERT INTO info (mlanguage , mtitle , mhome , mabout , mprotofolio , mcontact , mline1 , mline2 , mbutton1 , mbutton2 , mbutton3 , mbutton4 , mparagraph1 , mparagraph2 , mail , mdepartement1 , mdepartement2 , mdepartement3 , mdepartement4 , mgetintouch , mname , memail , mmassage , msend , mfacebook , mtwiter , myoutube , minstagram , mline3 ) VALUES ('$mlanguage' , '$mtitle' , '$mhome' ,'$mabout','$mprotofolio','$mcontact','$mline1','$mline2','$mbutton1','$mbutton2','$mbutton3','$mbutton4','$mparagraph1','$mparagraph2','$mail','$mdepartement1' , '$mdepartement2' , '$mdepartement3' , '$mdepartement4' , '$mgetintouch' , '$mname' , '$memail' , '$mmassage' , '$msend' , '$mfacebook' , '$mtwiter' , '$myoutube' , '$minstagram' , '$mline3')"; 
$result = $connect->query($sql);
echo $sql;
header('Location: http://localhost/fproject/admin/admin.php')
?>