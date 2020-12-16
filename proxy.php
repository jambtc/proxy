<?php
include ('proxyCurl.php');

$payload = (array) json_decode($_POST['data']);
$url = $_GET['url'];

$web = new proxyCurl;

$result = $web->getUrl($url,$url,$payload,'POST');
echo $result;
