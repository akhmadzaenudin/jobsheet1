<html>
<head>
<title>Tutorial PHP</title>
</head>
<body>
<?php
 class cara_makan
 { function pisang()
 {
	 return "di buka kulitnya terlebih dahulu";
 }
 }
 $obj = new cara_makan;
 echo "cara makan pisang adalah dengan " . $obj->pisang();
 ?>
 </body>
 </html>