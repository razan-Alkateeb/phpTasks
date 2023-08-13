<!-- login_form.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form action="process_login.php" method="GET">
        <label for="username">Username:</label>
        <input type="text" name="username" >
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" >
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
