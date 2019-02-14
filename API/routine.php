<?php

    require 'connection.php';
    $teacher_code=$_GET["code"];

    $query="SELECT * FROM routine WHERE teacher_code ='$teacher_code' ";

    $result =mysqli_query($con,$query);

    $json_array=array();

    while ($row =mysqli_fetch_assoc($result)) {
        $json_array['data'][]=$row;
    }
    echo json_encode($json_array);
 ?>
