<?php 
	require_once 'nowplaying.class.php';
	$nowPlaying = new NowPlaying('LastFM_Username', 'LastFM_API');

	//check if something is scrobbled right now, otherwise print textfile (last played song)
	if($nowPlaying->getNowPlaying() == ''){
			//FILE_IGNORE_NEW_LINES otherwise we would get url encoding %0A (linefeed) and we won't find any album covers
			$lines = file('lastplayed.txt', FILE_IGNORE_NEW_LINES);
			$artist = $lines[0];
			$songname = $lines[1];
			echo "Last heard</br>";
			echo $lines[0] . ' - ' . $lines[1];		
		}
		else{
			echo "Currently listening to</br>";
			echo $nowPlaying->getNowPlaying();
		}	
		
	require_once 'albumcover.php';

    $result = curl_get_file_contents($artist,$songname); 
    if ($result != FALSE) { 
        print "<img src=\" " . $result . "\">"; 
    } else { 
        //no cover found
    } 
	
	
	?>
