<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>

<h2>Novell Services Login</h2>

<form action="userinfor.php" method="post">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br>
    <label for="city">City of Employment:</label><br>
    <input type="text" id="city" name="city"><br>
    <label for="server">Web server:</label><br>
    <select id="server" name="server">
        <option value="">Choose a server</option>
        <option value="server1">Server 1</option>
        <option value="server2">Server 2</option>
        <option value="server3">Server 3</option>
    </select><br>
    <p>Please specify your role:</p>
    <input type="radio" id="admin" name="role" value="admin">
    <label for="admin">Admin</label><br>
    <input type="radio" id="engineer" name="role" value="engineer">
    <label for="engineer">Engineer</label><br>
    <input type="radio" id="manager" name="role" value="manager">
    <label for="manager">Manager</label><br>
    <input type="radio" id="guest" name="role" value="guest">
    <label for="guest">Guest</label><br>
    <p>Single Sign-on to the following:</p>
  
    <input type="checkbox" id="mail" name="signon[]" value="mail">
    <label for="mail">Mail</label><br>
    <input type="checkbox" id="payroll" name="signon[]" value="payroll">
    <label for="payroll">Payroll</label><br>
    <input type="checkbox" id="selfservice" name="signon[]" value="selfservice">
    <label for="selfservice">Self-service</label><br>

    <input type="submit" value="Login">
    <input type="reset" value="Reset">
</form>

</body>
</html>
