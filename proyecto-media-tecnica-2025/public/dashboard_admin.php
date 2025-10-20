<?php
session_start();
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'admin') {
    header("Location: login.php");
    exit();
}
?>

<?php include("../includes/header.php"); ?>

<div class="container">
    <h1>👨‍💻 Bienvenido Admin: <?php echo $_SESSION['usuario']; ?></h1>
    <p>Aquí podrás gestionar usuarios, juegos y quizzes.</p>

    <a href="logout.php" class="btn">Cerrar sesión</a>
</div>

<?php include("../includes/footer.php"); ?>
