<?php
session_start();
include('nav.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $mysqli = mysqli_connect("localhost", "root", "", "biblioteka");
    if(mysqli_connect_errno()){
        echo "connected";
        exit();
    } else {
        // tutaj pobierasz userow i sprawdzadsz dane z forma
        $sql = "select * from users where first_name='".$username."' and password='".$password."' ";
        $rez = mysqli_query($mysqli, $sql);

        if (mysqli_num_rows($rez) ==1){
            $row = mysqli_fetch_assoc($rez);
            //foreach($row as $key) echo '<p>'.$key.'</p>';
            echo "Zalogowałeś się<br>";
            $_SESSION['userRole'] = $row['role'];
            header('location:index.php');

            
        }else{
            echo "Błąd logowania<br>";
        }
        echo $_SESSION['userRole'];
        echo "connected";
        mysqli_close($mysqli);
    }
}
?>