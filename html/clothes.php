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

    <title>전통 의상</title>
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
                <source src="../media/hanbok.mp4" type="video/mp4">
            </video>
        </div>
        
        <div class="translucent-box">
            A Elegância do Vestuário Tradicional Coreano<br>
            전통 한복의 우아함
        </div>
    </div> <!-- end of hero section -->

    <main>
        <div class="title-artigo-container">
            <section class="title-artigo" id="title-artigo">
                Hanbok - 한복
            </section>
        </div>

       <div class="texto-index-container">
            <article class="texto-index">
                <img src="../media/Hanbok.jpg" alt="" class="text-imgs-left" id="hanbok-img"><p>O vestuário tradicional coreano é representado pelo hanbok, um traje que simboliza a identidade, a história e os valores culturais do povo coreano. Utilizado há mais de dois mil anos, o hanbok se destaca por suas linhas fluidas, ausência de bolsos, cores vibrantes e grande variedade de formas e detalhes. Sua estrutura básica inclui o jeogori (jaqueta curta), a chima (saia longa para mulheres), o baji (calça para homens) e o durumagi (sobretudo), além de faixas e, em alguns casos, acessórios como chapéus, bolsas ou sapatos especiais.</p><img src="../media/hanbok-moder.webp" alt="" class="text-imgs-right" id="hanbok-moderno-img">

                <p>O significado das cores e formas no hanbok está relacionado a elementos da natureza, status social, idade e ocasião. Cores mais vivas e detalhes elaborados eram reservados à nobreza, enquanto plebeus vestiam roupas de algodão, frequentemente brancas, o que rendeu ao povo coreano o apelido de “povo das roupas brancas”. O uso predominante do branco representa pureza, resiliência e, historicamente, foi forma de resistência durante a ocupação japonesa.</p>

                <p>No decorrer das dinastias, especialmente Goryeo e Joseon, o hanbok se adaptou a influências externas, mas manteve suas características únicas. Durante a Dinastia Joseon, o traje foi refinado, passou a cobrir mais o corpo, refletindo os valores neoconfucionistas de modéstia e respeito. Era usado tanto no cotidiano quanto em cerimônias, festas e rituais familiares. Os hanboks de crianças se destacam pelas cores e detalhes festivos usados em aniversários importantes, como o Baek-il e o Doljanchi.</p>

                <p>Hoje, o hanbok é reservado para ocasiões especiais — como aniversários, casamentos, feriados (Chuseok e Seollal) ou visitas a palácios históricos. Muitas famílias mantêm a tradição de vestir o hanbok nessas datas para celebrar a ancestralidade. O renascimento do hanbok moderno trouxe releituras criativas, com tecidos, cortes e estampas adaptados ao cotidiano, tornando-se símbolo de orgulho nacional e inspiração para a moda contemporânea na Coreia do Sul.</p>

                <p>Essa fusão de tradição e modernidade pode ser vista em desfiles, séries de TV, videoclipes de K-pop e festivais culturais, onde o hanbok representa não apenas uma roupa, mas a própria essência da cultura coreana.</p>
            </article>
        </div>
    </main>
        
    <footer>
        <p>Kdura M. &copy; 2024</p>
    </footer>

    <script src="../js/nav-hover.js"></script>
</body>
</html>