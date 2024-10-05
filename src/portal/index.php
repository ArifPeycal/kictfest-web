<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Portal to the Ancient Scroll</title>
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
    <script>
        function toggleHint() {
            var hintContent = document.getElementById("hint-content");
            if (hintContent.style.display === "none") {
                hintContent.style.display = "block";
            } else {
                hintContent.style.display = "none";
            }
        }
    </script>
</head>
<body>

    <a href="../index.php" class="back-home">← Back to Home</a>

    <h1>🎩 Magic Portal to the Ancient Scroll 🎩</h1>
    <!-- There is another flag in here somewhere in comments... but not this type of comment -->

    <div class="message-box">
        <?php
        // Flag:  SIG{m4st3r_0f_php_f1lt3r1ng}
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            if ($page === 'index.php') 
                echo "<p>✨ You are already at the Magic Portal! No need to conjure it again. ✨</p>";
            
            else{
                ob_start();
                include($page);
                $content = ob_get_clean();
                echo "<p>$content</p>";
            } 
        } else {
            echo "<p>✨ Welcome to the Magic Portal! Use <strong><code>?page=</code></strong> to begin your quest of Legendary File Invocation. ✨</p>";
        }
        ?>
    </div>

    <div class="magic-box">
    <p>Greetings, brave wizard! You've discovered an enchanted portal that unveils hidden realms of knowledge. But tread carefully... not every secret is meant to be uncovered.</p>
    
    <p>Embark on a journey to these mystical realms:</p>
    <ul>
        <li><a href="?page=magic1.txt">🌟 The Enchanted Forest 🌟</a></li>
        <li><a href="?page=magic2.txt">🔥 The Fiery Cavern 🔥</a></li>
        <li><a href="?page=magic3.txt">💧 The Crystal Lake 💧</a></li>
    </ul>
    
    <p>To begin your adventure, you might want to explore something innocuous... <a href="?page=index.php">discover the portal entrace</a>.</p>
    <p>Will you unveil the true path? The treasures lie within the depths of the unknown... if you dare to venture forth.</p>
</div>

    <div class="hint-box" onclick="toggleHint()">
        <p>🔮 Click for a Hint 🔮</p>
        <div id="hint-content" class="hint-content">
            <p>The scroll you seek is hidden in <strong>flag.txt</strong>. But remember, only the brave will uncover it!</p>
        </div>
    </div>

    <footer>
        <p>🪄 Tip: Be cautious of what files you conjure. 🪄</p>
    </footer>
</body>
</html>
