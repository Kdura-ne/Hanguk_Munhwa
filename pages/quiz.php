<?php
    session_start();
?>
<?php if(!isset($_SESSION['userId'])) { 
    header("Location: login.php");
    exit();
}else{
    ?>
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

    <title>퀴즈</title>
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
        <?php
            if(!isset($_SESSION['userId'])){
                header("Location: login.php");
                exit();
            }
        ?>
        
        <div class="quiz-container">
            <form class="quiz-form" method="POST" action="../php/quiz_submit.php">
                <h2 class="quiz-title">Quiz: Cultura Coreana / 한국 문화 퀴즈</h2>
                <p class="quiz-instructions">Escolha uma alternativa por pergunta.</p>

                <ol class="questions-list">
                    <li class="question">
                    <fieldset>
                        <legend>1. Em que ano foi sediada as Olimpíadas de Seul?</legend>
                        <div class="options">
                        <label><input type="radio" name="q1" value="a" required> a) 1984</label>
                        <label><input type="radio" name="q1" value="b"> b) 1992</label>
                        <label><input type="radio" name="q1" value="c"> c) 1988</label> <!-- correta -->
                        <label><input type="radio" name="q1" value="d"> d) 2002</label>
                        </div>
                    </fieldset>
                    </li>

                    <li class="question">
                    <fieldset>
                        <legend>2. Qual prato é tradicionalmente fermentado?</legend>
                        <div class="options">
                        <label><input type="radio" name="q2" value="a" required> a) Bibimbap</label>
                        <label><input type="radio" name="q2" value="b"> b) Kimchi</label> <!-- correta -->
                        <label><input type="radio" name="q2" value="c"> c) Bulgogi</label>
                        <label><input type="radio" name="q2" value="d"> d) Tteokbokki</label>
                        </div>
                    </fieldset>
                    </li>

                    <li class="question">
                    <fieldset>
                        <legend>3. Qual a dança tradicional coreana que é conhecida pela sua performance com leques?</legend>
                        <div class="options">
                        <label><input type="radio" name="q3" value="a" required> a) Buchaechum</label> <!-- correta -->
                        <label><input type="radio" name="q3" value="b"> b) Arirang</label>
                        <label><input type="radio" name="q3" value="c"> c) Hanbok</label> 
                        <label><input type="radio" name="q3" value="d"> d) Gochugaru</label>
                        </div>
                    </fieldset>
                    </li>

                    <li class="question">
                    <fieldset>
                        <legend>4. Em quais situações os coreanos geralmente usam o hanbok na atualidade?</legend>
                        <div class="options">
                        <label><input type="radio" name="q4" value="a" required> a) No trabalho, em escolas e em atividades físicas diárias.</label>
                        <label><input type="radio" name="q4" value="b"> b) Em feriados tradicionais como Chuseok e Seollal, casamentos e visitas a palácios históricos.</label> <!-- correta -->
                        <label><input type="radio" name="q4" value="c"> c) Apenas em funerais e durante a ocupação japonesa, como forma de resistência.</label>
                        <label><input type="radio" name="q4" value="d"> d) Em desfiles de moda internacionais e clipes de K-pop exclusivamente.</label>
                        </div>
                    </fieldset>
                    </li>

                    <li class="question">
                    <fieldset>
                        <legend>5. Em quais esportes a Coreia do Sul se destaca?</legend>
                        <div class="options">
                        <label><input type="radio" name="q5" value="a" required> a) Natação e Taekwondo</label>
                        <label><input type="radio" name="q5" value="b"> b) Bocha e Curling</label>
                        <label><input type="radio" name="q5" value="c"> c) Beisebol e Basquete</label>
                        <label><input type="radio" name="q5" value="d"> d) Tiro com arco e Golfe</label> <!-- correta -->
                        </div>
                    </fieldset>
                    </li>

                    <li class="question">
                    <fieldset>
                        <legend>6. Qual festival é famoso na Coreia?</legend>
                        <div class="options">
                        <label><input type="radio" name="q6" value="a" required> a) Seollal</label> <!-- correta -->
                        <label><input type="radio" name="q6" value="b"> b) Festival Qingming</label>
                        <label><input type="radio" name="q6" value="c"> c) Oktoberfest</label>
                        <label><input type="radio" name="q6" value="d"> d) Carnival</label>
                        </div>
                    </fieldset>
                    </li>

                    <li class="question">
                    <fieldset>
                        <legend>7. Qual dinastia é conhecida pelas cerâmicas celadon?</legend>
                        <div class="options">
                        <label><input type="radio" name="q7" value="a" required> a) Joseon</label>
                        <label><input type="radio" name="q7" value="b"> b) Silla</label>
                        <label><input type="radio" name="q7" value="c"> c) Balhae</label>
                        <label><input type="radio" name="q7" value="d"> d) Goryeo</label> <!-- correta -->
                        </div>
                    </fieldset>
                    </li>

                    <li class="question">
                    <fieldset>
                        <legend>8. Qual o nome da pasta de pimenta coreana?</legend>
                        <div class="options">
                        <label><input type="radio" name="q8" value="a" required> a) Gochujang</label> <!-- correta -->
                        <label><input type="radio" name="q8" value="b"> b) Doenjang</label>
                        <label><input type="radio" name="q8" value="c"> c) Sriracha</label>
                        <label><input type="radio" name="q8" value="d"> d) Gochugaru</label>
                        </div>
                    </fieldset>
                    </li>

                    <li class="question">
                    <fieldset>
                        <legend>9. Bulgogi é um prato típico da Coreia que consiste em:</legend>
                        <div class="options">
                        <label><input type="radio" name="q9" value="a" required> a) Sopa de kimchi</label>
                        <label><input type="radio" name="q9" value="b"> b) Arroz frito</label>
                        <label><input type="radio" name="q9" value="c"> c) Carne marinada grelhada</label> <!-- correta -->
                        <label><input type="radio" name="q9" value="d"> d) Panqueca de frutos do mar</label>
                        </div>
                    </fieldset>
                    </li>

                    <li class="question">
                    <fieldset>
                        <legend>10. Em que dia foi fundada a República da Coreia?</legend>
                        <div class="options">
                        <label><input type="radio" name="q10" value="a" required> a) 1 de agosto 1945</label>
                        <label><input type="radio" name="q10" value="b"> b) 15 de agosto 1948</label> <!-- correta -->
                        <label><input type="radio" name="q10" value="c"> c) 3 de maio 1956</label>
                        <label><input type="radio" name="q10" value="d"> d) 15 de julho 1942</label> 
                        </div>
                    </fieldset>
                    </li>
                </ol>

                <div class="quiz-actions">
                    <button type="submit" class="btn-submit">Enviar respostas</button>
                    <button type="reset" class="btn-reset">Limpar</button>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <p>Kdura M. &copy; 2024</p>
    </footer>

    <script src="../js/nav-dropdown.js"></script>
    <script src="../js/nav-hover.js"></script>
</body>
</html>
<?php } ?>