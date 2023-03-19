
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fitness Analyse</title>
</head>
<body>
    <div id="login">
        <h1>Login</h1>
        <input id="passwordinput" type="password">
        <button id="passbutton">Submit</button>
    </div>
    <div id="content">
        <h1>Dashboard</h1>
        <div id="schritte">
            <div id="table">
                <form action="" method="post">
                    <input id="schrittcount" name="anzahlschritte" type="number">
                    <input id="date" type="date" name="date">
                    <input type="submit" id="schrittbtn">

                </form>
                <div id="schrittetable">
                    
                </div>
            </div>
            <div id="chart">

            </div>
        </div>
    </div>
    <script src="main.js"></script>
</body>
</html>


<?php
    $servername = '127.0.0.1';
    $user = 'root';
    $pw = '';
    $db = 'fitness-analyse';


    $con = new mysqli($servername, $user, $pw, $db);

    if ($con->connect_error) {
        die('No Server Connection'.$con->connect_error);
    }

    $anzahlschritte = $_POST["anzahlschritte"];
    $date = $_POST["date"];

    $query = "INSERT INTO schritte (Anzahl_Schritte, Datum) VALUES ('$anzahlschritte', '$date')";

    if ($con->query($query) === TRUE) {
        echo '';
    }else {
        echo 'Die Nachricht konnte nicht verschickt werden' . $con->error;
    }

    $con->close();   
    
    
?>