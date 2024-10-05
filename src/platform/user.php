<?php
session_start();

// Check if the user wants to log out
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy(); // Destroy the session
    header("Location: index.php"); // Redirect to the login page
    exit;
}
// Hardcoded user information with user IDs as numbers
$userInfo = [
    '1' => "Welcome, Harry Potter! The Boy Who Lived continues to shine.",
    '2' => "Greetings, Hermione Granger! Your wisdom is unparalleled in the wizarding world.",
    '3' => "Hello, Ron Weasley! Your loyalty to your friends is legendary.",
    '4' => "Salutations, Albus Dumbledore! Your wisdom guides the light.",
    '5' => "Welcome, Severus Snape! Your complex magic holds many secrets.",
    '6' => "Greetings, Luna Lovegood! Your imagination knows no bounds.",
    '7' => "Hello, Sirius Black! The skies are brighter with your presence.",
    '8' => "Salutations, Lord Voldemort! Your dark magic is formidable.",
    '9' => "Welcome, Gandalf the Grey! Your power is unmatched in Middle-earth.",
    '10' => "Greetings, Frodo Baggins! You carry the weight of the world.",
    '11' => "Hello, Samwise Gamgee! Your loyalty is a beacon of hope.",
    '12' => "Salutations, Legolas! Your archery skills are legendary.",
    '13' => "Welcome, Gimli! Your bravery in battle is inspiring.",
    '14' => "Greetings, Arwen! Your beauty and strength shine through.",
    '15' => "Hello, Boromir! Your courage is unmatched.",
    '16' => "Salutations, Éowyn! Your courage in battle is legendary.",
    '17' => "Welcome, Théoden! Your leadership inspires bravery.",
    '18' => "Greetings, Elrond! Your wisdom transcends time.",
    '19' => "Hello, Galadriel! Your beauty and power are unparalleled.",
    '20' => "Salutations, Sauron! Your dark presence looms over Middle-earth.",
    '21' => "Welcome, Bilbo Baggins! Your adventures are the stuff of legends.",
    '22' => "Greetings, Morgana! Your powers of enchantment are awe-inspiring.",
    '23' => "Hello, Dori! You are a brave companion on any journey.",
    '24' => "Salutations, Dwalin! Your strength in battle is inspiring.",
    '25' => "Welcome, Kili! Your charm is undeniable.",
    '26' => "Greetings, Fili! The strength of a dwarf runs through your veins.",
    '27' => "Hello, Smaug! Your treasure hoard is legendary.",
    '28' => "Salutations, Gollum! The riddles you weave are captivating.",
    '29' => "Welcome, Narya! Your flame of hope shines brightly.",
    '30' => "Greetings, Nausicaa! Your heart is pure and kind.",
    '31' => "Hello, Lúthien! Your beauty enchants all who see you.",
    '32' => "Salutations, Brego! Your loyalty is fierce and unyielding.",
    '33' => "Welcome, Thranduil! Your elegance commands respect.",
    '34' => "Greetings, Haldir! Your courage is a song in the wind.",
    '35' => "Hello, Gandalf the White! Your light shines against the darkness.",
    '36' => "Salutations, Merry Bramble! Your laughter is the magic of the forest.",
    '37' => "Welcome, Peter Pettigrew! Your choices shape the world.",
    '38' => "Greetings, Mad-Eye Moody! Your vigilance is admirable.",
    '39' => "Hello, Gawain! Your bravery shines bright.",
    '40' => "Salutations, Sirius! Your legacy is woven into the fabric of time.",
    '41' => "Welcome, Arthur Weasley! Your curiosity knows no bounds.",
    '42' => "Greetings, Fred Weasley! Your humor brings joy to many.",
    '43' => "Hello, George Weasley! Your spirit is unstoppable.",
    '44' => "Salutations, Lavender Brown! Your joy is contagious.",
    '45' => "Welcome, Parvati Patil! Your strength is inspiring.",
    '46' => "Greetings, Cho Chang! Your kindness is a warm embrace.",
    '47' => "Hello, Nymphadora Tonks! Your spirit is a vibrant color.",
    '48' => "Salutations, Luna Lovegood! Your imagination opens doors to wonder.",
    '49' => "Welcome, Pansy Parkinson! Your determination is fierce.",
    '50' => "Greetings, Viktor Krum! Your skill is admired by many.",
    '51' => "Hello, Goblin! Your cunning mind is legendary.",
    '52' => "Salutations, Bellatrix Lestrange! Your magic is wild and unpredictable.",
    '53' => "Welcome, Lore! Your storytelling captivates the hearts of all.",
    '54' => "Greetings, Faramir! Your honor is the heart of Gondor.",
    '55' => "Hello, Gimli! Your heart is as bold as your axe.",
    '56' => "Salutations, Bilbo Baggins! Your adventures are woven into the fabric of time.",
    '57' => "Welcome, Gandalf! Your wisdom knows no bounds.",
    '58' => "Greetings, Elrond! Your guidance is a beacon of hope.",
    '59' => "Hello, Thranduil! Your majesty commands respect.",
    '60' => "Salutations, Merry! Your laughter lights up the darkest paths.",
    '61' => "Welcome, Pippin! Your courage is a treasure.",
    '62' => "Greetings, Faramir! Your honor is the heart of Gondor.",
    '63' => "Hello, Arwen! Your spirit is a gentle breeze.",
    '64' => "Salutations, Frodo! Your heart carries the weight of the world.",
    '65' => "Welcome, Gimli! Your strength is an inspiration.",
    '66' => "Greetings, Boromir! Your courage is unmatched.",
    '67' => "Hello, Gandalf! Your wisdom is a guiding light.",
    '68' => "Salutations, Théoden! Your leadership inspires courage.",
    '69' => "Welcome, Sauron! Your dark presence looms over Middle-earth.",
    '70' => "Greetings, Morgoth! Your legacy is filled with darkness.",
];


// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

// Get the user ID from the URL
$userId = isset($_GET['user']) ? (int)$_GET['user'] : null;

// Validate user ID
if ($userId === null || !array_key_exists($userId, $userInfo)) {
    echo "✨ Oops! It seems you have summoned an unknown wizard... ✨";
    exit;
}

// Get the message for the requested user
$message = $userInfo[$userId];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Portal</title>
    <style>
        body {
            background-color: #1b1b1b;
            color: #fff;
            font-family: "Courier New", Courier, monospace;
            text-align: center;
            padding-top: 50px;
        }
        h1 {
            color: #f4d03f;
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

    <h1>🎩 Magical User Portal 🎩</h1>
    <p><?php echo $message; ?></p>
    <?php if ($userId === 1) : ?>
        <p>✨ A prophecy foretold of the 10th guardian, a wizard unlike any other, whose presence unlocks unimaginable knowledge. Seek the wizard to reveal your path. ✨</p>
    <?php endif; ?>
    <?php if ($userId === 10) : ?>
        <p>✨ The secret council of wizards assigns a unique number to each of its members. The 21st wizard is known to hold the ancient flag. Have you discovered their name yet? ✨</p>
    <?php endif; ?>



    <?php if ($userId === 21) : ?>
        <p>🔮 Flag: <strong>SIG{1d0r_unl0cks_th3_s3cr3ts}</strong></p>
    <?php endif; ?>

    <p><a href="user.php?action=logout">Logout</a></p>
</body>
</html>