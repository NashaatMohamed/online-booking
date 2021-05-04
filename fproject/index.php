<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    error_reporting(0);
    include("connect.php");
    if (is_null($_GET['mlanguage'])) {
            $mlanguage = 'ar';     
    }else{
      $mlanguage = $_GET['mlanguage'];
    }
    $sql = "select * from info where mlanguage='$mlanguage'";
    $result = $connect->query($sql);
    while($row=$result->fetch_assoc()) {
  ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $row['mtitle'] ?></title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
  <link rel="shortcut icon" href="img/icon.jpg" >
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- new style with new tabs-->
    <style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 500px;
}

#Home {background-color: rgb(84,208,221);}
#News {background-color: rgb(84,208,221);}
#Contact {background-color: rgb(84,208,221);}
#About {background-color: rgb(84,208,221);}
</style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <?php
      $sql0 = "select * from info" ;
    $result0 = $connect->query($sql0);
    while($row0=$result0->fetch_assoc()) {
  ?>
  <a href="index.php?mlanguage=<?php echo $row0['mlanguage'] ?>"><?php echo $row0['mlanguage'] ?> </a> &nbsp;&nbsp;&nbsp;
  <?php
    }
  ?>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><i class="fa fa-play fa-rotate-270"></i><?php echo $row['mtitle'] ?></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#page-top" class="page-scroll"><?php echo $row['mhome'] ?></a></li>
        <li><a href="#about" class="page-scroll"><?php echo $row['mabout'] ?></a></li>
        <li><a href="#portfolio" class="page-scroll"><?php echo $row['mprotofolio'] ?></a></li>
        <li><a href="#contact" class="page-scroll"><?php echo $row['mcontact'] ?></a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <h1><?php echo $row['mline1'] ?></h1>
          <p><?php echo $row['mline2'] ?></p>
          <a href="#about" class="btn btn-custom btn-lg page-scroll"><?php echo $row['mbutton1'] ?></a> 
          <a href="#about" class="btn btn-custom btn-lg page-scroll"><?php echo $row['mbutton2'] ?></a> 
          <a href="#about" class="btn btn-custom btn-lg page-scroll"><?php echo $row['mbutton3'] ?></a> 
          <a href="#about" class="btn btn-custom btn-lg page-scroll"><?php echo $row['mbutton4'] ?></a> 
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>About Me</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="img/about.jpg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <p><?php echo $row['mparagraph1'] ?></p>
          <p><?php echo $row['mparagraph2'] ?></p>
          <a href="#portfolio" class="btn btn-default btn-lg page-scroll"><?php echo $row['mail'] ?></a> </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio" style="padding: 20px;">
  <div class="container">
    <div class="section-title text-center center" style="padding: 20px;">
      <h2>Portfolio</h2>
      <hr>
    </div>
 <button class="tablink" onclick="openPage('Home', this, 'rgb(84,208,221)')"  id="defaultOpen"><?php echo $row['mdepartement1'] ?></button>
<button class="tablink" onclick="openPage('News', this, 'rgb(84,208,221)')"><?php echo $row['mdepartement2'] ?></button>
<button class="tablink" onclick="openPage('Contact', this, 'rgb(84,208,221)')"><?php echo $row['mdepartement3'] ?></button>
<button class="tablink" onclick="openPage('About', this, 'rgb(84,208,221)')"><?php echo $row['mdepartement4'] ?></button>

<div id="Home" class="tabcontent">
  <h3>Home</h3>
  <p>Home is where the heart is..</p>
</div>

<div id="News" class="tabcontent">
  <h3>News</h3>
  <p>Some news this fine day!</p> 
</div>

<div id="Contact" class="tabcontent">
  <h3>Contact</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="About" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2><?php echo $row['mget in touch'] ?></h2>
      <hr>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder=<?php echo $row['mname'] ?> required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder=<?php echo $row['memail'] ?> required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder=<?php echo $row['mmassage'] ?> required></textarea>
           <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default btn-lg"><?php echo $row['msend'] ?></button>
      </form>
      <div class="social">
        <ul>
           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>Copyright &copy; 2016 Spectrum. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
<?php
  }
?>
</body>
</html>