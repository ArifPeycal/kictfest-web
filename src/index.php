<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CTF Challenge Page</title>
    <style>
        body {
            background-color: #1b1b1b;
            color: #fff;
            font-family: "Courier New", Courier, monospace;
            text-align: center;
            padding-top: 50px;
        }
        h1 {
            font-size: 3em;
            color: #f4d03f;
        }
        p {
            font-size: 1.2em;
            color: #ddd;
        }
        .magic-box {
            display: inline-block;
            background-color: #444;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 10px #f39c12, 0 0 20px #f39c12;
            width: 60%;
            margin-bottom: 20px;
        }
        .points-box {
            display: inline-block;
            padding: 20px;
            border-radius: 15px;
            width: 60%;
            margin-bottom: 20px;
        }
        a {
            color: #f39c12;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .error {
            color: #e74c3c;
        }
        footer {
            margin-top: 50px;
            color: #999;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        .hint-box {
            margin: 20px auto;
            width: 60%;
            text-align: left;
            cursor: pointer;
        }
        .hint-box p {
            background-color: #444;
            padding: 10px;
            border-radius: 8px;
            color: #f39c12;
            font-size: 1.2em;
        }
        .hint-content {
            display: none;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            color: #fff;
            background-color: #f39c12;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            box-shadow: 0 0 5px #f39c12;
        }
        button:hover {
            background-color: #f4d03f;
            transform: scale(1.05);
        }
        input[type="text"] {
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            color: #fff;
            background-color: #555;
            box-shadow: 0 0 5px #f39c12;
            width: 200px;
        }

    </style>
</head>
<body>

    <h1>You Are Vulnerable CTF Challenge! </h1>

    <div class="magic-box">
        <h3>LFI Challenge</h3>
        <p>Test your skills with Local File Inclusion</p>
        <a href="/portal/index.php"><button>Go to LFI Challenge</button></a>
    </div>

    <div class="magic-box">
        <h3>IDOR Challenge</h3>
        <p>Explore IDOR vulnerabilities</p>
        <a href="/platform/index.php"><button>Go to IDOR Challenge</button></a>
    </div>


    <footer>
        <p>&copy; 2024 Magical CTF Challenges</p>
    </footer>

</body>
</html>
