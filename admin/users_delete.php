<?php
If(isset ($GET['User_id'])){
$id = $GET['id'];
$sql = "DELETE*FROM users WHERE id = '$id'";
//Người dùng sửa trên form

Echo $sql;}
?>