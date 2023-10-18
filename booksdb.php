<!DOCTYPE html>
<html>
<head>
    <title>Książki</title>
</head>
<body>
    <?php
    session_start();

    include('nav.php');
    ?>

    <h1>Książki</h1>

    <?php
    if (isset($_SESSION['userRole']) && $_SESSION['userRole'] == 'ADMIN') {
        $mysqli = new mysqli("localhost", "root", "", "biblioteka");

        if ($mysqli->connect_error) {
            die('Błąd połączenia z bazą danych: ' . $mysqli->connect_error);
        }
        
        $query = "SELECT * FROM ksiazki";
        $result = $mysqli->query($query);

        if (!$result) {
            echo 'Błąd zapytania SQL: ' . $mysqli->error;
        } else {
            echo '<table>';
            echo '<tr><th>ID</th><th>Tytuł</th><th>Autor</th><th>ISBN</th></tr>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['tytul'] . '</td>';
                echo '<td>' . $row['autor'] . '</td>';
                echo '<td>' . $row['isbn'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        }

        $result->free();
        $mysqli->close();
    } else {
        echo 'Nie masz dostępu do tej strony.';
    }
    ?>
</body>
</html>