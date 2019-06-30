<?php
$link = mysqli_connect("localhost","root","4dm1n242","test1");
mysqli_set_charset($link,"UTF-8");
$query = "SELECT * FROM belajar1";
$result = mysqli_query($link,$query);

while($data=mysqli_fetch_assoc($result)) {
  $json["site_options"]["option"] = $data["options"];
}

$database = array(
  "host" => "localhost",
  "user" => [
      "admin" => "admin242",
      "staff" => "staff242"
    ],
  "password" => false,
  "db" => "test"
);

echo "<pre>";
print_r($database);
echo "</pre>";

echo "<hr>";
echo "<br>";

$encode = json_encode($database,JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
echo "<pre>";
echo $encode;
echo "</pre>";
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

   </body>
   <script>
    
   </script>
 </html>
