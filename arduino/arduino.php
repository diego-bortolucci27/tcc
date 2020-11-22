<?php
    shell_exec("mode com4: BAUD=9600 PARITY=n DATA=8 STOP=1 to=off dtr=off rts=off");
    $port = fopen("com3", "w");

    if ($_POST['rm'])
    {
        echo "RM: " . $_POST['rm'];
        fwrite($port, $_POST['rm']);
    }
    fclose($port);
?>