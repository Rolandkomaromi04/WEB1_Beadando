<?php
session_start();
require_once('includes/config.php');

// Üzenet megjelenítése
$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ellenőrizzük a felhasználónév és jelszó helyességét
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Ellenőrizzük az adatbázisban
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                // Sikeres bejelentkezés, beállítjuk a session változókat
                $_SESSION['user_id'] = $row['id']; // Felhasználó azonosítója
                $_SESSION['username'] = $username; // Felhasználó neve
                header('Location: index.php');
                exit();
            } else {
                // Hibás jelszó
                $message = '<div style="background-color: #ffcccc; padding: 10px;">Hibás felhasználónév vagy jelszó!</div>';
            }
        } else {
            // Hibás felhasználónév
            $message = '<div style="background-color: #ffcccc; padding: 10px;">Hibás felhasználónév vagy jelszó!</div>';
        }

        $stmt->close();
    } else {
        // Felhasználónév vagy jelszó nincs megadva
        $message = '<div style="background-color: #ccffcc; padding: 10px;">Kérjük, írja be a felhasználónevet és a jelszavát!</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="pictures/icon.jpg">
    <title>Bejelentkezés</title>
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 300px;
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-top: 0;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0069d9;
        }
        .my-button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        .my-button:hover {
            background-color: #0069d9;
        }
    </style>
    <div class="container">
        <h1>Bejelentkezés</h1>
        <form action="index.php?oldal=belepes" method="POST">
            <label for="username">Felhasználónév:</label>
            <input type="text" id="username" name="username">
            <label for="password">Jelszó:</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Bejelentkezés">
        </form>
        <br>
        <a href="index.php" class="my-button">Vissza a főoldalra</a>
    </div>
</body>
</html>
