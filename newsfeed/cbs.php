<?php
$url = 'https://www.cbsnews.com/latest/rss/main';

header('Content-Type:text/json');
$myXMLData =  file_get_contents($url);


$xml = simplexml_load_string($myXMLData) or die("Error: Cannot create object");
//print_r($xml);

$json = json_encode($xml);
echo $json;

?>



