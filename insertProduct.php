<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

</body>

</html>
<?php
session_start();
require __DIR__ . '/db.php';
$db = DB();
$productname = @$_POST['productname'];
$description = @$_POST['description'];
$date = date('Y-m-d H:i:s');
$email = $_COOKIE['email'];



if (isset($_FILES["file"]["name"])){

    $success = false;
    $oldname = $productname;
    $ext =  pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        do {
                
            $r = rand(100, 999);
            $newname = $oldname."_".$r.".$ext";	   
            $Insertsql = "INSERT INTO product_tbl(email,productname,description,images,date) VALUE ('$email','$productname','$description','$newname','$date')";
            $sql= mysqli_query($db,$Insertsql);
            mysqli_close($db);
            if(!$sql){ continue;}
            $target = "product_img/$newname";
            if(!file_exists($target)) {
            move_uploaded_file($_FILES['file']['tmp_name'], $target);
            $success = true;
            }
        } while(!$success);
        
    if($success){
        header("location: ./home.php");
    }
    else{
   header("location: ./insertProduct.php");
}
}
?>