<?php 

//copied and edited from niwreG @ https://www.radioforum.nl
function curl_get_file_contents($artist,$titel,$size = "small") 
    { 
        $URL = "http://api.depubliekeomroep.nl/anp/albumart.php?artiest=" .
         urlencode($artist) . "&titel=". urlencode($titel) 
        ."&size=". urlencode($size); 
        $c = curl_init(); 
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($c, CURLOPT_URL, $URL); 
        $contents = curl_exec($c); 
        curl_close($c); 


        if ($contents) return $contents; 
            else return FALSE; 
    } 


    ?> 