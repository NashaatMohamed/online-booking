<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
form,h3,input,textarea{
  text-align: right;
}
</style>
</head>
<body>

<h3>اضافة لغة للموقع </h3>

<div class="container">
  <form action="fun/add.php" method="post";>
    <label for="fname">الغة</label>
    <input type="text" id="fname" name="mlanguage" placeholder="لغة الموقع ">

    <label for="fname">عنوان الموقع </label>
    <input type="text" id="fname" name="mtitle" placeholder="عنوان الموقع ">

    <label for="fname">الصفحة الرئيسية </label>
    <input type="text" id="fname" name="mhome" placeholder="الصفحة الرئيسية ">

    <label for="fname">عنا</label>
    <input type="text" id="fname" name="mabout" placeholder="عنا ">

    <label for="fname">معرض الاعمال </label>
    <input type="text" id="fname" name="mprotofolio" placeholder="معرض الاعمال ">

    <label for="fname">الاتصال بنا </label>
    <input type="text" id="fname" name="mcontact" placeholder="الاتصال بنا ">

    <label for="fname">السطر الاول تعريف الموقع </label>
    <input type="text" id="fname" name="mline1" placeholder="السطر الاول تعريف الموقع">

    <label for="fname">السطر الثانى للموقع </label>
    <input type="text" id="fname" name="mline2" placeholder="السطر الثانى للموقع ">

    <label for="fname">تسجيل الدخول </label>
    <input type="text" id="fname" name="mbutton1" placeholder="تسجيل الدخول ">

    <label for="fname">تسجيل الخروج </label>
    <input type="text" id="fname" name="mbutton2" placeholder="تسجيل الخروج ">

    <label for="fname">مستخدم جديد </label>
    <input type="text" id="fname" name="mbutton3" placeholder="مستخدم جديد ">

    <label for="fname">الصفحة الشخصية </label>
    <input type="text" id="fname" name="mbutton4" placeholder="الصفحة الشخصية ">

    <label for="subject">الفقرة الاولى </label>
    <textarea id="subject" name="mparagraph1" placeholder="اكتب شيئا " style="height:200px"></textarea>

    <label for="subject">الفقرة الثانيه </label>
    <textarea id="subject" name="mparagraph2" placeholder="اكتب شيئا " style="height:200px"></textarea>

    <label for="fname">زر التصنيفات</label>
    <input type="text" id="fname" name="mail" placeholder="زر التصنيفات">

    <label for="fname">كل الاعمال </label>
    <input type="text" id="fname" name="mdepartement1" placeholder="كل الاعمال ">

    <label for="fname">التصنيف  الاول </label>
    <input type="text" id="fname" name="mdepartement2" placeholder="التصنيف الاول ">

    <label for="fname">التصنيف الثانى </label>
    <input type="text" id="fname" name="mdepartement3" placeholder="التصنيف الثانى ">

    <label for="fname">التصنيف الثالث </label>
    <input type="text" id="fname" name="mdepartement4" placeholder="التصنيف الثالث ">

    <label for="fname">رسالة شكر </label>
    <input type="text" id="fname" name="mgetintouch" placeholder="رسالة شكر ">

     <label for="fname">اسم الراسل </label>
    <input type="text" id="fname" name="mname" placeholder="اسم الراسل ">

     <label for="fname">اميل الراسل </label>
    <input type="text" id="fname" name="memail" placeholder="اميل الراسل ">

     <label for="fname">الرسالة </label>
    <input type="text" id="fname" name="mmassage" placeholder="الرسالة">

     <label for="fname">زر الاسال </label>
    <input type="text" id="fname" name="msend" placeholder="زر الارسال ">

     <label for="fname">رابط الفيس </label>
    <input type="text" id="fname" name="mfacebook" placeholder="رابط الفيس ">

     <label for="fname">رابط التويتر </label>
    <input type="text" id="fname" name="mtwiter" placeholder="رابط التويتر ">

     <label for="fname">رابط اليوتيوب </label>
    <input type="text" id="fname" name="myoutube" placeholder="رابط اليوتيوب ">

     <label for="fname">رابط الانستا </label>
    <input type="text" id="fname" name="minstagram" placeholder="رابط الانستا ">

     <label for="fname">اخر سطر فى الموقع </label>
    <input type="text" id="fname" name="mline3" placeholder="اخر سطر فى الموقع ">

    <!-- <br>
     <label for="fname">اضافة ملف </label>
    <input type="file" id="fname" name="mimg1">
    <br>
     <label for="fname">اضافة ملف</label>
    <input type="file" id="fname" name="mimg2">
    <br> -->
    <input type="submit" value="ارسال">
  </form>
</div>

</body>
</html>
