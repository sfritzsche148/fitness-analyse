    
    <?php
    $servername = '127.0.0.1';
    $user = 'root';
    $pw = '';
    $db = 'fitness-analyse';


    $con = new mysqli($servername, $user, $pw, $db);

    if ($con->connect_error) {
        die('No Server Connection'.$con->connect_error);
    }

    require 'schritte.html';

    $anzahlschritte = $_POST["anzahlschritte"];
    $date = $_POST["date"];

    if ($date == 0000-00-00) {
        die('kein Datum');
    }

    $query = "INSERT INTO schritte (Anzahl_Schritte, Datum) VALUES ('$anzahlschritte', '$date')";

    if ($con->query($query) === TRUE) {
        echo 'Nachricht wurde gesendet  ';
    }else {
        echo 'Die Nachricht konnte nicht verschickt werden' . $con->error;
    }

    $sql = 'SELECT * FROM `schritte`';

    $ergebnis = $con->query($sql);

    if ($ergebnis->num_rows > 0) {
        while ($row = $ergebnis->fetch_assoc()) {
            echo $row['Anzahl_Schritte'] . ' ';
            echo $row['Datum'] . '<br> <p></p>';
        }
    } else {
        echo "Leider nichts gefunden";
    }

    $con->close();   
    ?>
    
    <script src="main.js"></script>
</body>
</html>