<?php
// Todd Upshaw Wk 2 Performance Assessment
// This program collects user information and displays the submitted values.

$name = $_POST["name"] ?? "";
$dateOfBirth = $_POST["dateOfBirth"] ?? "";
$favoriteColor = $_POST["favoriteColor"] ?? "";
$favoritePlace = $_POST["favoritePlace"] ?? "";
$nickname = $_POST["nickname"] ?? "";

$submitted = isset($_POST["submit"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todd Upshaw Wk 2 Performance Assessment</title>
</head>

<body>

    <h1>Todd Upshaw Wk 2 Performance Assessment</h1>

    <form method="POST">

        <p>
            <label>Name:</label><br>
            <input type="text" name="name">
        </p>

        <p>
            <label>Date of Birth:</label><br>
            <input type="text" name="dateOfBirth">
        </p>

        <p>
            <label>Favorite Color:</label><br>
            <input type="text" name="favoriteColor">
        </p>

        <p>
            <label>Favorite Place To Visit:</label><br>
            <input type="text" name="favoritePlace">
        </p>

        <p>
            <label>Nickname:</label><br>
            <input type="text" name="nickname">
        </p>

        <button type="submit" name="submit">Submit Information</button>

    </form>

    <?php if ($submitted): ?>

        <?php
        // var_dump displays the submitted POST data for debugging.
        var_dump($_POST);
        ?>

        <hr>

        <h2>Your Information</h2>

        <?php
        if ($name != "") {
            echo "<p>Your name is " . htmlspecialchars($name) . "</p>";
        } else {
            echo "<p>You didn't enter your name.</p>";
        }

        if ($dateOfBirth != "") {
            echo "<p>Your date of birth is " . htmlspecialchars($dateOfBirth) . "</p>";
        } else {
            echo "<p>You didn't enter your date of birth.</p>";
        }

        if ($favoriteColor != "") {
            echo "<p>Your favorite color is " . htmlspecialchars($favoriteColor) . "</p>";
        } else {
            echo "<p>You didn't enter your favorite color.</p>";
        }

        if ($favoritePlace != "") {
            echo "<p>Your favorite place to visit is " . htmlspecialchars($favoritePlace) . "</p>";
        } else {
            echo "<p>You didn't enter your favorite place to visit.</p>";
        }

        if ($nickname != "") {
            echo "<p>Your nickname is " . htmlspecialchars($nickname) . "</p>";
        } else {
            echo "<p>You didn't enter your nickname.</p>";
        }
        ?>

    <?php endif; ?>

</body>
</html>