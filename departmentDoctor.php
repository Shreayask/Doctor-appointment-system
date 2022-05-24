<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "doctorappointment");
if (!($con)) {
    echo "Failed connection:" . mysqli_connect_error();
}

$sql = "select * from doctor where departmentid='$_GET[deptid]'";
$qsql = mysqli_query($con, $sql);
echo "<select name='doct' id='doct'  onchange='loadtime(this.value)'><option value=''>Select doctor</option>";
while ($qsql1 = mysqli_fetch_array($qsql)) {
    echo "<option value='$qsql1[doctorid]'>$qsql1[doctorname]</option>";
}

echo "</select>";
