<?php
$fname = $_POST['fname'];
$number = $_POST['number'];
$email = $_POST['email'];
$quary = $_POST['quary'];

$conn = new mysqli('localhost','root','','amr_tilotoma');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into quary_1(name,number,email,quary)
    values(?,?,?,?)");
    $stmt->bind_param("siss",$fname,$number,$email,$quary);
    $stmt->execute();
echo "your massage submited successfully.";
    $stmt->close();
    $conn->close();
}
?>