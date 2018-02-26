<html>
    <head>
     <title>dummy text demo</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
     <link rel="stylesheet" href="css/main.css">
     <script src="js/dob.js"></script>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <style>
table, th, td {
    border: 1px solid black;
}
</style>
    </head>
    <body>
    <!-- database connection -->
 <?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dummy";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// echo"connected";
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 if (isset($_POST['add'])) 
    {
// add data
$name_a="";
$phone="";
$Add="";
$city="";
$email="";
$dob="";    
  $name_a=$_POST['Name'];
  $phone=$_POST['Phone_No'];
  $Add=$_POST['Address'];
  $city=$_POST['City'];
  $email=$_POST['Email'];
  $dob=$_POST['DOB'];
 // prepare and bind
  $stmt = $conn->prepare("INSERT INTO textdemo (Name,Phone_No,Address,City,Email,DOB) VALUES (?, ?,?,?,?,?)");
  $stmt->bind_param("ssssss", $name_a,$phone,$Add,$city,$email,$dob);

   $result=$stmt->execute();
  //  echo "New records created successfully...";
  //  echo "-";
  //  echo "$name_a";

    $stmt->close();
    } 
   
  //  view Datababase
 
  mysqli_close($conn);
  if (isset($_post['View_Database'])) 
  {
   header("Location:view.html");
   
 }
?>

<!-- validation -->
<?php
// define variables and set to empty values
$nameErr = $emailErr = $phoneErr= "";
$name = $Email = $Phone_No = "";
$value = " (+91)9850326547";
  $cleared="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["Email"])) {
    $emailErr = "Email is required";
  } else {
   $Email = test_input($_POST["Email"]);
    // check if e-mail address is well-formed
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  

  
   if(empty($_POST["Phone_No"])){
      $phoneErr="phone-No: is required";
     }
   else{
    $Phone_No = test_input($_POST["Phone_No"]);
    // check if number is in well-formed
    $cleared = preg_replace('/^[0-9]/', '', $value);
    if (count($cleared)<10 || count($cleared)>14) {
     $phoneErr="Enter a valid Number";
  }
    }
   
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

  ?>    
  <h2 style="text-align:center;color:blue;font-family:Times New Roman, Times, serif;"><b>Customer Visit Form</b></h2>   
        <div   style="margin-left:50px; margin-top:20px; padding:50px; border: 1px solid black; margin-right:50px;"> 
        <p><span class="error">* required field.</span></p>
        <!-- <div class="container" > -->
                 <div class="row">
              <div class="col-sm-8">
                <form action="" method="post">
                   <b><input type="text" id="Name" name="Name"  placeholder=" Name: ">
                   <span class="error">* <?php echo $nameErr;?></span><br><br>
                   <input type="text" id="Phone_No" name="Phone_No" placeholder=" Phone No: ">
                   <span class="error">*<?php echo $phoneErr;?></span><br><br>
                   <input type="text" placeholder=" Date Of Birth" id="datepicker" name="DOB">
                   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                   <input type="text" id="Address" name="Address" placeholder=" Address:"><br><br>
                   <input type="text" id="City" name="City" placeholder=" City: "><br><br>
                    <input type="text" id="Email" name="Email" placeholder=" Email: ">
                    <span class="error">* <?php echo $emailErr;?></span><br><br>
                    <i><input type="submit" name="add" value="add"></i>
                    <!-- <i><input type="submit" value="Cancel"></i> -->
                  <i> <input type="reset" value="Cancel"><i>
                    <i><input type="submit" value="Message"></i>
             </div>
             <div class="col-sm-4">
                                    
                   <input type="submit" name="View_Database" value="View Database"><br><br>
                   <input type="submit"  name="Send Bulk-Message" value="Send Bulk-Message"><br><br>
                   <input type="submit"  name="Display Profile" value="Display Profile"><br><br>
                </form>
              </div>
            </div>
          </div>
        <!-- </div> -->
        
    </body>
   
    </html>
