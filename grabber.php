<?php 

class Grabber {

    function Grab() {
        $ip_address = $_SERVER['REMOTE_ADDR'];
        $date = date("d:m:Y - H:i", time());
        $browser = explode(' ', $_SERVER['HTTP_USER_AGENT'])[0];

        $file = 'grabbed_ips.txt';
        if (is_writeable($file)) {
            $data = "|  DATE: ". $date ."  |  IP: ". $ip_address ."  |  BROWSER: ". $browser ."  |\n";
            file_put_contents($file, $data, FILE_APPEND);
        }
    }

}

?>
