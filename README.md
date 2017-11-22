# Now Playing

Class that returns information about the current track playing, using the Last.fm API. 

Requires PHP 5, and a Last.fm API key: http://www.last.fm/api/account

Author: Erik Jansson - <hello@erikjansson.net>

## Bare bones usage:
 
    require_once 'nowplaying.class.php';
    $nowPlaying = new NowPlaying('Username', 'API key');
    $nowPlaying->setNoTrackPlayingMessage('My custom message!'); // optional
    echo $nowPlaying->getNowPlaying();
 
## Step-by-step usage:

1. Assuming the class file resides in the same directory as your
 script, include it as such: `require_once 'nowplaying.class.php';`
 
 (Edit by Staubgeborener: With this fork, you also can just use
 `	<?php require_once 'ShowLastPlayedSong.php'; ?>`
 to view the artist, the song, the albumcover and a message 'last heard' or 'currently played')

2. Then, instantiate the class: `$nowPlaying = new NowPlaying('Username', 'API key');`
    - The first parameter is the Last.fm username you want data from.
    - The second parameter is the API key which you will find in your API account after signing up: http://www.last.fm/api/account

3. To display the current track playing, call the getNowPlaying() method: `echo $playing->getNowPlaying();`

4. When no music is currently being played, a message will be shown 
   saying so. This message can be customized with `setNoTrackPlayingMessage()`: `$playing->setNoTrackPlayingMessage('My custom message!');
   
   Remember to call this method before `getNowPlaying()`, otherwise your custom
   message won't be used.
   
## License

Do whatever you want with this. Kthxbai!
