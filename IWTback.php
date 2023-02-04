<?php 
   $name = $_POST['username'];
	echo"<br>";
   $aadhar = $_POST['Voter ID'];
   echo"<br>";
   $age = $_POST['userage'];
	echo"<br>";
   $party = $_POST['Vote'];
	echo"<br>";
   $partyid = $_POST['ID'];
  

  $con =mysqli_connect('localhost','root','','insertdb1');


  $query = "INSERT INTO `userdata`('V_Name`, `Aadhar_No`,'Age','Party','Party_ID') VALUES ('$name','$aadhar','$age','$party','$partyid')";

 $run =mysqli_query($con,$query);


 if($run == TRUE)
   echo "Data insert successfully";
  else
    echo "Error";


?>
