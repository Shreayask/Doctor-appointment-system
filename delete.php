<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "doctorappointment");
if (!($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

  if (isset($_GET['delid']))
  {
    $sql ="DELETE FROM patient WHERE doctorid= '$_GET[delid]";
    $qsql=mysqli_query($con,$sql);
    if(mysqli_affected_rows($con) == 1)
    {
    echo"<script>alert('Doctor record deleted successfully..'); 
    location.href='viewdoctor.php'; </script>  ";
    }
     }
    else
    {
        echo"<script>alert('Doctor record deleted successfully..'); 
        location.href='viewdoctor.php'; </script> ";
    
    }
  
?>