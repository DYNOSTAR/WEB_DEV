<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $Name = $_POST["Name"];
    $DOB = $_POST["DOB"];
    $address = $_POST["address"];
    $age = $_POST["age"];
    $parent_guardian = $_POST["parent_guardian"];
    $Guardian_phone = $_POST["Guardian_phone"];
    $Guardian_Address = $_POST["Guardian Address"];
    $Guardian_ID_No = $_POST["Guardian_ID_No"];
    $religion = $_POST["religion"];
    $gender = $_POST["gender"];

    
    echo "<h2>Form submitted successfully</h2>";
    echo "<p>Name: $Name</p>";
    echo "<p>D_O_B: $D_O_B</p>";
    echo "<p>address: $address</p>";
    echo "<p>age: $age</p>";
    echo "<p>parent_guardian: $parent_guardian</p>";
    echo "<p>Guardian_phone: $Guardian_phone</p>";
    echo "<p>Guardian_address: $Guardian_address</p>";
    echo "<p>Guardian_ID_No: $Guardian_ID_No</p>";
    echo "<p>religion: $religion</p>";
    echo "<p>gender: $gender</p>";
}
$con=new mysqli('localhost','root','','Registration');
if($con){
    $sql="insert into 'register'(Name,DOB,address,age,parent_guardian,guardian_phone,guardian_address,guardian_ID_No,religion,gender)values('$Name','$DOB','$address','$age','$parent_guardian','$guardian_phone','$guardian_address','$guardian_ID_No','$religion','$gender')";
    $result=mysqli_query($con,$sql);
        if($result){
            echo "data inserted successfully";
        }else{
            die(mysqli_error($con));
        }

    }else{
        die(mysqli_error($con));
    }
?>