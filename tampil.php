<?php
$load = simplexml_load_file("file.xml");

if(!$load) {
  echo "file tidak ada";
}
else {
  echo "<h1>Data Buku</h1>";
  foreach($load as $key => $value) {
      echo "nama :". $value->id ."<br>";
      echo "string :". $value->author."<br>";
      echo "title :". $value->title."<br>";
      echo "genre :".$value->genre."<br>";
      echo "price :".$value->price."<br>";
      echo "publish_date :".$value->publish_date."<br>";
      echo "description :".$value->description."<br>";
      echo "<hr>";
  }
}
 ?>
