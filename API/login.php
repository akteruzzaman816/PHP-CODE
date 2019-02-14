<?php

 require "connection.php";


   $user_email=$_GET["email"];
   $user_password= $_GET["password"];

 $query="SELECT * FROM teachers WHERE teacher_email ='$user_email' AND teacher_password ='$user_password' ";

 $result =mysqli_query($con,$query);

if (mysqli_num_rows($result) > 0 ) {


   $row =mysqli_fetch_assoc($result);
   $user_name = $row['teacher_name'];
   $teacher_code=$row['teacher_code'];
   $status ="ok";

   echo json_encode(array("response"=> $status,"name"=>$user_name,"code"=>$teacher_code));

}
else {
   $status="failed to load";
   echo json_encode(array("response"=>$status));
}


mysqli_close($con);

 ?>
