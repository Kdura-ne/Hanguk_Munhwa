<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/textos.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gamja+Flower&family=Nanum+Myeongjo&family=Noto+Sans+KR:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>예술과 음악</title>
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
                <source src="../media/lequedance.mp4" type="video/mp4">
            </video>
        </div>
        
        <div class="translucent-box">
            Música, Dança e Artes Visuais e Muito Mais <br>
            음악, 무용, 시각 예술 및 그 이상
        </div>
    </div> <!-- end of hero section -->

    <main>
        <div class="title-artigo-container">
            <section class="title-artigo" id="title-artigo">
                Arte e Cultura
            </section>
        </div>

       <div class="texto-index-container">
            <article class="texto-index">
                <img src="../media/art.jpg" alt="" class="text-imgs-left" id="arte-img"><p>As artes visuais, a música e a dança coreana combinam tradições milenares com criatividade contemporânea, destacando-se tanto pela preservação cultural quanto pela influência global. O desenvolvimento histórico dessas expressões revela uma busca constante por equilíbrio, refinamento e representação do espírito coreano (“han”), presente em todas as formas artísticas.</p>

                <div style="clear: both;"></div>

                <h1>Artes Visuais Coreanas</h1>

                <img src="../media/celadon.JPG" alt="" class="text-imgs-right"> 
                <p>A tradição das artes visuais na Coreia é marcada pela valorização da natureza, da simplicidade e do simbolismo. Desde os primeiros artefatos neolíticos e pinturas rupestres, passando pela idade do bronze com refinadas cerâmicas, até as dinastias Goryeo (famosa pela cerâmica celadon) e Joseon (destacando-se na pintura de paisagens, caligrafia, biombos e porcelanas brancas). Trabalhos de artistas clássicos, como Shin Saimdang, continuam sendo referência até hoje, inclusive em cédulas de dinheiro. Museus em Seul como o Seoul Museum of Art e o National Museum of Modern and Contemporary Art mostram como artistas contemporâneos dialogam com heranças tradicionais, experimentando novas linguagens e trazendo importantes debates sociais para a arte. O cenário artístico atual é inovador, com feiras internacionais, jovens talentos e espaços colaborativos que colocam a Coreia do Sul como potência global em arte contemporânea.</p>

                <h1>Música: Tradição e Vanguarda</h1>

                <img src="../media/gugak.jpg" alt="" class="text-imgs-left" id="gugak-img"> <p>A música coreana se desenvolveu a partir de ritos xamânicos, budistas e das cortes reais, formando o gênero conhecido como gugak (국악), que abrange desde canções folclóricas até a música clássica da corte. “Arirang”, a mais célebre, tornou-se um hino não oficial do país e patrimônio cultural da humanidade. Instrumentos típicos como gayageum (cítara de cordas), janggu (tambor ampulheta) e piri (flauta) caracterizam a sonoridade tradicional, enquanto gêneros como pansori (narrativa musical), samulnori (percussão), e nongak (banda rural festiva) mesclam canto, relato e dança em performances vibrantes.</p>

                <p>Na vida moderna, o K-pop assumiu destaque global: grupos como BTS, Blackpink e EXO misturam pop, rap, dance e estilos visuais marcantes, simbolizando o poder de exportação da cultura sul-coreana. Outras tendências incluem a fusão de música clássica com elementos eletrônicos e a presença cada vez maior de músicos coreanos em trilhas sonoras de cinema, games e festivais internacionais.</p>

                <h1>Dança Coreana: Entre o Solo e o Espetáculo</h1>

                <img src="../media/buchaechum.jpg" alt="" class="text-imgs-left" id="buchaechum-img"><p>A dança tradicional coreana surgiu de ritos religiosos e festas das aldeias, sendo praticada tanto nos palácios (danças de corte) quanto em festivais populares. Destacam-se a Buchaechum (dança dos leques), famosa por sua beleza visual, além das danças com máscaras (talchum), e movimentos inspirados na ligação com a natureza e a terra. A dança tradicional enfatiza fluidez, gestualidade delicada e vestimentas chamadas hanbok, criando cenas que narram histórias ou emoções profundamente enraizadas na vida coreana. As apresentações modernas reinventam essas formas, mesclando ballet, jazz e street dance - especialmente nos palcos do K-pop, onde coreografias precisas e energéticas viraram marca mundial.</p>

                <p>O diálogo entre tradição e modernidade, tanto nas artes visuais quanto na música e dança, faz da Coreia do Sul um centro cultural em ascensão, capaz de preservar o passado e inovar para o futuro.</p>
            </article>
        </div>
    </main>
        
    <footer>
        <p>Kdura M. &copy; 2024</p>
    </footer>
    
    <script src="../js/nav-dropdown.js"></script>
    <script src="../js/nav-hover.js"></script>
</body>
</html>