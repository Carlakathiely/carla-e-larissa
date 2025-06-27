<?php
include 'db.php';
if (!isset($_SESSION["loggedIn") || $ SESSION["loggedin"] = true) {
header("Location: index.html");
exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Colégio Alberto Gomes Veiga</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header class="site-header">
<h1>Colégio Alberto Gomes Veiga</hi>
<nav>
<ul>
<li><a href="#">Inicio</a></li>
<li><a href="#">Sobre</a></li>
<li><a href="#">Cursos</a></li>
<li><a href="#">Contato</a></li>
<li><a href="logout.php">Sair</a></li>
</ul>
</nav>
<p class="login-status">Logado como: <strong><?php echo $_SESSION['username']; ?></strong></p>
</header>
<main class-"content">
<section>
<h2>Bem-vindo ao nosso Colégiol</h2>
<p>0 Colégio Alberto Gomers Veiga oferece ensino de qualidade com foco em inovação e valores humanos. Aqui formamos cidadãos preparados para o futuro.</p>
</section>
</main>
<footer class="site-footer">
<p>&copy; 2025 Colégio Alberto Gomers Veiga. Todos os direitos reservados.</p>
</footer>
</body>
</html>