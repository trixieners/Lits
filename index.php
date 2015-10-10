<head>
<?php


session_start();



?>
  <title>Lits Portal - Login</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style1.css">	
  <link rel="shortcut icon" href="icon.png" type="image/x-icon" />
  <link href="5/js-image-slider.css" rel="stylesheet" type="text/css" />
  <script src="5/js-image-slider.js" type="text/javascript"></script>
</head>
<body>

	<center><img src=lits.png height=100 width=200>
	<center><font face="Tw cen mt" color=red size=4pt><b>League of Information Technology Students</font>
	
  <form method="post" action="index.php" class="login">
    <p>
      <label for="login">SN:</label>
      <input type="text" name="studentno" id="login" >
    </p>
    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password">
    </p>

    <p class="login-submit">
      <button type="submit" name=save class="login-button">Login</button>
    </p>

    
  </form>
	
	

  
	
	<center><b><font color=darkred face="Tw cen mt">You dont have an account?</font> <a href='register.php'>click here.</b></a>
	
  
  
  <table>
<tr>

<div id="sliderFrame">
        <div id="ribbon"></div>
        <div id="slider">
           
                <img src="d.jpg" alt="Lits Logo" />
            </a>
            <a class="lazyImage" href="b.jpg" title="Lits Volleyball">Lits Volleyball</a>
        
                <b data-src="c.jpg" data-alt="#htmlcaption3">League of Information Technology Students</b>
            </a>
			<a class="lazyImage" href="e.jpg" title="Fine tuned. Sleek & Smooth">League of Information Technology Students</a>
            <a class="lazyImage" href="a.png" title="League of Information Technology Students">League of Information Technology Students</a>
            <a class="lazyImage" href="d.jpg" title="#htmlcaption5">Lazy Loading Image</a>
            <a class="lazyImage" href="e.jpg" title="Light weight Image Slider">Light weight Image Slider</a>
            
            
        </div>

        <div style="display: none;">
            <div id="htmlcaption3">
               League of Information Technology Students
            </div>
            <div id="htmlcaption5">
                League of Information Technology Students
            </div>
        </div>
                
        <!--thumbnails-->
        <div id="thumbs">
            <div class="thumb"><img src="d.jpg" /></div>
            <div class="thumb"><img src="b.jpg" /></div>
            <div class="thumb"><img src="c.jpg" /></div>
			<div class="thumb"><img src="e.jpg" /></div>
            <div class="thumb"><img src="a.png" /></div>
            
			 
            
        </div>
    </div>

</tr>
<?php
if(isset($_POST['save']))
{
include("dbconnection.php");
$a=$_POST['studentno'];
$b=$_POST['password'];
$query="select * from tbllogin where studentno='$a' and password='$b'";
$result=mysql_query($query);
$bilang=mysql_num_rows($result);

if($bilang==0)
print"<script language=javascript>
alert('Invalid Student Number Or Password');

</script>";
else
{

$_GET['studentno']=$_SESSION['studentno']=$a;
print"<script language=javascript>
alert('Login Successful');
window.location='home.php';

</script>";

}





}



?>	


</table>
<section class="about">
    
    <p class="about-author">
		<img src=lits.png height=25 width=45>
       <br><a href="http://facebook.com/innoferrer" target="_blank">Inno Angelo C. Ferrer</a> -<a href="https://www.facebook.com/prinz101?fref=ts" target="_blank">Prince Charnel Factor</a><br>
     &copy; 2015 League of Information Technology Students</a><br>
    </p>
  </section>

</body>
</html>
