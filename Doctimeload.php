<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "doctorappointment");
if (!($con)) {
    echo "Failed connection:" . mysqli_connect_error();
}

$sql = "select * from doctortiming where doctorid='$_GET[docid]'";
$qsql = mysqli_query($con, $sql);
echo "<select name='timing' id='timing' ><option value=''>View timing</option>";
while ($qsql1 = mysqli_fetch_array($qsql)) {
    echo "<option value='$qsql1[timingid]'>" . date("H:i A", strtotime($qsql1['starttime'])) . "&nbsp&nbspTo&nbsp&nbsp" . date("H:i A", strtotime($qsql1['endtime'])) . "</option>";
}

echo "</select>";
