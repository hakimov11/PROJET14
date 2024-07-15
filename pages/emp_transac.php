<?php
include'../includes/connection.php';

?>
            <?php
              $fname = $_POST['firstname'];
              $lname = $_POST['lastname'];
              $gen = $_POST['gender'];
              $RIB = $_POST['RIB'];
              $phone = $_POST['phonenumber'];
              $jobb = $_POST['jobs'];
              $hdate = $_POST['hireddate'];
              $prov = $_POST['province'];
              $cit = $_POST['city'];
              
              mysqli_query($db,"INSERT INTO location
                              (LOCATION_ID, PROVINCE, CITY)
                              VALUES (Null,'$prov','$cit')");
              mysqli_query($db,"INSERT INTO employee
                              (EMPLOYEE_ID, FIRST_NAME, LAST_NAME,GENDER, RIB, PHONE_NUMBER, JOB_ID, HIRED_DATE, LOCATION_ID)
                              VALUES (Null,'{$fname}','{$lname}','{$gen}','{$rib}','{$phone}','{$jobb}','{$hdate}',(SELECT MAX(LOCATION_ID) FROM location))");
              header('location:employee.php');
            ?>