<html>
<body>
<?php 
    $ch= curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://www.reddit.com/api/info.json?url=');
    $response = curl_exec($ch);
    echo "Latest posts: ".$response[0];
?>
<a> STUFF! </a>
</body>
</html>
