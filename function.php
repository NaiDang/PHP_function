<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tổng</title>
</head>
<body>
     
     <!-- <?php

    function add_number(){
        echo 1+2;
    }
    add_number();

    function display_name($name){
        echo "Hello".$name;
    }
    display_name("Martin Luther King");

    function kilomiters_to_miles($kilomiters=0){
        $miles_scale=0.62;
        return $kilomiters*$miles_scale;
    }
    echo kilomiters_to_miles(100) ;
    ?>  -->
    
<style>
    .form{
        text-align:center;
        width: 300px;
        height: 130px;
        background:pink;
        margin-left:auto;
        margin-right:auto;
    }
    input{
    width: 150px;
    height: 30px;
    
    }
    .button{
        width: 50px;
        height: 30px;
    }
</style>

<?php
$so1 = $_POST["sonhat"];
$so2 = $_POST["sohai"];

function tinh($so1,$so2){
    $tong=$so1+$so2;
    return $tong;
}

?>
   <form class="form" action="" method="post">
    Số thứ nhất
        <input type="text" name="sonhat"><br>
    Số thứ hai
        <input type="text" name="sohai"><br>
        
    <?php    
        echo "Tổng:".tinh($_POST["sonhat"],$_POST["sohai"]);
    ?>
    <input class="button" type="submit" name="sm" value="Tinh">
    <input class="button" type="cancel" name="dl" value="Xóa">
   </form>
   
</body>
</html>