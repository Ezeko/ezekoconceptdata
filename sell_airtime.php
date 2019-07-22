<?php include 'log_validate.php'; ?>
<!DOCTYPE html>
<head>
<title>SELL AIRTIME | Ezekoconcept</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link href="css/dashboard_style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<style>
#PENDING {color:blue;}
#CANCELLED {color:red;}
#APPROVED {color:green;}
#BULK_APPROVED {color:purple;}
#BULK_CANCELLED {color:orange;}
</style>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href= 'board.php' class="logo">
    DASHBOARD
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>

        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" >
                
                <span class="username"><?php $sql = "SELECT * FROM `users` WHERE username= '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo (' '.strtoupper($row['lastname']). ' ' . strtoupper($row['firstname']));
    }
} else {
    echo "0 results";
} ?></span>
             
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                   
                        <i class="fa fa-user"></i>
                        <span><b>USERNAME: <strong><?php $sql = "SELECT * FROM `users` WHERE username= '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo strtoupper($row['username']);
    }
} else {
    echo "0 results";
} ?></b></span>
</a>
              
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-money"></i>
                        <span>                        <span><b>BALANCE: #<strong><?php $sql = "SELECT balance FROM `users` WHERE username= '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo ($row['balance']);
    }
} else {
    echo "0 results";
} ?></b></span></span>
                    </a>
                
                </li>
                <li>
                    <a href="profile.php">
                        <i class="fa fa-bullhorn"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sub-menu" >
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span class="active">Data Menu</span>
                    </a>
                    <ul class="sub" >
                        <li><a href="data.php">Buy Data</a></li>
                        <li><a href="price.php">Price List</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="sell_airtime.php">
                        <i class="fa fa-tasks"></i>
                        <span>Sell Airtime</span>
                    </a>
                   
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>Contact </span>
                    </a>
                    <ul class="sub">
                        <li><a href="mailto:ezeko2017@gmail.com">Inbox</a></li>
                        <li ><a href="api.whatsapp.com/send?phone=2348188406153" >Contact us on whatsapp</a></li>
                    </ul>
                </li>
                     
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>Update Profile</span>
                    </a>
                    <ul class="sub">
                        <li><a href="update.php">Update</a></li>
			<li><a href="withdraw_fund.php">Withdraw Fund</a></li>
                 
                    </ul>
                </li>
                <li>
                    <a href="logout.php">
                        <i class="fa fa-key"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Manager</h4>
					<h5 class="fa fa-phone"> 08188406153</h5>
					<p>Call When compulsory</p>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Users</h4>
						<a href="https://api.whatsapp.com/send?phone=2348188406153"; style="w3-hover-green"><h3 class="fa fa-whatsapp"></h3></a>
						<p>Whatsapp</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-usd"></i>
					</div>
	
						<a href="sell_airtime.php"><div class="col-md-8 market-update-left">
						<h4>Sell</h4>
						<h3>Airtime</h3>
						<p>At reasonable percentage</p>
					</div></a>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<a href="data.php"><h4>Buy</h4>
						<h3>Data</h3>
						<p>Cheap and Fast</p></a>					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>	
		<!-- //market-->

								</header>
                                                                
                                                                
                                                                
								<div class="agileits-box-body clearfix">
									<div id="hero-area"></div>
								</div>
							</div>
						</div>
	<!--//agileinfo-grap-->
<div class="w3-panel w3-pink w3-leftbar w3-border-blue">
	
	<h3 class="w3-center w3-indigo">AIRTIME TO CASH</h3>	</div>
	
	<ul class='w3-ul w3-border'>
  <li><b>Network status</b></li>
   <li class='w3-container'>
    <div class='w3-quarter w3-padding w3-pale-yellow'>MTN: 80%</div>
    <div class='w3-quarter w3-padding w3-pink'>AIRTEL: 80%</div>
    <div class='w3-quarter w3-padding w3-green'>GLO: 70%</div>
    <div class='w3-quarter w3-padding w3-light-green'>9MOBILE: 80%</div>
  </li>
  </ul>

	<form action="sell_airtime_process.php" method="post" autocomplete = 'off'> 
	 <div class="w3-group">
        <label>Choose Network:</label>
		
		<select id="slct1" name = "slct1" class="w3-input w3-border"  onchange="populate(this.id,'slct2')" required>
				<option value = "">Select</option>
				<option value = "MTN" >MTN</option>
				<option value = "ETISALAT">9MOBILE</option>
				<option value = "AIRTEL">AIRTEL</option>
				<option value = "GLO">GLO</option>
		</select>
		
      </div>

	 
	  
	   <div class="w3-group">
        <label>FROM (YOUR PHONE NUMBER):</label>
        <input  class="w3-input w3-border" type="text" name="number2" maxlength ="11" minlength = "11" required>
      </div>
	  
          <div class="w3-group">
        <label>TO (OUR PHONE NUMBER):</label>
        <input  class="w3-input w3-border" type="text" name="number1" maxlength ="11" minlength = "11" required>
      </div>
	  
           <div class="w3-group">
        <label>AMOUNT:</label>
        <input  class="w3-input w3-border" type="number" name="amount" maxlength ="11" minlength = "11" required>
      </div>
      <button type="submit" class="w3-btn-block w3-padding-large w3-pale-green w3-margin-bottom">SELL AIRTIME</button>
    </form>  
    
    <br />
    
    
  
    
    	<div class="w3-container" id = 'history'>
