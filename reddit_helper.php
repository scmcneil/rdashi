<?php 
    function get_reddit_item( $subreddit, $index ){
        $ch= curl_init();
        $url = null;
        if( $subreddit ){
            $url = 'http://www.reddit.com/r/' + $subreddit + '/.json';
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
	function print_subreddit( $subreddit )
	{
		$payload = "";
		for( $i=0; $i<25; $i++)
		{
		    $payload .= get_reddit_item( $subreddit, $i);
		}
		return $payload;	
	}



?>
