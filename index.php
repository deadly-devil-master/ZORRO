<html>
<head>
 <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <style>
  nav{
	
	padding:10px;
	background:#303030;
	background:rgba(0,0,0,1);
	color:white;
	width:100%;
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
<span style="font-size:16;font-weight:bold;letter-spacing:5px;float:right;padding-top:8px;"><a id="deve" href="#"style="text-decoration:none;color:white;">DEVELOPERS</a>
       </div>  
<ul style="list-style-type: none; position: absolute;top:20px;left:830px;float: right;  padding:30px;">
</ul>
</nav>
<div>
	<center><h1 style="color:white;">Personal assistance for all your expenses</h1></center>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
					<table class="table table-bordered">
			<thead>
      <tr>
        <th style="text-align:center;"><a class="in" href="#">LOGIN</a></th>
        <th style="text-align:center;"><a class="up" href="#">SIGNUP</a></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="2" style="text-align:center;">
        <div class="log">
		    <div class="w3layouts" style="position: absolute;top:180px;left: 250px;">
	<!--sign in-->
		<div class="signin-agile">
			<form action="login.php" method="post" id="logform">
				<input type="text" name="user" class="name" placeholder="Username" required="">
				<input type="password" name="pass" class="password" placeholder="Password" required="">
				<ul>
					<li>
						<input type="checkbox" id="brand1" value="">
						<label for="brand1"><span></span>Remember me</label>
					</li>
				</ul>
				<a href="#">Forgot Password?</a><br>
				<div class="clear"></div>
				<input type="submit" value="Login">
			</form>
		</div>
	</div>
        </div>
        <div class="sign">
         	sdsdf
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
</body>
</html>