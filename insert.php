<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("sql303.epizy.com", "epiz_31420351", "Aq15Gn1DG40Npa", "epiz_31420351_testbase");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$user = mysqli_real_escape_string($link, $_REQUEST['user']);
$pwd = mysqli_real_escape_string($link, $_REQUEST['pwd']);
 
// Attempt insert query execution
$sql = "INSERT INTO users (user, pwd) VALUES ('$user', '$pwd')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>