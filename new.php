<?php
$con = mysqli_connect("localhost","root","","email");
$email = isset($_POST['email']) ? $_POST['email'] : false;
$query_sub = " INSERT INTO `subscription` (`email`) values ('$email')";

if(preg_match("/[a-z0-9]{1,}@/i",$email)){
    $query_result = mysqli_query($con,$query_sub);
    echo "<script>
    alert('Валидация прошла успешна');
    header('Location:index.php');
    </script>";
}else{
    echo "<script>
    alert('Валидация не пройдена');
        header('Location:index.php');
    </script>";
}
 var_dump($email);
?>