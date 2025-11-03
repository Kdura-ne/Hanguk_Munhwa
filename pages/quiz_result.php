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

    <div class="wrap"> <!-- hero section -->
        <div class="bg-video">
            <video autoplay loop muted>
                <source src="../media/quiz.mp4" type="video/mp4">
            </video>
        </div>
        
        <div class="translucent-box">
            Seus resultados!!<br>
            당신의 결과!!
        </div>
    </div> <!-- end of hero section -->

    <main>
        <?php
            require_once '../php/connexion.php';

            if(!isset($_SESSION['userId'])){
                header("Location: login.php");
                exit();
            }

            $perguntas = [
                1 => ['text'=>'1. Em que ano foi sediada as Olimpíadas de Seul?', 'opts'=>['a'=>'1984','b'=>'1992','c'=>'1988','d'=>'2002'], 'correct'=>'c'],
                2 => ['text'=>'2. Qual prato é tradicionalmente fermentado?', 'opts'=>['a'=>'Bibimbap','b'=>'Kimchi','c'=>'Bulgogi','d'=>'Tteokbokki'], 'correct'=>'b'],
                3 => ['text'=>'3. Qual a dança tradicional coreana que é conhecida pela sua performance com leques?', 'opts'=>['a'=>'Buchaechum','b'=>'Arirang','c'=>'Hanbok','d'=>'Gochugaru'], 'correct'=>'a'],
                4 => ['text'=>'4. Em quais situações os coreanos geralmente usam o hanbok na atualidade?', 'opts'=>['a'=>'No trabalho, em escolas e em atividades físicas diárias.','b'=>'Em feriados tradicionais como Chuseok e Seollal, casamentos e visitas a palácios históricos.','c'=>'Apenas em funerais ...','d'=>'Em desfiles de moda...'], 'correct'=>'b'],
                5 => ['text'=>'5. Em quais esportes a Coreia do Sul se destaca?','opts'=>['a'=>'Natação e Taekwondo','b'=>'Bocha e Curling','c'=>'Beisebol e Basquete','d'=>'Tiro com arco e Golfe'], 'correct'=>'d'],
                6 => ['text'=>'6. Qual festival é famoso na Coreia?','opts'=>['a'=>'Seollal','b'=>'Festival Qingming','c'=>'Oktoberfest','d'=>'Carnival'], 'correct'=>'a'],
                7 => ['text'=>'7. Qual dinastia é conhecida pelas cerâmicas celadon?','opts'=>['a'=>'Joseon','b'=>'Silla','c'=>'Balhae','d'=>'Goryeo'], 'correct'=>'d'],
                8 => ['text'=>'8. Qual o nome da pasta de pimenta coreana?','opts'=>['a'=>'Gochujang','b'=>'Doenjang','c'=>'Sriracha','d'=>'Gochugaru'], 'correct'=>'a'],
                9 => ['text'=>'9. Bulgogi é um prato típico da Coreia que consiste em:','opts'=>['a'=>'Sopa de kimchi','b'=>'Arroz frito','c'=>'Carne marinada grelhada','d'=>'Panqueca de frutos do mar'], 'correct'=>'c'],
                10=> ['text'=>'10. Em que dia foi fundada a República da Coreia?','opts'=>['a'=>'1 de agosto 1945','b'=>'15 de agosto 1948','c'=>'3 de maio 1956','d'=>'15 de julho 1942'], 'correct'=>'b'],
            ];

            $user_answers = $_SESSION['userAnswers'] ?? null;
            $score = $_SESSION['quizScore'] ?? null;

            if ((!is_array($user_answers) || $score === null) && isset($_SESSION['userId'])) {
                $uid = (int) $_SESSION['userId'];
                // buscar a última submissão (ordenar pela PK id)
                $q = $conn->prepare("SELECT quizScore, quizAnswers FROM quiz WHERE particId = ? ORDER BY quizId DESC LIMIT 1");
                $q->bind_param("i", $uid);
                $q->execute();
                $q->bind_result($dbScore, $dbAnswers);
                if ($q->fetch()) {
                    $score = (int) $dbScore;
                    if (!empty($dbAnswers)) {
                        $decoded = json_decode($dbAnswers, true);
                        if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                            $user_answers = $decoded;
                            $_SESSION['userAnswers'] = $user_answers;
                        } else {
                            error_log("quiz_result.php: inválido quizAnswers JSON para user $uid");
                            $user_answers = null;
                        }
                    } else {
                        $user_answers = null;
                    }
                    $_SESSION['quizScore'] = $score;
                }
                $q->close();
            }
        ?>
        
        <div class="quiz-container">
            <h2 class="quiz-title">Resultado do Quiz / 퀴즈 결과</h2>

            <?php if (!is_array($user_answers)) : ?>
                <p class="quiz-instructions" style="text-align:center;color:#8a8a8a;">Nenhuma resposta encontrada. Complete o quiz primeiro.</p>
            <?php else : ?>
                <p class="quiz-instructions">Você acertou <?= htmlspecialchars($score) ?>/10 perguntas.</p>

                <ol class="questions-list">
                    <?php foreach ($perguntas as $i => $q): 
                        $u = (is_array($user_answers)) ? ($user_answers['q'.$i] ?? null) : null;
                    ?>
                    <li class="question">
                        <fieldset>
                            <legend><?= htmlspecialchars($q['text']) ?></legend>
                            <div class="options">
                                <?php foreach ($q['opts'] as $key => $label):
                                    $isCorrect = ($key === $q['correct']);
                                    $userPicked = ($u !== null && $u === $key);

                                    $classes = [];
                                    if ($isCorrect) $classes[] = 'correct';
                                    if ($userPicked && !$isCorrect) $classes[] = 'incorrect';
                                    if (!$userPicked && $isCorrect) $classes[] = 'neutral-correct';

                                    $classAttr = $classes ? ' class="'.implode(' ', $classes).'"' : '';
                                    $readonly = $userPicked ? ' readonly' : '';
                                ?>
                                    <label<?= $classAttr ?>>
                                        <input type="radio" name="q<?= $i ?>" value="<?= $key ?>" disabled<?= $readonly ?>>
                                        <?= htmlspecialchars($key) ?>) <?= htmlspecialchars($label) ?>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                        </fieldset>
                    </li>
                    <?php endforeach; ?>
                </ol>
            <?php endif; ?>

            <div style="text-align:center; margin-top:18px; justify-content:center;">
                <?php if(isset($_SESSION['Success'])) { ?>
                    <a href="quiz.php" class="btn-submit" style="display:inline-block;padding:10px 16px;border-radius:8px;background:#0047A0;color:#fff;text-decoration:none;">Refazer</a>

                <a href="../index.php" style="display:inline-block;margin-left:12px;padding:10px 16px;border-radius:8px;background:#CD2E3A;color:#fff;text-decoration:none;">Voltar</a>
                <?php } else {?>

                <a href="quiz.php" class="btn-submit" style="display:inline-block;padding:10px 16px;border-radius:8px;background:#0047A0;color:#fff;text-decoration:none;">Fazer quiz</a>

                <a href="../index.php" style="display:inline-block;margin-left:12px;padding:10px 16px;border-radius:8px;background:#CD2E3A;color:#fff;text-decoration:none;">Voltar</a>
                <?php } ?>
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