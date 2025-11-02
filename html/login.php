<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/cad.css">

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
        <a href="quiz.php" class="topics" id="quiz" data-hover="퀴즈">Quiz</a>
    </nav>

    <div class="wrap"> <!-- hero section -->
        <div class="bg-video">
            <video autoplay loop muted>
                <source src="../media/quiz.mp4" type="video/mp4">
            </video>
        </div>
        
        <div class="translucent-box">
            Hora de testar seus conhecimentos!!<br>
            지식을 테스트할 시간입니다!!
        </div>
    </div> <!-- end of hero section -->

    <main>
        <div class="form-container">
            <h1 class="form-title">Login / 로그인</h1>

            <form class="signup-form" action="../php/logar.php" method="POST">
                <div class="form-group">
                    <label for="email">E-mail / 이메일</label>
                    <input type="email" id="email" name="email" required placeholder="seu@email.com">
                </div>

                <div class="form-group">
                    <label for="senha">Senha / 비밀번호</label>
                    <input type="password" id="senha" name="senha" required placeholder="Mínimo 6 caracteres">
                </div>

                <button type="submit" class="btn-submit">Login / 로그인</button>

                <p class="form-footer">
                    Não possuí uma conta? <a href="cad.php">Cadastrar-se / 회원가입</a>
                </p>
            </form>
        </div>
    </main>

    <footer>
        <p>Kdura M. &copy; 2024</p>
    </footer>
    <?php
    if (isset($_SESSION['msg_id'])) {
        switch ($_SESSION['msg_id']) {
            case 5:
                echo "<script>alert('Senha Incorreta.');</script>";
                unset($_SESSION['msg_id']);
                break;
            case 6:
                echo "<script>alert('Email não cadastrado.');</script>";
                unset($_SESSION['msg_id']);
                break;
            case 7:
                echo "<script>alert('Login realizado com sucesso!');</script>";
                unset($_SESSION['msg_id']);
                break;
        }
        unset($_SESSION['msg_id']);
    } ?>
    <script src="../js/nav-hover.js"></script>
</body>
</html>