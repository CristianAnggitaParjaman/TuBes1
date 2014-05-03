<!doctype html>
<html>
<head>
<title>RSS Reader</title>
<style>
*{
	margin: 0;
}
div.item{
	text-align: left;
	width: 800px;
	border: 1px solid #e0e0e0;
	padding: 10px;
	margin: 10px 0;
}
p.isi{
	margin: 10px 0;
}
</style>
</head>
<body>
<div align="center">
<?php
$xml = simplexml_load_file("detik.xml");

$items = $xml->xpath("/rss/channel/item");

foreach($items as $item){
	echo '<div class="item">';
	echo '<h3><a href="'.$item->link.'">'.$item->title.'</a></h3>';
	echo '<p>'.$item->pubDate.'</p>';
	echo '<p class="isi">'.$item->description.'</p>';
	echo "</div>\n";
}
?>
</div>
</body>
</html>