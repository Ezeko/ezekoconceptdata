<?php include 'log_validate.php'; ?>
<!DOCTYPE html>
<head>
<title>Admin's Airtime Update | Ezekoconcept</title>
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
.input-container {
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}
.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}
</style>
</head>
<?php if ($username!==$manager){echo "<script>alert('You cannot view this page.'); window.location.replace('login.php');</script>";}?>
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
                    <a href="credit.php" class="">
                        <i class="fa fa-laptop"></i>
                        <span>Credit User</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="debit_user.php">
                        <i class="fa fa-th"></i>
                        <span>Debit User</span>
                    </a>
                
                </li>
                <li class="sub-menu">
                    <a href="users.php">
                        <i class="fa fa-tasks"></i>
                        <span>All Users</span>
                    </a>

              
                </li>
                <!--<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>Contact </span>
                    </a>
                    <ul class="sub">
                        <li><a href="mailto:ezeko2017@gmail.com">Inbox</a></li>
                        <li ><a href="https://api.whatsapp.com/send?phone=2348188406153" >Contact us on whatsapp</a></li>
                    </ul>
                </li>-->
                     
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>Update</span>
                    </a>
                    <ul class="sub">
                        <li><a href="admin_data.php">Update Data</a></li>
			<li><a href="admin_withdraw_fund.php">Update Fund Withdrawal</a></li>
                        <!--<li><a href="#"></a></li>-->
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
					<p>Call when compulsory</p>
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
					<div class="col-md-8 market-update-left">
						<a href="sell_airtime.php"><div class="col-md-8 market-update-left">
						<h4>Sell</h4>
						<h3>Airtime</h3>
						<p>At reasonable percentage</p>
					</div></a>
					</div>
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
						<p>Cheap and Fast</p></a>
	
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>	
		<!-- //market-->
		<div class="row">
			<div class="panel-body">
				<div class="col-md-12 w3ls-graph">
					<!--agileinfo-grap-->
						<div class="agileinfo-grap">
							<div class="agileits-box">
								<header class="agileits-box-header clearfix">
									<h3>  PENDING AIRTIME SALES</h3>
                                                                        <div style="overflow-x:auto;">

<table class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-pink">
      <th>ID</th>
        <th>SALES DATE</th>
        <th>USERNAME</th>
        <th>NETWORK</th>
        <th>PHONE NUMBER</th>
        <th>PRICE</th>
        <th>AMOUNT TO PAY</th>
        <th> ACTION </th>
        
        
      </tr>
    </thead>
    <tr class="w3-hover-blue">
    <?php $sql = "SELECT * FROM `airtime_history` WHERE status= 'PENDING' limit 100";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
$ID=$row['id'];
$amnt=$row['amount'];
$usr=$row['username'];
$ntw=$row['network'];
$num=$row['phonenumber'];
$atp=(($row['amount'])*0.8);


   echo (   "<td>".  $row['id']. "</td>
      <td>".  $row['sale_date'] . "</td>
      <td>" .strtoupper($row['username'])."</td>
      <td>". $row['network'].  "</td>
      <td>". $row['phonenumber'] . "</td>
      <td>". $row['amount']. "</td>
      <td>". (($row['amount'])*0.80). "</td>
      <td>". "<a href='aprv_airtime.php?id=$ID&username=$usr&amount=$amnt&network=$ntw&number=$num&amountToPay=$atp'><button class='w3-green'>APPROVE</button></a>&nbsp;&nbsp;<a href='cancel_airtime.php?id=$ID'><button class='w3-red'> CANCEL</button></td>
      
    </tr>");
    }
} ?>
</table>


</div>
<strong style="width:50px;"><hr ></strong>

										<div class="toolbar">
											
											
										</div>
								</header>
  
                                                                
                                                                
								<div class="agileits-box-body clearfix">
									<div id="hero-area"></div>
								</div>
							</div>
						</div>
	<!--//agileinfo-grap-->


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

</body>
</html>
