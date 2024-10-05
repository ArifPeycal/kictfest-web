<?php
session_start();

// Hardcoded credentials for demonstration
$users = [
    'harrypotter' => '123', // Harry Potter's credentials
];

// Handle login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        header("Location: user.php?user=1"); // Assign user ID as 1 for Harry Potter
        exit;
    } else {
        $error = "Invalid credentials! Please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic User Login</title>
    
    <style>
        body {
            background-image: url('background.png');
            background-color: #1b1b1b;
            color: #fff;
            font-family: "Courier New", Courier, monospace;
            text-align: center;
            padding-top: 50px;
        }
        h1 {
            color: #f4d03f;
            margin-bottom: 20px;
        }
        .login-form {
            display: inline-block;
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px #f39c12, 0 0 20px #f39c12;
        }
        input[type="text"], input[type="password"] {
            width: 200px;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            color: #fff;
            background-color: #444;
            box-shadow: 0 0 5px #f39c12;
        }
        input[type="text"]:focus, input[type="password"]:focus {
            outline: none;
            background-color: #555;
        }
        button {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            color: #fff;
            background-color: #f39c12;
            cursor: pointer;
            box-shadow: 0 0 5px #f39c12;
        }
        button:hover {
            background-color: #f4d03f;
        }
        .error {
            color: red;
        }
        .hint {
            margin-top: 20px;
            color: #f39c12; /* Change color for emphasis */
        }
        .back-home {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #444;
            padding: 10px 15px;
            border-radius: 5px;
            color: #fff;
            text-decoration: none;
            font-size: 1em;
            box-shadow: 0 0 5px #f39c12;
        }
        .back-home:hover {
            background-color: #f39c12;
        }
    </style>
</head>
<body>
    <a href="../index.php" class="back-home">← Back to Home</a>

    <h1>🧙‍♂️ Welcome to Platform 9¾ 🧙‍♂️</h1>
    
    <p>To board the Hogwarts Express, you must first pass through the barrier. Prove yourself worthy to enter the platform</p>

    <p class="hint">✨ No credentials? Remember, even the greatest wizard often hides his secret in plain sight... ✨</p>
    <p class="hint">Traverse deeper... until you find the source.</p>

      <!-- Did you find my secret?
         Username: harrypotter
         Password: 123
      -->
    
    <div class="login-form">
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Board the Express</button>
        </form>
    </div>
</body>
</html>
