<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "bookshopseller"; 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password,$type)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."' AND type='". $type."'");
 return $result;
 }

 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
    






function update($conn, $table, $username, $email, $contact, $gender, $nid, $type, $dob){
    
   
    
    $sql = "UPDATE $table SET email='$email',phoneno='$contact',gender='$gender',nid='$nid',type='$type',dob='$dob' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }
    return $result;
    
    
    
}



function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>

