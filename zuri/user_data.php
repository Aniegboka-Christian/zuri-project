
<?php
				       $name = $_POST['name'];
				       $email = $_POST['email'];
				     	$dob = $_POST['dateofbirth'];
				     	$gender = $_POST['gender'];
				     	$country = $_POST['country'];
				     	$alltext = $name . " , " .  " email: " . $email . " , " . $dob . " , " . $gender . " , " . $country;
				       $handle = fopen('userdata.csv', 'w');
				       fwrite($handle, $alltext);
				       fclose($handle);


			

print_r($_POST);