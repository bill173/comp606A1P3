
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
     
   
    <link rel="stylesheet" href="css/hearder.css" />
    
    <title>MassageTech</title>

   

</head>

<body>
    

<?php
include("header.php");

?>





<div class="bd">
    <div class="cd">
        <p class="word" style="font-size:50px;color:white;">
        Cancellation Policy

        </p>
        <p class="policy">
        You have booked successfully.If you want to cancel the booking,click the 'cancel 'button.
        Your cancellation must be within 24 hours since when you finished the booking.Once you cancel with
        24 hours leading up,you need to chanrge 5 dollars late cancellation fee.
        </p>
        <form action="cancel_act.php"  class="content1" method="post">
        <input type="text" name="email" placeholder="email" style="width:180px;height:30px">

        
        <input type="submit" class="button" value="Cancel Now">
       

        </form>
        
    </div>
    

</div>



 


 <?php
include("footer.php");
?>




</body>

</html>