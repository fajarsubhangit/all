<?php
  $xml = simplexml_load_file("file.xml");


  if(!$xml) {
    die("tidak ditemukan");
  }
  else {
    foreach($xml as $key) {
      echo "ID: " . $key->id . "<br>";
      echo "Author: ". $key->author."<br>";
      echo "Genre:".$key->genre."<br>";
      echo "Price:".$key->price."<br>";
      echo "publish_date:".$key->publish_date."<br>";
      echo "description:".$key->description.'<hr>';
    }
  }

 ?>
