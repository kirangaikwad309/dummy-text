<?php
ob_start();
session_start();
require_once 'conn.php';
$myObj=array();
$Name="";
$Phone_No="";
$Address="";
$city="";
$Email="";
$dob="";

$sql = "SELECT * FROM table1";

$sql = "SELECT Name,Phone_No,Address,City,Email,DOB FROM textdemo";
 //$result = mysqli_query($conn, $sql);
 $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "<br> name: ". $row["name"]. " " . $row["commitee_name"] . "<br>";
        $singlerow=array('Name' => $row["Name"],
       'Phone_No' =>  $row["Phone_No"],'Address' => $row["Address"],'city' => $row["City"],'Email' => $row["Email"],'dob' => $row["DOB"],);
       array_push($myObj,$singlerow);
    }
    $myJSON = json_encode($myObj);
    echo $myJSON;
} else {
    echo "0 results";
}
 
 $conn->close();
 ?>
 <?php ob_end_flush(); ?>
