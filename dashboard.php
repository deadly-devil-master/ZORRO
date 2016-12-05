<!DOCTYPE HTML>
<html>
<head>
<title>Zorro---Keep Your Pockets safe</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery and Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- my CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
 
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--chart Predefined classes-->
<script src="js/Chart.min.js"></script>
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <script src="js/chartinator.js" ></script>
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.html"> <h1>Zorro</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
												<div class="user-name">
													<p>Overlord</p>
													<span>Zorro User</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--header end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
<!--market updates updates-->
	 <div class="market-updates">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
						<h3><?php echo 83026; ?></h3>
						<h4>Total Money</h4>
						<p>Money from all sources</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-file-text-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-2">
				 <div class="col-md-8 market-update-left">
					<h3><?php echo 13698; ?></h3>
					<h4>Wallet Cash</h4>
					<p>Cash in your hand</p>
				  </div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-8 market-update-left">
						<h3><?php echo 69328; ?></h3>
						<h4>Asset Cash</h4>
						<p>Cash in your Bank</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-envelope-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>
<!--market updates end here-->
<!--mainpage chit-chating-->
<div class="chit-chat-layer1">
	<div class="col-md-6 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                  Recent Transactions
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Transaction</th>
                                      <th>Person</th>                                   
                                                                        
                                      <th>Category</th>
                                      <th>Amount</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Food</td>
                                  <td>Malorum</td>                                 
                                                             
                                  <td><span class="label label-danger">Expenditure</span></td>
                                  <td><span class="badge badge-info">5000</span></td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>Hospital</td>
                                  <td>Evan</td>                               
                                                                  
                                  <td><span class="label label-danger">Expenditure</span></td>
                                  <td><span class="badge badge-info">40000</span></td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>Internet</td>
                                  <td>John</td>                                
                                  
                                  <td><span class="label label-danger">Expenditure</span></td>
                                  <td><span class="badge badge-info">750</span></td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>Client Ops</td>
                                  <td>Danial</td>                                 
                                                             
                                  <td><span class="label label-success">Income</span></td>
                                  <td><span class="badge badge-info">65000</span></td>
                              </tr>
                              <tr>
                                  <td>5</td>
                                  <td>Photography</td>
                                  <td>David</td>                                
                                                                 
                                  <td><span class="label label-success">income</span></td>
                                  <td><span class="badge badge-danger">20000</span></td>
                              </tr>
                              <tr>
                                  <td>6</td>
                                  <td>Party</td>
                                  <td>Ace batch</td>                                  
                                                             
                                  <td><span class="label label-success">income</span></td>
                                  <td><span class="badge badge-success">5060</span></td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
             </div>
      </div>
      <div class="col-md-6 chit-chat-layer1-rit">    	
      	  <div class="geo-chart">
					<section id="charts1" class="charts">
				<div class="wrapper-flex">
				    <div class="col geo_main">
				        <div id="geoChart" class="chart"> </div>
				    </div>
				</div>
				</section>				
			</div>
      </div>
     <div class="clearfix"> </div>
</div>
<!--main page chit chating end here-->
<!--main page chart start here-->
<div class="main-page-charts">
   <div class="main-page-chart-layer1">
		<div class="col-md-6 chart-layer1-left"> 
			<div class="glocy-chart">
			<div class="span-2c">  
                        <h3 class="tlt">Your Analytics</h3>
                        <canvas id="bar" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
                        <script>
                            var barChartData = {
                            labels : ["Jan","Feb","Mar","Apr","May","Jun","jul"],
                            datasets : [
                                {
                                    fillColor : "#FC8213",
                                    data : [65,59,90,81,56,55,40]
                                },
                                {
                                    fillColor : "#337AB7",
                                    data : [28,48,40,19,96,27,100]
                                }
                            ]

                        };
                            new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);

                        </script>
                    </div> 			  		   			
			</div>
		</div>
		<div class="col-md-6 chart-layer1-right"> 
			<div class="user-marorm">
			<div class="malorum-top">				
			</div>
			<div class="malorm-bottom">
				<span class="malorum-pro"> </span>
			     <h4>Click to have a Overview</h4>
				 <h2>Overlord</h2>
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising.</p>
				<ul class="malorum-icons">
					<li><a href="#"><i class="fa fa-facebook"> </i>
						<div class="tooltip"><span>Facebook</span></div>
					</a></li>
					<li><a href="#"><i class="fa fa-twitter"> </i>
						<div class="tooltip"><span>Twitter</span></div>
					</a></li>
					<li><a href="#"><i class="fa fa-google-plus"> </i>
						<div class="tooltip"><span>Google</span></div>
					</a></li>
				</ul>
			</div>
		   </div>
		</div>
	 <div class="clearfix"> </div>
  </div>
 </div>
