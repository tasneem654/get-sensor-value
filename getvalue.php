<?php
 $sensorValue = $_GET['sensor_value'];

 //database connection
 $conn = new mysqli ('localhost','root','','sensorValue');
 if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);

 }else
 $stmt = $conn->prepare("insert(sensorvalue)
 value(?)");
 $stmt->bind_param("i",$sensorvalue);
 $stmt->execute();
 echo "sensor value sent successfully..";
 $stmt->close();
 $conn->close();
?>