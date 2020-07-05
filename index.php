<!DOCTYPE html>
<html>
<head>
	<title>Nikita's_portfolio</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>
	<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#"><img src="images/coeplogo.png"></a>
  
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about-me">About Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact-me">Contact Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#subscribe-me">Subscribe Me</a>
      </li>
     
    	</ul>
    
		</div>
	</nav>
 	<div class="container-fluid">
 	 <img src="images/bg1.jpg" style="width:100%;">
  
 	 <div class="centered">
 	 	<div class="text-conatiner" style="color: white">
 			<h3>Hello,</h3>
 			<h1>I'M NIKITA</h1>
 			<h3>I Am A Computer Engineering <br> Student</h3>
 			<button class="intern-me"><a href="#subscribe-me">Intern Me</a></button>
 			
 	 </div>
	</div>
	<section class="my-5" id="about-me">
		<div class="py-5" id="head">
			<h2 class="text-center">About Me</h2>
		</div>
		<div class="container">
			<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
			<img src="images/logo.jfif" class="img-fluid">	
		</div>
		<div class="col-lg-8 col-md-8 col-12">
<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"portfoliouserdata");
$query="select * from about";
$result=mysqli_query($conn,$query) or die(mysqli_error());

while($row=mysqli_fetch_array($result)){
		?>
            <h4><?php echo $row[1]; ?></h4>
<?php
}
?>
		</div>
	</div>
	</div>
	</section><br>
		
		<section class="my-5">
		<div class="py-5" id="head">
			<h2 class="text-center">Education</h2>
		</div>
      <div class="container">
 	 
  
 	 <div id="education">
 	 	<div class="text-conatiner" style="color: white">
        <?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"portfoliouserdata");
$query="select * from college";
$result=mysqli_query($conn,$query) or die(mysqli_error());

while($row=mysqli_fetch_array($result)){
		?>
            <p><b><?php echo $row[1]; ?></b></p><br>
<?php
}
?>
		 </div>	
 	 </div>
	</div>   
</section>



	<section class="my-5">
		<div class="py-5" id="head">
			<h2 class="text-center">Courses And Workshop</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<div class="card" style="width:400px">
  						<img class="card-img-top" src="images/python1.jfif" alt="Card image">
  						<div class="card-body">
 					   		<h4 class="card-title" style="color: black">Python Programming</h4>
					   	    <p class="card-text" style="color: black">I Have Completed Python Programming Course Also Advanced Python. I Can Also Make A Game By Using Python</p>
 					   		
 					   </div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<div class="card" style="width:400px">
  						<img class="card-img-top" src="images/pyladies.jpg" alt="Card image">
  						<div class="card-body pd-3">
 					   		<h4 class="card-title" style="color: black">Hardware Using Python</h4>
					   	    <p class="card-text" style="color: black">I Have Completed Workshop On Hardware Using Python At COEP </p>
 					   		
 					   </div>
					</div><br><br>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<div class="card" style="width:400px">
  						<img class="card-img-top" src="images/c.jfif" alt="Card image">
  						<div class="card-body">
 					   		<h4 class="card-title" style="color: black">C Programming</h4>
					   	    <p class="card-text pb-3" style="color: black">I Am Learning C Programmimg Which contanis C Programming Along With Data Structure</p>
 					   </div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<div class="card" style="width:400px">
  						<img class="card-img-top" src="images/web.jfif" alt="Card image">
  						<div class="card-body">
 					   		<h4 class="card-title" style="color: black">Web Development</h4>
					   	    <p class="card-text" style="color: black">Now , I Am Doing A Web development Course of 6 weeks on intershala. This training contains HTML5, CSS ,Bootstrap,SQL,PHP.</p>
 					   </div>
					</div>
				</div>
					
				</div>
			</div>
			
		</div>	


	</section>	



	<section class="my-5">
		<div class="py-5" id="head">
			<h2 class="text-center">Specialisations</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
				 <div class="card" style="width: 400px">
  						<img class="card-img-top img-circle" src="images/python1.jfif" alt="Card image">
				 </div>
				</div>
				 <div class="col-lg-6 col-md-6 col-12">
				 <div class="card" style="width: 400px">
  						<img class="card-img-top img-circle" src="images/c1.jpg" alt="Card image">
				 </div>
				 </div>
			</div>
		</div>
	</section>


	<section class="my-5" id="subscribe-me">
		<div class="py-5" id="head">
			<h2 class="text-center">Subsciption Form</h2>
		</div>

		<div class="w-50 m-auto">
		<div>
			<p><u>If You Want To Work With Me Then Please Subscribe Me.</u></p><br>
		</div> 
			<form action="userinfo.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" autocomplete="off" class="form-control">
				</div>

				<div class="form-group">
					<label>Email ID</label>
					<input type="text" name="email" autocomplete="off" class="form-control">
				</div>

				<div class="form-group">
					<label>Mobile No</label>
					<input type="text" name="mobile" autocomplete="off" class="form-control">
				</div>

				<div class="form-group">
					<label>Comments</label>
					<textarea class="form-control" name="comment">
						
					</textarea>
					
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>	
		</div>
		<br><br>



		<div class="container" id="contact-me">
			<center>
				<h2 class="jumbotron">Follow Me Through Social Media</h2>
			</center>
			<div class="row" id="icon">
				<div class="col-xs-10 col-xs-offset-1">
					<div class="media">
						<a class="social" href="https://www.instagram.com/nikita.t_26" target="blank"><I class="fa fa-3x fa-instagram" aria-hidden="true"></I></a>
						<a class="social" href="https://twitter.com/Nikita78179747" target="blank"><I class="fa fa-3x fa-twitter" aria-hidden="true"></I></a>
						<a class="social" href="https://https://www.linkedin.com/in/nikita-tipule-845a791b1/" target="blank"><I class="fa fa-3x fa-linkedin" aria-hidden="true"></I></a>
						<a class="social" href="#" target="blank"><I class="fa fa-3x fa-facebook" aria-hidden="true"></I></a>
					
				</div>
			</div>
			
		</div>
		<br>

		<footer>
			<p class="p-3 bg-dark text-white text-center">Nikita Tipule's Portfolio Page . Contact me: +91 9527179291</p>
		</footer>









<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>




