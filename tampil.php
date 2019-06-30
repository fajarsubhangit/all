<?php
$link = mysqli_connect("localhost","root","4dm1n242","test1");
$query  = "SELECT * FROM Artikel WHERE id =1 ";
$result = mysqli_query($link,$query);

$array = mysqli_fetch_assoc($result);

$encode = json_encode($array);
echo json_last_error_msg();
echo "<p>ARRAY</p>";
echo "<pre>";print_r($array);echo "</pre>";
echo "<hr>";
echo "JSON";
echo "<pre>";
echo $encode;
echo "</pre>";

 ?>
