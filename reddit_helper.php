<html>
<body>
<?php 
    function get_reddit_item( $index, $subreddit ){
        $ch= curl_init();
        $url = null;
        if( $subreddit ){
            $url = 'http://www.reddit.com/' + $subreddit + '/.json';
        }
        else{
            $url = 'http://www.reddit.com/.json';
        }
            
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        $a  = json_decode( $response, $assoc=true );
        $a = $a["data"];
        $a = $a["children"];
        $a = $a[$index];
        $a = $a["data"];
        $title = $a["title"];
        $image = $a["url"];

        if( !$image ) return null;

        $item = "<div id='item'>" + $title + "<br>" + $image + "</div>";

        curl_close($ch);

        return $item;
    }

?>
</body>
</html>
