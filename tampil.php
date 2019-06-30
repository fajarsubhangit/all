<?php
$file_json = file_get_contents("data.json");

$decode = json_decode($file_json,true);

echo "<pre>";
print_r($decode);
echo "</pre>";

foreach($decode as $key) {
  echo $key[0]["id"];
}
 ?>
