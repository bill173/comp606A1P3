
<?php
header("content-type:text/html;charset=utf-8");
include("../backend/dbconnect.php");




$date = isset($_GET['date'])?$_GET['date']:"";
$name = isset($_GET['name'])?$_GET['name']:"";
$email = isset($_GET['email'])?$_GET['email']:"";
$type = isset($_GET['type'])?$_GET['type']:"";
$motivation = isset($_GET['motivation'])?$_GET['motivation']:"";
$sql="select time from customer where date = '$date'";

$result = mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);




?>
<html>

<head>
    <meta charset="utf-8" />
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="../js/test.js"></script>
    <link rel="stylesheet" href="css/hearder.css" />
    
    <title>MassageTech</title>

   

</head>
<script>
  function bur(){
    //alert("输入框失去了焦点");
   //在此可写各类登录或其他验证方法（例：登录名过长过短等等）
 
   var n = document.getElementById("name");
   var s = document.getElementById("date");
   var e = document.getElementById("email");
   var t = document.getElementById("type");
   var m = document.getElementById("motivation");
        location.href="test.php?"+"date="+s.value+"&name="+n.value+"&email="+e.value+"&type="+t.value+"&motivation="+m.value;
   
  }
  function bur2(){
    //alert("输入框失去了焦点");
   //在此可写各类登录或其他验证方法（例：登录名过长过短等等）
   var n = document.getElementById("name");
   var s = document.getElementById("date");
   var e = document.getElementById("email");
   var t = document.getElementById("type");
   var m = document.getElementById("motivation");
   
        location.href="test.php?"+"date="+s.value+"&name="+n.value+"&email="+e.value+"&type="+t.value+"&motivation="+m.value;
   
  }
  function bur1(){
    //alert("输入框失去了焦点");
   //在此可写各类登录或其他验证方法（例：登录名过长过短等等）
   var n = document.getElementById("name");
   var s = document.getElementById("date");
   var e = document.getElementById("email");
   var t = document.getElementById("type");
   var m = document.getElementById("motivation");
  
        location.href="test.php?"+"date="+s.value+"&name="+n.value+"&email="+e.value+"&type="+t.value+"&motivation="+m.value;
   
  }
  function bur3(){
    //alert("输入框失去了焦点");
   //在此可写各类登录或其他验证方法（例：登录名过长过短等等）
   var n = document.getElementById("name");
   var s = document.getElementById("date");
   var e = document.getElementById("email");
   var t = document.getElementById("type");
   var m = document.getElementById("motivation");
  
        location.href="test.php?"+"date="+s.value+"&name="+n.value+"&email="+e.value+"&type="+t.value+"&motivation="+m.value;
   
  }
  function bur4(){

    var n = document.getElementById("name");
   var s = document.getElementById("date");
   var e = document.getElementById("email");
   var t = document.getElementById("type");
   var m = document.getElementById("motivation");
  
        location.href="test.php?"+"date="+s.value+"&name="+n.value+"&email="+e.value+"&type="+t.value+"&motivation="+m.value;
   
  }
  
</script>

<body>
    

<?php
include("header.php");

?>





<div class="bd">
    <div class="fd">
        <p class="word" style="font-size:50px;color:white;">BOOK HERE</p>
        <form action="" id="registration" name="registration" class="content" method="post">
        <input type="text" name="name" id="name" placeholder="name" style="width:180px;height:30px" value="<?php echo $name ?>" onblur="bur1()">
        <input type="text" name="email" id="email" placeholder="email" style="width:180px;height:30px" value="<?php echo $email ?>" onblur="bur2()">
        <select name="type" id="type" style="width:180px;height:30px" onblur="bur3()" >
            <option value="">--massage type--</option>
            <option <?php if($type=="deep"){echo "selected";} ?> value="deep">DEEP TISSUE MASSAGE</option>
            <option <?php if($type=="sport"){echo "selected";} ?> value="sport">SPORTS MASSAGE</option>
            <option <?php if($type=="therapeutic"){echo "selected";} ?> value="therapeutic">THERAPEUTIC MASSAGE</option>
            <option <?php if($type=="relaxation"){echo "selected";} ?> value="relaxation">RELAXATION MASSAGE</option>
        </select>
        <select name="motivation" id="motivation" style="width:180px;height:30px" onblur="bur4()">
        <option value="">--motivation--</option>
            <option <?php if($motivation=="recovery"){echo "selected";} ?> value="recovery">Recovery</option>
            <option <?php if($motivation=="relaxing"){echo "selected";} ?> value="relaxing">Relaxing</option>
            <option <?php if($motivation=="secret"){echo "selected";} ?> value="secret">Secret</option>
        </select>
        <input type="date" name="date" id="date" placeholder="date" style="width:180px;height:30px" onblur="bur()" value="<?php echo $date ?>">
        <select name="time" id="timeslot" style="width:180px;height:30px">
            <option value="">--select timeslot--</option>
            <option value="10:00:00" <?php if($row['time'] == "10:00:00" ){echo "disabled";} ?> >10:00</option>
            <option value="11:00:00" <?php if($row['time'] == "11:00:00" ){echo "disabled";} ?> >11:00</option>
            <option value="13:00:00" <?php if($row['time'] == "13:00:00" ){echo "disabled";} ?> >13:00</option>
            <option value="14:00:00" <?php if($row['time'] == "14:00:00" ){echo "disabled";} ?> >14:00</option>
            <option value="15:00:00" <?php if($row['time'] == "15:00:00" ){echo "disabled";} ?> >15:00</option>
        </select>
        <input type="submit" class="button" value="Book Now">
        
       

        </form>
        
    </div>
    

</div>



 


 <?php
include("footer.php");
?>




</body>

</html>