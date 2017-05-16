

<?php 

$recaptcha = $_POST["g-recaptcha-response"]);




if($recaptcha!=''){
$secret = "6LdVLB4UAAAAAPhg1KA0_RhWyXZuBV5QOxGrgcwD";
$ip = $_SERVER["REMOTE_ADDR"];
$var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
$array = json_decode($var,TRUE);

if ($array["success"]){

	echo "soy humano";

}else{
	echo "soy un robot";

}
		

}


?>