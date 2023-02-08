<?php
$conn = mysqli_connect('17.0.0.1', 'root', '', 'chat');
if (!$conn) {
  echo 'Database not connected' . mysqli_connect_error();
}
