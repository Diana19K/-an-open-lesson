<?php
$con = mysqli_connect("localhost","root","","email");
$email = isset($_GET["email"]) ? $_GET["email"] : false;
$check = "";
if (!empty($email)) {
    if(preg_match("/[a-z0-9]{1,}@/i",$email)){
            $query_sub = " INSERT INTO `subscription` (`email`) values ('$email')";
            var_dump($query_sub);
            $query_result  = mysqli_query($con,$query_sub);
            
            $check = 1;
    }else{
        $check = 2;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form  action="#test" method = "GET" id ="test">
            <input  class="input_email" type="text" placeholder="Enter your email..." name="email">
            <input class="input_submit" type="submit" value="Continue">
        </form>
        <?php
            if($check == 1){
             echo "<p class='check_true'>Валидность прошла успешна </p>";
            } else if ($check == 2) {
                echo "<p class='check_false'>Данная почта указана неверно! провевьте правильность почты </p>";
            }
            ?>
</body>
</html>
