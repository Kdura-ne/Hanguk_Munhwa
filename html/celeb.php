<?php session_start(); ?>
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

    <title>축제와 행사</title>
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
                <source src="../media/lantern.mp4" type="video/mp4">
            </video>
        </div>
        
        <div class="translucent-box">
            Raízes históricas, espirituais e culturais<br>
            역사적, 정신적 및 문화적 뿌리
        </div>
    </div> <!-- end of hero section -->

    <main>
        <div class="title-artigo-container">
            <section class="title-artigo">
                Celebrações e Festivais na Coreia do Sul<br>
            </section>
        </div>

       <div class="texto-index-container">
            <article class="texto-index">
                <p>Os festivais e celebrações coreanos refletem as raízes históricas, espirituais e o dinamismo social do país, unindo tradição e modernidade em momentos de renovação coletiva. O calendário sul-coreano é repleto de datas importantes, que integram desde homenagens ancestrais até eventos culturais urbanos contemporâneos.</p>

                <h1>Festivais Tradicionais Fundamentais</h1>

                <h2>Ano Novo Lunar - 설날</h2>

                <img src="../media/seollal.webp" alt="" class="text-imgs-left" id="seollal-img"><p>Considerado o mais importante dos festivais coreanos, o Seollal marca o início do ano pelo calendário lunar, geralmente no fim de janeiro ou fevereiro. Nessa época, as famílias se reúnem, vestem o hanbok, homenageiam os ancestrais em rituais (Charye), trocam cumprimentos especiais, jogam jogos tradicionais e degustam pratos típicos como tteokguk (sopa de bolinho de arroz), sinalizando sorte e longevidade.</p>

                <div style="clear: both;"></div>
                <hr>

                <h2>Dia de Ação de Graças Coreano - 추석</h2>

                <img src="../media/chuseok.png" alt="" class="text-imgs-left" id="chuseok-img"><p>Celebrado na lua cheia da colheita (geralmente em setembro), é o maior feriado da Coreia. Além do banquete em família e rituais aos ancestrais, Chuseok inclui o preparo de pratos especiais, como songpyeon (bolinho de arroz). Jogos folclóricos, danças e visitas aos túmulos de familiares fazem parte do espírito de gratidão do festival.</p>

                <div style="clear: both;"></div>
                <hr>

                <h2>Festival das Lanternas de Lotus - 연등회</h2>

                <img src="../media/yeondeunhoe.jpg" alt="" class="text-imgs-left" id="yeondeunhoe-img"><p>Comemorando o nascimento de Buda (abril ou maio), esse festival transforma ruas e templos com desfiles de milhares de lanternas artesanais. A iluminação simboliza esperança, iluminação espiritual e renovação, reunindo pessoas de diferentes idades e crenças.</p>

                <div style="clear: both;"></div>
                <hr>

                <h1>Festivais Contemporâneos e Urbanos</h1>

                <h2>Festival de Lanternas de Jinju - 진주 남강 유등 축제</h2>

                <img src="../media/jinju.jpg" alt="" class="text-imgs-left" id="jinju-img"><p>Realizado em outubro na cidade de Jinju, exibe lanternas coloridas navegando pelo rio, shows de luzes, música, dança e eventos culturais, representando uma vibrante celebração do patrimônio coreano.</p>

                <div style="clear: both;"></div>
                <hr>

                <h2>Festivais de K-Pop, Fireworks e Cultura Pop</h2>

                <img src="../media/kpop.webp" alt="" class="text-imgs-left" id="kpop-img"><p>Grandes cidades como Seul e Busan promovem festivais anuais de música Pop (K-Pop), fogos de artifício, gastronomia de rua, cinema, arte contemporânea e outros eventos urbanos, reunindo multidões e turistas do mundo inteiro.</p>
            </article>
        </div>
    </main>
        
    <footer>
        <p>Kdura M. &copy; 2024</p>
    </footer>

    <script src="../js/nav-hover.js"></script>
</body>
</html>