<?php
require __DIR__ . '/db.php';
$db = DB();
$InsertSql = "INSERT INTO user_tbl(email,password) VALUE
('".@$_POST['email']."','".md5(@$_POST['password'])."')";
$query = mysqli_query($db,$InsertSql);
mysqli_close($db);
?>

<?php
header("location: ./login.html");

?>