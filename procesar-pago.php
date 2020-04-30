<?php
if(isset($_REQUEST["back_url"])){
	header('Location: '.$_REQUEST["back_url"]);
	diee();
}
echo "POST:";
echo "<pre>"; var_dump($_POST); echo "</pre>";
echo "GET:";
echo "<pre>"; var_dump($_GET); echo "</pre>";
?>