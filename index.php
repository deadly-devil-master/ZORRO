<html>
<head>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>

 <link rel="stylesheet" href="css/boot1.css" type="text/css" />
  <script src="js/jquery-1.12.1.min.js"></script> 
  <script src="js/jquery1.js"></script>
  <script src="js/jquery2.js"></script>
  <script src="js/12.js"></script>
<style>
  nav,.foot{
	
	padding:10px;
	background:#303030;
	background:rgba(0,0,0,1);
	color:white;
	width:100%;
  }
  .in,.up{
	  text-decoration:none;
	  color:white;
  }
  .login{
	  padding:5px;
	  margin:10px;
	  border-radius:5px;
	  width:80%
  }
  </style>
  <script>
	$(document).ready(function(){
		$(".sign").hide();
    $(".in").click(function(){
        $(".log").show();
		$(".sign").hide();
    });
	$(".up").click(function(){
		$(".log").hide();
		$(".sign").show();
	});
});
  </script>
</head>
<body style="background-color:#003466;">
<nav class="clearfix">
<div class="logo" style="font-size:2em;font-weight:400;letter-spacing:10px;"><img src="images/logo.jpg" height="6%" width="5%">
<span style="color:white;font-size:16;font-weight:bold;letter-spacing:5px;">ZORRO</span>
<span style="font-size:16;font-weight:bold;letter-spacing:5px;float:right;padding-top:8px;"><a id="deve" href="developers.html"style="text-decoration:none;color:white;">DEVELOPERS</a>
       </div>  
<ul style="list-style-type: none; position: absolute;top:20px;left:830px;float: right;  padding:30px;">
</ul>
</nav>
<div>
	<center><h1 style="color:white; font-size:30;font-weight:bold;letter-spacing:5px;padding:15px;">PERSONAL ASSISTANCE FOR ALL YOUR EXPENSES</h1></center>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
		<table class="table table-bordered" style="padding:10px;margin-top:50px;">
			<thead>
      <tr>
        <th style="text-align:center; background-color:#d4a45d;"><a class="in" href="#">LOGIN</a></th>
        <th style="text-align:center; background-color:#d4a45d;"><a class="up" href="#">SIGNUP</a></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="2" style="text-align:center;">
        <div class="log">
			<div class="login-block">
				<form method="post" action="login.php">
					<input class="login" type="text" name="email" placeholder="Email" required=""><br>
					<input class="login" type="password" name="pass" class="lock" placeholder="Password"><br>
					<input class="login" type="submit" value="Login" style="background-color:green; color:white; border-color:green;">	
					
				</form>
			</div>

        </div>
        <div class="sign">
         		<div class="signup-block">
				<form method="post" action="register.php"> 
					<input class="login" type="text" name="name" placeholder="Name" required="">
					<input class="login" type="text" name="email" placeholder="Email" required="">
					<input class="login" type="password" name="pass" class="lock" placeholder="Password">
					<div class="clearfix"> </div>
					</div>
					<input class="login" type="submit" name="Sign In" value="Sign up" style="background-color:green; color:white; border-color:green;">														
				</form>
				</div>
			</form>
	
        </div>
        </td>
      </tr>
    </tbody>
  </table>

			</div>
			<div class="col-sm-4">
			</div>
			
		</div>
	</div>
</div>
<div  style="position:absolute; bottom:0px;" class="foot">
<center>
<p style="color:white;"> &copy Designed and Developed by ZORRO and Team</p>
</center>
</div>
<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
</body>
</html>