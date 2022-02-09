<?php

include('./database.php');
$req = $bdd->prepare("SELECT * FROM users WHERE username = 'BatMan'");
$req->execute();

$user = $req->fetch(PDO::FETCH_ASSOC);
$userId = $user['id'];

$req = $bdd->prepare("SELECT * FROM comments WHERE user_id = '$userId'");
$req->execute();

$comments = $req->fetchAll(PDO::FETCH_ASSOC);

$user['comments'] = $comments;

echo json_encode($user);
?>