<h1 class="w3-xxlarge w3-text-pink" style="text-align:center"><b>Sales History.</b></h1><br />	

	


<div style="overflow-x:auto;">
<table id="myTable" class="w3-table-all">
<tr class="w3-blue w3-hover-purple">


	<td>
	<font face="Arial, Helvetica, sans-serif">Order Date</font>
	</td>
	
	<td>
	<font face="Arial, Helvetica, sans-serif">Network</font>
	</td>
        
        <td>
	<font face="Arial, Helvetica, sans-serif">Phonenumber</font>
	</td>
        
        <td>
	<font face="Arial, Helvetica, sans-serif">Previous</font>
	</td>
	
	<td>
	<font face="Arial, Helvetica, sans-serif">Price</font>
	</td>
	
	<td>
	<font face="Arial, Helvetica, sans-serif">Current</font>
	</td>

	
	<td>
	<font face="Arial, Helvetica, sans-serif">Delivery Date</font>
	</td>
	<td>
	<font face="Arial, Helvetica, sans-serif">Status</font>
	</td>
	

	
</tr>

				
	
				
<tr class="w3-hover-indigo">
    <?php $sql = "SELECT * FROM `airtime_history` WHERE username= '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
   $status= $row['status'];

echo
	("<td><font face='Arial, Helvetica, sans-serif'>" . ($row['sale_date']). "</font></td>
	<td><font face='Arial, Helvetica, sans-serif'>" . ($row['network'])." ".  "</font>	</td>
        <td><font face='Arial, Helvetica, sans-serif'>" . ($row['phonenumber']). "</font></td>
		<td>	<font face='Arial, Helvetica, sans-serif'>". ($row['previous']). "</font></td>
	<td>	<font face='Arial, Helvetica, sans-serif'>" .($row['amount']). "</font>	</td>
	<td>	<font face='Arial, Helvetica, sans-serif'>". ($row['current']). "</font>	</td>".
        "<td>	<font face='Arial, Helvetica, sans-serif'>". ($row['del_date']). "</font>	</td>".
	"<td id=".$status.">	<font face='Arial, Helvetica, sans-serif'>" .($row['status'])
        . "</font>	</td>
	
</tr>");

	
 }
} else {
    echo "";
} ?>
</table>
		</div></div></div>
                
                <!-- //tasks -->
		
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>&copy <?php echo (date("Y")); ?> . All rights reserved | Design by <a href="http://ezekoconcept.dx.am">Ezekoconcept</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
        <script>

  $( function() {
    $("#content" ).accordion({icons:{"header": "ui-icon-plus", "activeHeader": "ui-icon-minus"},
    	collapsible:true, active: false
    });
  } );
</script>

  <script type="text/javascript">
function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);	
	s2.innerHTML = "";
	if (s1.value == "MTN"){
		var optionArray = ["|Select",   
		"450|MTN 500MB = #450", 
		                            "750|MTN 1GB = #750",
		                            "1300|Mtn 2gb = #1300", 
                                            "2050|Mtn 3gb = #2050", 
		                            "3100|Mtn 5gb = #3100", 
		                            
		                            ];
		                            
		                            
		                            
	} else if (s1.value == "ETISALAT"){
		var optionArray = ["|Select", "400|9MOBILE 500MB = #400", "700|9MOBILE 1gb = #700", "1050|9MOBILE 1.5gb = #1,050"
							, "1300|9MOBILE 2gb = #1,300", "2000|9MOBILE 3gb = #2,000", "3200|9MOBILE 5gb = #3,200", 	
							"7100|9MOBILE 11.5gb = #7,100", "9000|9MOBILE 15GB = #9,000", "16100|9MOBILE 27.5GB = #16,100"];
	} else if (s1.value == "GLO"){
	
		var optionArray = ["|Select","950|GLO 1.6GB or 2GB = #950", "1900|GLO 3.65GB or 4.5GB = #1900", "2350|GLO 5.75GB or 7.2GB = #2,350", "2750|GLO 7GB or 8.25GB = #2,750",
							"3650|GLO 10GB or 12.5GB = #3,650", "4550|GLO 12.5GB or 15.6GB = #4,550", "7100|GLO 20GB or 25GB = #7,100"];
	} else if (s1.value == "AIRTEL"){
		var optionArray = ["|Select","1000|AIRTEL 1.5GB = #1000", "1950|AIRTEL 3.5GB = #1,950",
							 "3000|AIRTEL 5.5GB = #3,000"];
	} 
        
        for (var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}

</script>

</body>
</html>
