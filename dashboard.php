
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>City Portal</title>
<meta name="keywords" content="city portal, 3 columns, free css templates, website templates, white color" />
<meta name="description" content="City Portal is a 3-column free website template for everyone" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

    
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="WOW Slider, jquery slider, jquery slider" />
    <meta name="description" content="WOWSlider created with WOW Slider, a free wizard program that helps you easily generate beautiful web slideshow" />
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->

<script type="text/javascript"> window.history.forward(0)</script>
</head>
<body>

<div id="templatmeo_wrapper">

    <div id="templatemo_header">
    
        <div id="site_title">
            <h1><a href="#" target="_parent">
                <img src="7.jpg" alt="City Portal" />
                <span><?php


if(isset($_COOKIE['user']))
{
    echo"WELCOME:".$_COOKIE['user'];
    echo"<br>";
        
    
}
else
header("location:login.php");

?></span>

            </a></h1>
        </div> <!-- end of site_title -->
        
        <div id="header_right">
        
            <ul id="header_button">
                <li><a href="ulogout.php">LOGOUT</a></li>
            
            </ul>
            
            <div class="cleaner"></div>
            
            <form action="#" method="get">
                <input type="text" value="Shoot here to nostalgia..!!" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="Go" alt="Search" id="searchbutton" title="Search" />
            </form>
        
        </div>
        
    </div>
    <body>
		<div class="container">	
			<div class="main">
				<form class="cbp-mc-form" method="post">
					<div class="cbp-mc-column">
	  					
	  				</div>
	  				<div class="cbp-mc-column">
	  					<label for="phone">ID</label>
	  					<input type="text" id="phone" name="id" placeholder="your Id">
						<label for="affiliations">Complain</label>
	  					<textarea id="affiliations" name="description"></textarea>
	  					<label>Police station Id</label>
	  					<select id="occupation" name="pstation_id">
	  						<option value="0">Choose Police ID</option>
	  						<option value="Mamura">Mamura</option>
	  						<option value="Sector6">Sector6</option>
	  						<option value="sector 5">sector 5</option>
	  					</select>
	  				</div>
	  				<div class="cbp-mc-column">
	  					
	  				</div>
	  				<div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" type="submit" name="send" value="Send your data" /></div>
				</form>
			</div>
		</div>
	</body>
    <?php

include("config.php");
    
   
    
    if(isset($_REQUEST['send'])){
        
         $id= $_POST['id'];
    $pid= $_POST['pstation_id'];
    $desc= $_POST['description'];
        
        if(!empty($_POST['id'])){
            
            $qry= "INSERT INTO complaint values($id,'$desc','$pid') ";
            $result=mysql_query($qry);
            
            
            echo "<script>alert('Your Complaint is Successfully Registered')</script>";
           
            
        }
        else{
             echo "Your haven't enter your User ID!!";  
             }

}

?>
    
