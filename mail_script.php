<?php
if( $_POST['code']==2587){;

$to = $_POST['to'];
$subject = $_POST['from'];
$txt = $_POST['message'];
$headers = "From:" .$_POST['from'];

echo mail($to,$subject,$txt,$headers);
}
else {
	echo "Not authenticated";	
}
?>