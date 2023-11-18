<?php
error_reporting();
include('config.php');
// fetching admin email where mail will send
$sql ="SELECT emailId from tblemail";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0):
foreach($results as $result):
$adminemail=$result->emailId;
endforeach;
endif;
if(isset($_POST['submit']))
{
// getting Post values  
$name=$_POST['name'];
$phoneno=$_POST['phonenumber'];
$email=$_POST['emailaddres'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$uip = $_SERVER ['REMOTE_ADDR'];
$isread=0;
// Insert quaery
$sql="INSERT INTO  tblcontactdata(FullName,PhoneNumber,EmailId,Subject,Message,UserIp,Is_Read) VALUES(:fname,:phone,:email,:subject,:message,:uip,:isread)";
$query = $dbh->prepare($sql);
// Bind parameters
$query->bindParam(':fname',$name,PDO::PARAM_STR);
$query->bindParam(':phone',$phoneno,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':uip',$uip,PDO::PARAM_STR);
$query->bindParam(':isread',$isread,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
//mail function for sending mail
$to=$email.",".$adminemail; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From:Contact Form <projectdemo>'."\r\n";
$ms.="<html></body><div>
<div><b>Name:</b> $name,</div>
<div><b>Phone Number:</b> $phoneno,</div>
<div><b>Email Id:</b> $email,</div>";
$ms.="<div style='padding-top:8px;'><b>Message : </b>$message</div><div></div></body></html>";
mail($to,$subject,$ms,$headers);




echo "<script>alert('Your info submitted successfully.');</script>";
  echo "<script>window.location.href='index.php'</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
  echo "<script>window.location.href='index.php'</script>";
}


}


?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Personal Portfolio Website</title>
<link rel="icon" type="image/x-icon" href="/images/pic1.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="./stylehome.css">
</head>
<body>
   <body data-spy="scroll" data-target=".navbar" data-offset="0">  
    <nav class="navbar navbar-default navbar-fixed-top" >
    	<div class="container">
  			<div class="navbar-header">
      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
      			<i class="fa fa-align-justify fa-lg" title="Align Justify"></i>
      			</button>
      				<a class="navbar-brand" href="admin/index.php">ραи∂ι•🦋</a>
  			</div>
  			<div class="collapse navbar-collapse " id="navbar">
      		    <ul class="nav navbar-nav navbar-right">
        		<li><a href="#About">About</a></li>
        		<li><a href="#Portfolio">Portfolio</a></li>
        		<li><a href="#Contact">Contact</a></li>
     		    </ul>
  			</div>
     	</div>
	</nav>
<section class="container-fluid home text-center paralax" id="welcome-section">
    <div class="" id="homeH1"><h1>ESAKKIPANDI</h1> 
    	<div class="homeSocial">
          <a href="https://www.linkedin.com/in/esakkipandi-s-09916327a/" target="_blank" title="My linkedin">
          <i class="fa fa-linkedin fa-2x fa-fw"></i></a>
          <a href="https://twitter.com/Pandi__s" target="_blank" title="My Twitter">
          <i class="fa fa-twitter fa-2x fa-fw"></i></a>
          <a href="https://www.instagram.com/pandi._.22/" target="_blank" title="My instagram">
          <i class="fa fa-instagram fa-2x fa-fw"></i></a>
          <a href="https://www.snapchat.com/add/pandi-22?share_id=_wFJY9CHHbY&locale=en-US" target="_blank"title="My Snapchat">
          <i class="fa fa-snapchat fa-2x fa-fw"></i></a>
          <a href="https://github.com/Pandi0021" target="_blank" title="My GitHub" id="profile-link">
          <i class="fa fa-github fa-2x fa-fw" ></i></a>
          <a href="https://codepen.io/pandi21" target="_blank" title="My codepen" id="profile-link">
          <i class="fa fa-codepen fa-2x fa-fw" ></i></a>
        </div>
    </div>
    <a href="#About"><i class="fa fa-angle-double-down fa-4x welcomeI"></i></a>
</section>
	<div class="container-fluid">
  		<div class="row about" id="About">
    		<div class="container">
      			<div class="row relative">
        			<div class="col-md-2 Me-tag hidden-sm hidden-xs">
          				<svg>
            				<defs>
	         					<pattern id="forest" patternUnits="userSpaceOnUse" width="300" height="300" >
		     					<image xlink:href="images/bg2.jpg"width="300" height="300" />
	        					</pattern>
            				</defs>
           						<text y="1.2em">ME</text>
          				</svg>
         			</div>
					<div class="col-md-6 col-sm-8 text-about text-center max-height">       				<div class="">
            			<p class="">I'm BCA Student, Passionated About Computer Application.
       					<h4>WEB DESIGNER</h4>
    					<h5><a class="fa fa-eye" href="resume.html"> My Resume</a><br><a class="fa fa-download" href="ESAKKIPANDI.S_RESUME.pdf"download> My Resume</a> </h5>       				
					</div>
                    </div>
				<div class="col-md-4 col-sm-offset-0 col-sm-4 col-xs-6 col-xs-offset-3">
  					<div class="img-shape"><img class="img-responsive img-about" id="img" src="images/pic1.jpg" alt="My Photo"></div>
   			 	</div>
       		 	</div>
    		</div>
        </div>	
</section>
<section class="row portfolio" id="Portfolio">
    <div class="TitleSection paralax">
     	<h1 class="text-center">PORTFOLIO</h1>
	</div>
    <div class="container relative" id="portfolioContent">
        <div class="row SC showcase-1">
            <div class="col-sm-6 max-height relative">
                <span class="VTA">
                    <p class="text-right">
                     	<span> 
                            <a target="_blank" href="cgpa/index.php" title="Visit It">
                               CGPA CALCULATOR
                            </a>
                        </span>
                    </p>
                </span>
           </div>
        </div>         
    </div>
    <div class="container relative" id="portfolioContent">
        <div class="row SC showcase-1">
            <div class="col-sm-6 max-height relative">
                <span class="VTA">
                    <p class="text-right">
                     	<span> 
                            <a target="_blank" href="qr/index.php" title="Visit It">
                               QR CODE GENERATOR
                            </a>
                        </span>
                    </p>
                </span>
           </div>
        </div>         
    </div>
    <div class="container relative" id="portfolioContent">
        <div class="row SC showcase-1">
            <div class="col-sm-6 max-height relative">
                <span class="VTA">
                    <p class="text-right">
                     	<span> 
                            <a target="_blank" href="zite/index.php" title="Visit It">
                               ZITE
                            </a>
                        </span>
                    </p>
                </span>
           </div>
        </div>         
    </div>
</section>
  <div class="row contact" id="Contact">
    <div class="TitleSection paralax">
      <h1 class="text-center"> CONTACT</h1>
    </div>
    <div class="container">  
        <div class="col-sm-6">
            <form name="ContactForm" method="post">
                <div class="form-group">
                    <input type="text" class="form-control input-lg" id="name" placeholder="Name" name="name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-lg" id="" placeholder="Phone Number" maxlength="10" name="phonenumber" required autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control input-lg" id="email" placeholder="Example@mail.com" name="emailaddres" required autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-lg" id="" placeholder="Subject" name="subject" required autocomplete="off">
                </div>
                <div class="form-group">
                    <textarea class="form-control input-lg" rows="8" id="message" placeholder="Send me a message" cols="100" name="message" required></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    <div class="col-sm-6 ">
      <div class="card text-center">
        <img src="images/pic2.jpg" class="img-responsive">
        <div class="cardText"> <h2>ESAKKIPANDI.S</h2>
            <p>Web Designer</p>
            <div class="homeSocial">
            <a href="https://www.linkedin.com/in/esakkipandi-s-09916327a/" target="_blank" title="My linkedin">
            <i class="fa fa-linkedin fa-2x fa-fw"></i></a>
            <a href="https://twitter.com/Pandi__s" target="_blank" title="My Twitter">
            <i class="fa fa-twitter fa-2x fa-fw"></i></a>
            <a href="https://www.instagram.com/pandi._.22/" target="_blank" title="My instagram">
            <i class="fa fa-instagram fa-2x fa-fw"></i></a>
            <a href="https://www.snapchat.com/add/pandi-22?share_id=_wFJY9CHHbY&locale=en-US" target="_blank"title="My Snapchat">
            <i class="fa fa-snapchat fa-2x fa-fw"></i></a>
            <a href="https://github.com/Pandi0021" target="_blank" title="My GitHub" id="profile-link">
            <i class="fa fa-github fa-2x fa-fw" ></i></a>
            <a href="https://codepen.io/pandi21" target="_blank" title="My codepen" id="profile-link">
            <i class="fa fa-codepen fa-2x fa-fw" ></i></a>
            </div>
        </div>
      </div>
    </div>   
  </div></div>     
  </div>
<footer class="container-fluid paralax">
    <div class="row">
        <div class="col-xs-12">
            <h4 class="text-center">Made by <a href="#" target="_blank" title="">@ραи∂ι•🦋</a>
            </h4>
        </div>
    </div>
</footer>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script  src="./script.js"></script>
</body>
</html>
