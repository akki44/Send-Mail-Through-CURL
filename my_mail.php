<?php
$to = "akshay.pixlrit@gmail.com";
$from = "info@webandappdevelopers.com";
$message = urlencode("One Time Password Has Been Genrated");
$route = 4;
//Prepare you post parameters
$postData = array(
    'to' => $to,
    'from' => $from,
    'message' => $message,
    'code' => '2587'
);
$url="http://webandappdevelopers.com/Suit_New_wp/mail_script.php";
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "$url",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $postData,
    CURLOPT_HTTPHEADER => array(
        "authkey: 123456",
        "content-type: multipart/form-data"
    ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
?>