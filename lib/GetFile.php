<?php
/** COPYRIGHT Time at Task Aps
 * Simple proxy to ebogholderen.dk/lib/GetFile.php
 * 
 */
    $remoteImage = 'http://ebogholderen.dk/lib/GetFile.php?'.$_SERVER['QUERY_STRING'];
  
    $imginfo = getimagesize($remoteImage);
    if($imginfo)
        header('Content-type: ' . $imginfo['mime']);
    readfile($remoteImage);