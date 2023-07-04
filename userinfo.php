<?php
$con = mysqli_connect('localhost', 'root');
if($con) {
echo "sent successfully";
}else{
echo "Not sent";
}
mysqli_select_db($con, 'mypagedata');
$user = $_POST[user];
echo $user;
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];
$query = " insert into mypagedata (user, email, mobile, comment)
values ("$user", "$email", "$mobile", "$comments")";
echo "$query";
mysqli_query($con, $query);
header('loacation: index.php');
?>