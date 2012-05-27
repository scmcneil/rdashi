<html>
<body>
<?php 
    $ch= curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://www.reddit.com/.json');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    $a  = json_decode( $response, $assoc=true );
    echo '<br> <br> <br>';
    $a = $a["data"];
    $a = $a["children"];
    $a = $a[5];
    $a = $a["data"];
    $a = $a["title"];
    var_dump($a);

    curl_close($ch);
    echo '<br> <br> <br>';

?>
<a> STUFF! </a>
</body>
</html>
