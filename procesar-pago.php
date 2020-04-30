<?php
if(isset($_REQUEST["back_url"]) && false){
	$url = strtok($_REQUEST["back_url"], "?");
	header('Location: '.$url);
	die();
}
echo "REQUEST:";
echo "<pre>"; var_dump($_POST); echo "</pre>";
echo "url:";
echo "<pre>"; var_dump($url); echo "</pre>";

$id = $_REQUEST["payment_id"];
$json = file_get_contents("https://api.mercadopago.com/v1/payments/{$id}?access_token=APP_USR-6588866596068053-041607-428a530760073a99a1f2d19b0812a5b6-491494389");
$obj = json_decode($json);

echo "JSON:";
echo "<pre>"; var_dump($obj); echo "</pre>";

?>