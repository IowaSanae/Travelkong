<?php
$mysqli = mysqli_connect("localhost", "root", "", "travelkong_db");

if ($mysqli -> connect_errno) {
  echo ("Không thể kết nối đến SQL vì lỗi: " . $mysqli -> connect_error);
  exit();
}
?>