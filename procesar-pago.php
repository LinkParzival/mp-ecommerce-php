<?php
session_start();
if(isset($_REQUEST["back_url"])){
	$id = $_REQUEST["payment_id"];
	$json = file_get_contents("https://api.mercadopago.com/v1/payments/{$id}?access_token=APP_USR-6588866596068053-041607-428a530760073a99a1f2d19b0812a5b6-491494389");
	$obj = json_decode($json);
	if( isset($_SESSION["transfer"])){
		unset($_SESSION["transfer"]);
	}
	$_SESSION["transfer"]["transaction_amount"] = $obj->transaction_amount;
	$_SESSION["transfer"]["payment_id"] = $id;

	header('Location: '.$_REQUEST["back_url"]);
	die();
}
echo "REQUEST:";
echo "<pre>"; var_dump($_POST); echo "</pre>";

?>