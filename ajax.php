<?php
include 'xcon.php';
// Get the user id 
$user_id = $_REQUEST['user_id'];
  
// Database connection
  
if ($user_id !== "") {
      
    // Get corresponding first name and 
    // last name for that user id    
    $query = mysqli_query($xkon, "SELECT nama_lengkap FROM mahasiswa WHERE nim='$user_id'");
  
    $row = mysqli_fetch_array($query);
  
    // Get the first name
    $nama_lengkap = $row["nama_lengkap"];
  
}
  
// Store it in a array
$result = array("$nama_lengkap");
  
// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>