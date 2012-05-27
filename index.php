<html>
<body>
<?php 
	require_once("reddit.php");
	$reddit = new reddit("radashi", "tcsmjc");
	print_r(error_get_last());
//	$response = $reddit->getListing("technology", 5);
//	echo $response;
?>
<a> STUFF! </a>
</body>
</html>
