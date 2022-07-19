<!DOCTYPE html>
<html>
    <head>
       <title>Arrays</title>  
    </head>
    <body>
        <header>
        <li><a href="https://quiztrial.000webhostapp.com/phpbasics_code.txt">Source Code</a></li>
        </header>
    <?php
    echo "<p>PHP Info:".phpinfo()."</p>";
    echo "<p>PHP version:".phpversion()."</p>";
    echo "<p>Current User:".get_current_user()."</p>";
    echo "<p>Root Directory:".getenv('DOCUMENT_ROOT')."</p>";
    echo "<p>Current Script:".$_SERVER['PHP_SELF']."</p>";
    echo "<p>IP Address of Host Server:".$_SERVER['SERVER_ADDR']."</p>";
    echo "<p>Name of Host Server:".$_SERVER['SERVER_NAME']."</p>";
    echo "<p>Server Identification String:".$_SERVER['SERVER_SOFTWARE']."</p>";
    echo "<p>Name and Revision of the Information Protocol:".$_SERVER['SERVER_PROTOCOL']."</p>";
    echo "<p>Request Method:".$_SERVER['REQUEST_METHOD']."</p>";
    echo "<p>Request Method:".$_SERVER['REQUEST_METHOD']."</p>";
    echo "<p>Viewer IP Adress:".$_SERVER['REMOTE_ADDR']."</p>";
    echo "<p>Viewer Host Name:".$_SERVER['REMOTE_HOST']."</p>";
    echo "<p>Absolute Path of Current Script:". $_SERVER['SCRIPT_FILENAME']."</p>";
    echo "<p>Port on Server for Communication:". $_SERVER['SERVER_PORT']."</p>";
    ?>
   </body>
</html>
