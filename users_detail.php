<?php
If(isset ($GET['id'])){
$id = $GET['id'];
$sql = "SELECT*FROM users WHERE id = '$id'";
//Người dùng sửa trên form

Echo $sql;}