<!--main page chart layer2-->
<div class="chart-layer-2">
	
	<div class="col-md-6 chart-layer2-right">
			<div class="prograc-blocks">
		     <!--Progress bars-->
	        <div class="home-progres-main">
	           <h3>Your Stats</h3>
	         </div>
	        <div class='bar_group'>
					<div class='bar_group__bar thin' label="Today's Income" show_values='true' tooltip='true' value='343'></div>
					<div class='bar_group__bar thin' label="Today's Expenditure" show_values='true' tooltip='true' value='235'></div>
					<div class='bar_group__bar thin' label="Total Income" show_values='true' tooltip='true' value='550'></div>
					<div class='bar_group__bar thin' label="Total Expenditure" show_values='true' tooltip='true' value='456'></div>
		    </div>
				<script src="js/bars.js"></script>

	      <!--//Progress bars-->
	      </div>
	</div>
	<div class="col-md-6 chart-layer2-left">
		<div class="content-main revenue">			
					<h3>Total Revenue</h3>
					<canvas id="radar" height="300" width="300" style="width: 300px; height: 300px;"></canvas>
						<script>
							var radarChartData = {
								labels : ["","","","","","",""],
								datasets : [
									{
										fillColor : "rgba(104, 174, 0, 0.83)",
										strokeColor : "#68ae00",
										pointColor : "#68ae00",
										pointStrokeColor : "#fff",
										data : [65,59,90,81,56,55,40]
									},
									{
										fillColor : "rgba(236, 133, 38, 0.82)",
										strokeColor : "#ec8526",
										pointColor : "#ec8526",
										pointStrokeColor : "#fff",
										data : [28,48,40,19,96,27,100]
									}
								]
								
							};
							new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData);
						</script>
		</div>
	</div>
  <div class="clearfix"> </div>
</div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Zorro. All Rights Reserved | Designed and developed by  Team Overlord </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="#"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <li id="menu-comunicacao" ><a href="#"><i class="fa fa-book nav_icon"></i><span>Add Transaction</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-comunicacao-sub" >
		            <li id="menu-mensagens" style="width: 120px" ><a href="#myModal" role="button" class="btn" data-toggle="modal">Add Income</a>
		            </li>
		            <li id="menu-arquivos" ><a href="#myModal2" role="button" class="btn" data-toggle="modal">Add Expense</a></li>
		          </ul>
		        </li>
		          <li><a href="http://www.allpointnetwork.com/Flocator.aspx"><i class="fa fa-map-marker"></i><span>Maps</span></a></li>
		        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Tables</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		          	 <li id="menu-academico-boletim" ><a href="login.html">Today</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="signup.html">Last 5 days</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="signup.html">Last 10 days</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="signup.html">Last 20 days</a></li>
		          </ul>
		        </li>
		        <li><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Charts</span></a></li>
		         <li><a href="#"><i class="fa fa-cog"></i><span>Settings</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="404.html">Change Password</a></li>
			            <li id="menu-academico-boletim" ><a href="blank.html">Edit Profile Picture</a></li>
			            <li id="menu-academico-boletim" ><a href="blank.html">Edit Social Accounts</a></li>
		             </ul>
		         </li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--modals start here -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Income</h4>
        </div>
        <div class="modal-body">
          <form style="text-align: center;">
          <label>Income Source</label>
          	<input type="text" name="Income-Name"><br><br>
          	<label>Date</label>
          	<input type="date" name="expdate" style="width:200px; height: 30px; margin-left: 80px;"><br><br>
          <label style="margin-right: 60px;">Amount</label>
          	<input type="number" name="Income-data">
          </form>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-default" data-dismiss="modal" value="Submit">
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Expense</h4>
        </div>
        <div class="modal-body">
          <form style="text-align: center;">
          <label>Category</label>
          	<select style="width:200px; height: 30px; ">
          		<option>Food</option>
          		<option>Travel</option>
          		<option>Education</option>
          		<option>Medicines</option>
          		<option>Accommodation</option>
          		<option>Entertainment</option>
          	</select><br><br>
          	<label>Date</label>
          	<input type="date" name="expdate" style="width:200px; height: 30px; margin-left: 35px;"><br><br>
          <label>Amount</label>
          	<input type="number" name="Expense-data" style="width:200px; height: 30px; margin-left: 10px;">
          </form>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-default" data-dismiss="modal" value="Submit">
        </div>
      </div>
      
    </div>
  </div>
<!--modals end here   -->
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     