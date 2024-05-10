<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$showAlert=false;
	error_reporting(0);
	include 'te.php';
	$na=$_POST["na"];
    $st=$_POST["st"];
	$phone=$_POST["phone"];
	$pass=$_POST["pass"];
	$sql="INSERT INTO `data` (`na`, `st`, `phone`, `pass`, `dt`) VALUES ('$na', '$st', '$phone', '$pass', current_timestamp());";
	$result=mysqli_query($conn, $sql);
	if($result){
		$showAlert= true;
		// header("location: Login.php");
	}
}
?>
<!DOCTYPE html>
<html>

<head>
     <style>
          body {
               background-image: url(img.jpg);
          }

          table {
               background-color: rgb(43, 23, 77);
               padding: 30px;
               border: 4mm ridge #770a0a;
               color: lightgrey;
               font-size: 25px;
          }

          table td {
               font-size: 20px;
               padding: 15px;
          }
     </style>
</head>

<body>
     <center>
          <form action="te.php" method="post">
          <table>
               <BR><BR><BR><BR>
               <th>
                    STUDENT REGISTRATION
                    <hr>
               </th>

               <tr>
                    <td>
                         NAME : <input type="text" name="na">
                    </td>
                    <td>
                         STUDENT_ID : <input type="text" name="st">
                    </td>
               </tr>

               <tr>
                    <td>
                         CONTACT NO. : <input type="text" name="phone">
                    </td>
                    <td>
                         PASSWORD : <input type="text" name="pass">
                    </td>


               <tr>
                    <td>
                         <button>Register</button>
                    </td>
                    <input type="SUBMIT" value="UPDATE" onclick="location.href='adminupdate.html'">
               </tr>

          </table>
     </form>
     </center>
     </form>
</body>

</html>