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

    <title>음식과 요리</title>
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
                <source src="../media/tteokbokki.mp4" type="video/mp4">
            </video>
        </div>
        
        <div class="translucent-box">
            A comida coreana. <br>
            한국 음식.
        </div>
    </div> <!-- end of hero section -->

    <main>
        <div class="title-artigo-container">
            <section class="title-artigo">
                Culinária Coreana
            </section>
        </div>

       <div class="texto-index-container">
            <article class="texto-index">

                <img src="../media/comida.jpg" alt="" class="text-imgs-right"> <p>A culinária coreana é uma expressão viva da cultura e história da Coreia do Sul, celebrando a conexão entre tradição e modernidade. Muito mais do que apenas alimentação, os pratos coreanos reforçam laços familiares, bem-estar físico e demonstram a importância do compartilhamento à mesa.</p>

                <p>A comida está no centro das celebrações, rituais e festividades coreanas, refletindo valores e crenças ancestrais. Os sul-coreanos dão grande valor à diversidade de sabores, à técnica de fermentação e ao equilíbrio entre cores e ingredientes frescos. A tradição do respeito às estações, ao uso de ingredientes locais e aos princípios da Medicina Asiática mostram como a alimentação é considerada como forma de cuidado com a saúde.</p>

                <p>A mesa típica é composta por vários pratos chamados banchan, servidos junto ao arroz, em pequenas quantidades, promovendo a troca, convívio e variedade. A identidade coreana está presente em cada ingrediente e preparação, e os rituais à mesa preservam a cultura milenar ao mesmo tempo em que se adaptam à vida moderna.</p>

                <h1>Pratos Típicos da Culinária Coreana</h1>

                <h2>Kimchi - 김치</h2>

                <img src="../media/kimchi.jpg" alt="" class="text-imgs-food" id="kimchi-img"> <p>O kimchi é o alimento mais emblemático da Coreia, símbolo de identidade nacional e presença indispensável em qualquer refeição. Preparado tipicamente com acelga, rabanete ou outros vegetais, o kimchi passa por um processo de fermentação envolvendo pimenta vermelha, alho, gengibre, cebola, cebolinha e, muitas vezes, frutos do mar ou pasta de peixe. Originado há mais de dois mil anos, seu preparo varia entre famílias e regiões, resultando em centenas de tipos. Rico em fibras, vitaminas e probióticos, além de um sabor picante e intenso, o kimchi é considerado fonte de saúde e longevidade na Coreia, tendo inclusive reconhecimento como patrimônio cultural imaterial da humanidade.</p>

                <div style="clear: both;"></div>
                <hr>

                <h2>Bulgogi - 불고기</h2>

                <img src="../media/bulgogi.jpg" alt="" class="text-imgs-food" id="bulgogi-img"> <p>Bulgogi significa “carne de fogo” e é feito com fatias finíssimas de carne bovina marinadas em molho de soja, açúcar, óleo de gergelim, alho, pimenta, pera asiática ralada (para maciez) e vegetais. Tradicionalmente grelhado, mas também pode ser preparado à frigideira, o bulgogi ganha sabor adocicado e aroma defumado. É servido com arroz, folhas de alface para embrulhar a carne, kimchi e acompanhamentos (banchan). Geralmente consumido em refeições festivas ou encontros familiares. É uma das carnes coreanas mais apreciadas internacionalmente pela maciez e combinação de temperos.</p>

                <div style="clear: both;"></div>
                <hr>

                <h2>Bibimbap - 비빔밥</h2>

                <img src="../media/bibimbap.jpg" alt="" class="text-imgs-food" id="bibimbap-img"> <p>Bibimbap significa literalmente “arroz misturado” e sua história remonta à Dinastia Joseon, sendo tradicionalmente associado à harmonia, já que todos os ingredientes são misturados antes do consumo. O prato consiste em uma tigela de arroz coberta por uma variedade colorida de legumes (como espinafre, broto de feijão, cenoura, abobrinha, cogumelo), fatias de carne (normalmente bovina marinada em temperos orientais), ovo frito ou cru, e gochujang (pasta de pimenta coreana). Os ingredientes são dispostos separadamente para realçar as cores e, ao misturar tudo, os sabores e texturas se complementam. O bibimbap pode ser servido em uma tigela de pedra quente (dolsot), que deixa o arroz crocante no fundo, ou em versões vegetarianas, com tofu substituindo a proteína animal. É um prato balanceado, muito consumido no cotidiano, em datas comemorativas e amplamente popular nos restaurantes internacionais.</p>

                <div style="clear: both;"></div>
                <hr>

                <h2>Tteokbokki - 떡볶이</h2>

                <img src="../media/tteokbokki.jpg" alt="" class="text-imgs-food" id="tteokbokki-img"> <p>Popular especialmente como comida de rua, o tteokbokki é composto por bolinhos de arroz cilindricos chamados tteok, cozidos em molho apimentado à base de gochujang, açúcar, alho e caldo de peixe ou frango. Muitas receitas incorporam ovos cozidos, bolinhos de peixe (odeng), cebolinha e pedaços de repolho. Sua textura macia e o molho picante-doce conquistam jovens e adultos, sendo consumido em feiras, mercados e festas noturnas. O prato representa o lado descontraído e inovador da culinária coreana.</p>

                <div style="clear: both;"></div>
                <hr>

                <h2>Gimbap - 김밥</h2>

                <img src="../media/gimbap.webp" alt="" class="text-imgs-food" id="gimbap-img"> <p>O gimbap lembra visualmente o sushi japonês, mas tem identidade própria. O arroz temperado é recheado com vários ingredientes - cenoura, espinafre, pepino, omelete, carne ou peixe, presunto – enrolado em folhas de alga marinha (gim) e fatiado em rolinhos. Utilizado em piqueniques, almoços rápidos ou viagens, é prático de transportar e consumir. Sua versatilidade permite dezenas de variações adaptadas ao gosto de cada família ou região.</p>

                <div style="clear: both;"></div>
                <hr>

                <h2>Frango Frito - 양념치킨</h2>

                <img src="../media/frango.jpg" alt="" class="text-imgs-food" id="frango-img"> <p>O frango frito coreano tornou-se queridinho do paladar sul-coreano, símbolo da adaptação dos clássicos ocidentais às particularidades locais. Seu diferencial está no preparo duplo da fritura, que resulta em pedaços crocantes por fora e suculentos por dentro. Variações clássicas incluem o molho adocicado e picante, feito com pimenta coreana, shoyu, alho, mel ou açúcar e gergelim. Após fritar, o frango é envolto nesse molho brilhante e aromático, formando um “laqueado” que equilibra perfeitamente picância, acidez e doçura.​ É apreciado em encontros informais, bares e festas, normalmente acompanhado por saladas, pickles e cerveja ou soju — uma experiência social que conquistou não só a Coreia do Sul, mas o mundo.</p>

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