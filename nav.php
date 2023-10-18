<nav>
    <ul>
        <?php
        if (isset($_SESSION['userRole'])&&$_SESSION['userRole'] == 'ADMIN' ) {
            echo '<li><a href="logout.php">Wyloguj</a></li>';
        } else {
            echo '<li><a href="signin.php">Zaloguj</a></li>';
        }?>
        <li><a href="booklist.php">Lista książek</a></li>
        <li><a href="myaccount.php">Moje konto</a></li>
        <li><a href="index.php">home</a></li>
        <?php
            if (isset($_SESSION['userRole'])&&$_SESSION['userRole'] == 'ADMIN' ){
                echo '<li><a href="booksdb.php">baza książek</a></li>';
            }
        ?>
        
        
    </ul>
</nav>