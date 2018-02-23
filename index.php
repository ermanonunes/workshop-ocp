-<?php

function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

Redirect('https://www.google.com/', false);

 #-echo "<h1>Openshift Workshop v2.0 - Ermano Nunes =)</h1> ";
 #-echo $_SERVER['SERVER_ADDR'];
 -?>

