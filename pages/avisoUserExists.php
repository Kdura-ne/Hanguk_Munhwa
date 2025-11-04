<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/cad.css">
    <link rel="stylesheet" href="../css/avisos.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gamja+Flower&family=Nanum+Myeongjo&family=Noto+Sans+KR:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>Cadastro / 회원가입</title>
</head>
<body>
    <header>
        <img src="../media/logo.png" alt="" onclick="window.location.href = '../index.php'">
        <?php if (isset($_SESSION['userId'])) { ?>
            <button id="logout" onclick="window.location.href = '../php/logout.php'">Log out / 로그아웃</button>
        <?php } else { ?>
            <button id="login" onclick="window.location.href = 'login.php'">Log in / 로그인</button>
            <button id="cad" onclick="window.location.href = 'cad.php'">Cadastrar-se / 회원가입</button>
        <?php } ?>
    </header>

    <nav>
        <a href="hist.php" class="topics" id="hist" data-hover="역사">História</a>
        <a href="food.php" class="topics" id="food" data-hover="음식과 요리">Comida e Gastronomia</a>
        <a href="art.php" class="topics" id="art" data-hover="예술과 음악">Arte e Música</a>
        <a href="clothes.php" class="topics" id="clothes" data-hover="전통 의상">Vestuário Tradicional</a>
        <a href="celeb.php" class="topics" id="celeb" data-hover="축제와 행사">Festivais e Celebrações</a>
        <a href="sports.php" class="topics" id="sports" data-hover="스포츠와 무술">Esportes e Artes Marciais</a>
        <div class="nav-dropdown">
            <button class="topics dropdown-toggle" id="quiz-toggle" aria-expanded="false" aria-haspopup="true" data-hover="퀴즈">
                Quiz
            </button>
            <ul class="dropdown-menu" id="quiz-menu" role="menu" aria-labelledby="quiz-toggle">
                <li role="none"><a role="menuitem" href="quiz.php">Fazer Quiz / 퀴즈 풀기</a></li>
                <li role="none"><a role="menuitem" href="quiz_result.php">Resultado / 결과</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="aviso-wrap">
            <div class="aviso-box" role="status" aria-live="polite">
                <h2>AVISO</h2>
                <p>Nome de usuário já cadastrado.</p>
                <div class="aviso-actions">
                    <a class="btn-aviso" href="cad.php">Voltar para cadastro</a>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>Kdura M. &copy; 2024</p>
    </footer>

    <script src="../js/nav-dropdown.js"></script>
    <script src="../js/nav-hover.js"></script>
</body>
</html>