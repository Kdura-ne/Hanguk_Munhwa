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

    <title>역사</title>
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
                <source src="../media/korea.mp4" type="video/mp4">
            </video>
        </div>
        
        <div class="translucent-box">
            Vamos aprender um pouco mais sobre a história da Coreia. <br>
            한국의 역사에 대해 조금 더 알아봅시다.
        </div>
    </div> <!-- end of hero section -->

    <main>
        <div class="title-artigo-container">
            <section class="title-artigo">
                História da Coreia
            </section>
        </div>

       <div class="texto-index-container">
            <article class="texto-index">
                <p> A história da Coreia do Sul é um exemplo de transformação acelerada, marcada por desafios, superações e uma incrível capacidade de adaptação às mudanças globais. Da divisão no pós-guerra à ascensão como potência tecnológica e cultural, cada etapa revela o espírito resiliente do povo sul-coreano.</p>

                <h1>História da Coreia do Sul</h1>

                <img src="../media/mapacoreia.jpg" alt="Imagem do território das duas Coreias" class="text-imgs-left"> <p> Após o fim da ocupação japonesa e da Segunda Guerra Mundial, a península coreana foi dividida em duas zonas de influência: norte (soviética) e sul (americana). Em 15 de agosto de 1948, foi fundada a República da Coreia (Coreia do Sul), com Syngman Rhee como primeiro presidente. No entanto, apenas dois anos depois, a Coreia do Norte invadiu o sul, iniciando a Guerra da Coreia (1950-1953). O conflito, que teve participação das Nações Unidas, resultou em milhões de mortes e um país devastado, mas consolidou a separação entre as duas Coreias.</p>

                <p> Nas décadas seguintes, a Coreia do Sul enfrentou instabilidades políticas, com governos militares e repressão social. Um dos momentos mais marcantes foi o regime de Park Chung-hee (1961-1979), voltado para o crescimento econômico. Sob seu comando, o país investiu pesado em infraestrutura e indústria, criando as bases do “Milagre do Rio Han”, quando em poucos anos a economia ultrapassou a pobreza extrema e passou a competir internacionalmente, especialmente graças aos conglomerados industriais (chaebols).</p>

                <p> A busca por democracia resultou em grandes manifestações na década de 1980, sendo a Revolta de Gwangju em 1980 um símbolo da luta popular por liberdade e direitos civis. Após muita pressão, veio a abertura democrática, com eleições diretas a partir de 1987 e o fortalecimento das instituições políticas.</p>

                <p> A partir dos anos 1990, a Coreia do Sul vivenciou forte urbanização, universalização da educação, avanços científicos e uma integração cada vez maior à economia global. Seul tornou-se uma metrópole moderna, lar de grandes corporações e cenário de importantes eventos internacionais, como a Olimpíada de 1988 e a Copa do Mundo de 2002.</p>

                <h1>Modernidade e Atualidade</h1>

                <img src="../media/seul.jpg" alt="Imagem do território das duas Coreias" class="text-imgs-right" id="seul-img">
                <p> Hoje, a Coreia do Sul é reconhecida como um exemplo mundial de inovação tecnológica, com setores de ponta em eletrônica, telecomunicações, robótica e automóveis. O país também se destaca na cultura pop global: o fenômeno da Onda Hallyu (K-pop, doramas, cinema), gastronomia moderna e presença digital influenciam jovens do mundo todo.</p>

                <p> A sociedade coreana valoriza o equilíbrio entre tradição e modernidade. Apesar dos avanços, o país enfrenta desafios, como desigualdade social, competitividade intensa na educação e mercado de trabalho, e questões geopolíticas relacionadas à Coreia do Norte.</p>
                
                <p> Hoje, passear por Seul é se deparar com arranha-céus, mercados tradicionais, templos antigos, arte urbana, trens de alta velocidade e um cotidiano repleto de inovações. A Coreia do Sul mostra que é possível transformar crises em oportunidades e se reinventar em poucos anos, tornando-se referência global em desenvolvimento sustentável, tecnologia e cultura contemporânea.</p>

                <p></p>
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