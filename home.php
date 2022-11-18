<?php
// Initialiser la session
session_start();
// V�rifiez si l'utilisateur est connect�, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="sucess">
        <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
        <p>C'est votre tableau de bord.</p>
        <a href="logout.php">D�connexion</a>
    </div>
</body>

</html>