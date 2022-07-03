<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Remote Control</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'RemoteControl.php';
            $c = new RemoteControl();
            $c->turnOn();
            $c->play();
            $c->openMenu();
            //print_r($c);
        ?>
        </pre>
    </body>
</html>