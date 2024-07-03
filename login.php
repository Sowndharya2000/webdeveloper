<?php
$username=filter_input(INPUT_POST,'username');
$email=filter_input(INPUT_POST,'email');
$password=filter_input(INPUT_POST,'password');
$cpassword=filter_input(INPUT_POST,'cpassword');
if(!empty($username)){
if(!empty($email)){
 if(!empty($password)){
 if(!empty($cpassword)){
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="venkat";
//create connection
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
if (mysqli_connect_error()){
    die('connect Error('.mysqli_connect_errno().')'
    .mysqli_connect_error());

}
else{
    $sql="INSERT INTO registered (username,email,password,cpassword)
    values('$username','$email','$password','$cpassword')";
    if($conn->query($sql)){
        echo "New record is inserted successfully";
    }
}
$conn->close();
 }
}
}
}







?>