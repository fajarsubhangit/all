<?php
$load = simplexml_load_file("file.xml");

if(!$load) {
  echo "file tidak ada";
}
else {
  echo "file ada";
}
 ?>
