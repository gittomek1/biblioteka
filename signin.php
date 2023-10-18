<!DOCTYPE html>
<html>
<head>
    <title>Formularz Logowania</title>
</head>
<body>
    <h2>Formularz Logowania</h2>
    <form action="auth.php" method="post">
        <label for="username">Nazwa użytkownika:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Hasło:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" value="Zaloguj">
    </form>
</body>
</html>
