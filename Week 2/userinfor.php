<!DOCTYPE html>
<html>
<body>

<h2>Submitted Information</h2>

<?php
echo "<h3>User Information:</h3>";
echo "Username: " . $_POST["username"] . "<br>";
echo "Password: " . $_POST["password"] . "<br>";
echo "City of Employment: " . $_POST["city"] . "<br>";
echo "Web server: " . $_POST["server"] . "<br>";
echo "Role: " . $_POST["role"] . "<br>";

echo "<h3>Single Sign-on Services:</h3>";
if(isset($_POST["signon"])) {
    if(is_array($_POST["signon"])) {
        foreach ($_POST["signon"] as $service) {
            echo $service . "<br>";
        }
    } else {
        echo $_POST["signon"] . "<br>";
    }
} else {
    echo "No services selected.<br>";
}
?>

</body>
</html>