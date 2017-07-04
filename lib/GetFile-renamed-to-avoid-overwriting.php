<?php
/** COPYRIGHT Time at Task Aps
 * Simple proxy to erevisoren.dk/lib/GetFile.php
 * 
 */
    $remoteImage = 'http://erevisoren.dk/lib/GetFile.php?'.$_SERVER['QUERY_STRING'];
  
    $imginfo = getimagesize($remoteImage);
    if($imginfo)
        header('Content-type: ' . $imginfo['mime']);
    readfile($remoteImage);
