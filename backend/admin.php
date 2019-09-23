
<?php
header("content-type:text/html;charset=utf-8");
//include("includes/init.php");
//
//$cid=!empty($_GET['cid'])?$_GET['cid']:"";
//
//$cname=$cid==""?"":"-".$obj->get_classname("class","id=$cid","classname");
//
//$rt=$obj->get_classname("config","id=1","webname");
?>
<html>

<head>
    <meta charset="utf-8" />
     
   
    <link rel="stylesheet" href="css/admin.css" />
    
    <title>Admin</title>

   

</head>

<body>
    

<div class="header">
   <h1>Welcome to Booking Adminstratuion System</h1>
</div>

<div class="left">
    <strong>Adminastration List</strong>
        <ul>
			<li>
				<a href="customerInfo.php" target="right">Customers Information</a>
			</li>
			<li>
				<a href="bookingInfo.php" target="right">Booking Information</a>
            </li>
            <li>
				<a href="cate.php" target="right">User Adminstration</a>
			</li>
			<li>
				<a href="t_add.php" target="right">Setting</a>
			</li>
		</ul>
</div>
<div class="admin">
	<iframe scrolling="auto" rameborder="0" src="customerInfo.php" name="right" width="100%" height="100%"></iframe>
</div>


</body>

</html>