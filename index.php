<?php

include('./database.php');
$req = $bdd->prepare("SELECT * FROM users WHERE username = 'BatMan'");
$req->execute();

$user = $req->fetch();
$userId = $user['id'];

$req = $bdd->prepare("SELECT * FROM comments WHERE user_id = '$userId'");
$req->execute();

$comments = $req->fetchAll();

$user['comments'] = $comments;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Webflow</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="nav">
        <h2>Mon profil</h2>
    </div>
    <div class="user-profile">
        <div class="user-info">
            <h3><?= $user['username'] ?></h3>
            <img src="https://www.lego.com/cdn/cs/set/assets/blt167d8e20620e4817/DC_-_Character_-_Details_-_Sidekick-Standard_-_Batman.jpg?fit=crop&format=jpg&quality=80&width=800&height=426&dpr=1" alt="">
        </div>
        <div class="user-comments">
            <h4>Commentaires</h4>

            <?php foreach ($user['comments'] as $comment) : ?>

                <p><?= $comment['message'] ?></p>

            <?php endforeach; ?>
        </div>
    </div>

    <footer>
        Copyright
    </footer>

</body>
</html>