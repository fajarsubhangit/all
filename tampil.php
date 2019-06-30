<?php
  $json = '{"site_option":
		{"site_title":"Jagowebdev"
		  ,"site_description":"Komunitas Jagowebdev (JWD) akan membantu anda menjadi \"Jago\" dibidang Web Development"
		  ,"site_url":"https://jagowebdev.com"
		  ,"themes":"jwd"
		}
	  ,"site_db":
		{"host":"localhoswadat"wawad
		  ,"user":"root"
		  ,"pass":"defult"
		}
	}';

  $decode1 = json_decode($json,true);
echo "<pre>";
print_r($decode1);
echo "</pre>";

echo "<hr>";

  $decode2 = json_decode($json,true);

if(json_last_error_msg() === "No error") {
  echo "<pre>";
  print_r($decode2);
  echo "</pre>";
}
else {
  echo json_last_error_msg();
}


 ?>
