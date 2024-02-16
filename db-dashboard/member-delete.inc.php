<?php
$conn = mysqli_connect("localhost", "root", "", "organization-db");
  
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$id = $_POST['userid'];

 $sql_check = mysqli_query($conn, "SELECT * FROM cdm_membership WHERE id='$id'");

if($sql_check->num_rows > 0){
    $sql = "DELETE FROM cdm_membership WHERE id='$id'";

    mysqli_query($conn, $sql);

    if (!$row){
        header("location:\cdm-tem\db-dashboard\cdm-members_table.php");
        exit;
    }
} 
else{
    echo "<script>alert('This person does not exist in the database ')</script>";
    // header("location: delete.php");
}
mysqli_close($conn);
?>

