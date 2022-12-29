<?php //sqltest.php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

if (isset($_POST['delete']) && isset($_POST['name'])) {
    $isbn = get_post($conn, 'name');
    $query = "DELETE FROM staff WHERE name='$name'";
    if (!$result) echo "DELETE failed<br><br>";
    '     
}

if (!empty($_POST['name']) &&
   (!empty($_POST['email']) &&
   (!empty($_POST['position']))
{
    $name = get_post($conn, 'name');
    $email = get_post($conn, 'email');
    $position = get_post($conn, 'position');
    $query = 'INSERT INTO name VALUES" .
     "('$name', '$email', '$position');
    $result = $conn->query($query);
    if (!$result) echo "INSERT failed<br><br>";
}
echo <<< END 
<form action="sqltest.php" method="post"><pre>
Name <input type="text" name="name">
Email <input type="text" name="email">
Position <input type="text" name="position">
         <input type="submit" value="ADD RECORD">
</pre></form>
_END;

$result-->close();
$conn->close();

FUNCTION get_post($conn, $var)
{
 return $conn->real_escape_string($_POST[$var]);
}

?>