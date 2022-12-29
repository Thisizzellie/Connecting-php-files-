<?php
//getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $position= $_POST['position'];
    }
    // database detailed
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Staff";

//creating a connection
$con = mysqli_connect($servername, $username, $password, $dbname);

//to ensure that the connection is made
if (!$con)
{
    die("Connection failed: " . mysqli_connect_error()); 
}
// using sql to create a data entry query
$sql = "INSERT INTO `Staff`.`Staff` (`id` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(50) NOT NULL , `Email` VARCHAR(40) NOT NULL , `Position` VARCHAR(50)";

?>