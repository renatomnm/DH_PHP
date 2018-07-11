<?php
if (isset($_ENV["HOSTNAME"]))
    $MachineName = $_ENV["HOSTNAME"];
else if  (isset($_ENV["COMPUTERNAME"]))
    $MachineName = $_ENV["COMPUTERNAME"];
else $MachineName = "";
?>
