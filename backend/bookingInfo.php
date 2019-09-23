<?php
header("content-type:text/html;charset=utf-8");
include("dbconnect.php");

$sql="select * from customer"; 
//echo $sql;
//exit;
$result=mysqli_query($link,$sql);


$arr=array();
while($row=mysqli_fetch_assoc($result)){
	$arr[]=$row;
}
?>
<html>

<head>
    <meta charset="utf-8" />
     
   
    <link rel="stylesheet" href="css/admin.css" />
    
    <title>Admin</title>

   

</head>
    <body>
     <div class="div_tb1">
         <table class="tb1" cellspacing=0px; cellpadding=0px;>
            <tr>
                <th>Id</th>
                <th>Name</th>
              
                <th>Date</th>
                <th>Time</th>
                <th>BookingTime</th>
                <th>Status</th>
                <th>CanceledTime</th>
                <th>MoreThan24Hours</th>
            </tr>
            <?php foreach($arr as $v){ ?>
            <tr>
              <td><?php  echo $v['id'] ?></td>
              <td><?php  echo $v['name'] ?></td>
            
              <td><?php  echo $v['date'] ?></td>
              <td><?php  echo $v['time'] ?></td>
              <td><?php  echo date('Y-m-d',$v['bookingtime']) ?></td>
              <td><?php  echo $v['status']  ?></td>
              <td><?php  echo date('Y-m-d',$v['canceledTime'])  ?></td>
              <td><?php  echo $v['lessThan24Hours']  ?></td>
            </tr>
            <?php  } ?>
        </table>
     </div>
        

    </body>
</html>