<?php
$json = '{"title":"Memahami JSON Pada PHP - Part II}';


$data_mahasiswa_json = json_decode($json);
$error = json_last_error();
switch($error) {
  case 1 : echo "Kedalaman tumpukan maksimum telah terlampaui";break;
  case 2 : echo "JSON tidak valid atau salah";break;
  case 3 : echo "Control character error, possibly incorrectly encoded";break;
  case 4 : echo "Kode Error";break;
  case 5 : echo "Karakter UTF-8 salah bentuk, mungkin disandikan salah";break;
  default : echo "Tidak error";break;
}

echo "<pre>";
echo "<p><strong>Dalam Bentuk Array</strong></p>";
print_r($data_mahasiswa_json);
echo "</pre>";




 ?>
