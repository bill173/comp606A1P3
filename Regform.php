<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
<style type="text/css">
.style1{
    border-width:0;
    border:solid gray 10px;
    width:73%;
    border-radius:5px;
    margin:5px auto;
    background:blue;
    color:yellow;
    text-align:centre;
    font-size:50px;
}
.style2{
    border-width:0;
    border:solid gray 10px;
    width:75%;
    border-radius:5px;
    margin:5px auto;
    background:white;
}
body {background-color: powderblue;}/*set the background color*/
</style>
</head>
<b><center class="style1">Muscleworx Booking System</b></center>
<body>
<form action="Onlinebooking.php" method = "post">
<table class = "style2" width = "550px">
<tr>
<td>Firstname: </td>
<td><input type="text" name="firstname" placeholder="Firstname" required ></td>
<td>Motivation: </td>
<td><input type="text" name="motivation" required ></td>
</tr>

<tr>
<td>Surname: </td>
<td><input type="text" name="surname" placeholder="Surname" required ></td>
<td>Type of Massage: </td>
<td><input type="text" name="typeofmassage" required ></td>
</tr>

<tr>
<td>Gender: </td>
<td><input type="radio" name="gender" value="m" required>Male
<input type="radio" name="gender" value="f" required >Female
</td>
<td>Date of Birth: </td>
<td><input type="text" name="dateofbirth" placeholder="dd/mm/yyyy" ></td>
</tr>

<tr>
<td>Phone Number: </td>
<td><input type="text" name="phonenumber" required ></td>
<td>E-mail address: </td>
<td><input type="text" name="email" required></td>
</tr>


<tr>
<td>Address: </td>
<td><input type="text" name="address" ></td>
<td>Expected Date:</td>
<td><input type="text" name="expecteddate" placeholder="dd/mm/yyyy" ></td>
</tr>

<tr>
<td>City: </td>
<td><input type="text" name="city" ></td>
<td>Timeslot: </td>
<td><input type="radio" name="timeslot" value="8amto10am" required>8am-10am
<input type="radio" name="timeslot" value="10amto12am" required >10am-12am
<input type="radio" name="timeslot" value="2pmto4pm" required >2pm-4pm
<input type="radio" name="timeslot" value="4pmto6pm" required >4pm-6pm
</td>
</tr>

<tr>
<td>&nbsp</td>
<td><input type="submit" value="Reserve" ></td>
<td><input type="reset" value="Reset" ></td>
</tr>



</table>
</form>

<hr size = 10 color = red width = 75%>
<hr size = 10 color = silver width = 75%>



</body>
</html>