<?php
include "connection.php";
?>
<html>
<head>
<title>Registration form</title>
<body>
<form method="POST">
<label>FIRST NAME :</label>
<input type="text"name="name">
<br>
<label>phone number</label>
<br>
<input type="text" name="phnno"pattern="[6789][0-9]{9}"maxlength="10">
<br>
<label>ADDRESS</label>
<br>
<textarea name="address"></textarea>
<br>
<label>mail</label>
<br>
<input type="email" name="mail">
<br>
<input type="submit" value="register" name="submit">
<br>
</form>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phnno=$_POST['phnno'];
    $mail=$_POST['mail'];
    $sddress=$_POST['address'];
    $query="insert into  registration(`name`,`mail`,`phnno`,`address`)values('$name','$phnno','$mail','$address')";
    echo $query;
    $result=mysqli_query($con,$query);
    if($result){
        echo"<script>alert('user registred')</script>";
    }
    else{
        echo"<script>alert('user not registred')</script>";
    }
}
?>
</body>
</head>
</html>









