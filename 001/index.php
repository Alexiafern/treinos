<?php
    include("menu.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/meu_estilo.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Teste</title>
</head>
<body>
    <br>
    <h1>Teste</h1>
    <br>

    <!-- Inicio do Carrosel -->

            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
            <img src="imgs/fundo.jpg" class="d-block w-100" alt="..." width="500px" height="500px">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="imgs/estudar.jpg" class="d-block w-100" alt="..." width="500px" height="500px">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="imgs/img01.jpg" class="d-block w-100" alt="..." width="500px" height="500px">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>

        <br>

        

        <!-- Começo dos cards -->

        <div class="card-group row row-cols-1 row-cols-md-3 g-4">
        <div class="card" style="width: 18rem;">
            <img src="imgs/estudar.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">The Last of Us Part II</h5>
              <p class="card-text"> The Last of Us Part II é um jogo eletrônico de ação-aventura desenvolvido pela Naughty Dog e publicado pela Sony Interactive Entertainment. É o segundo jogo da franquia e foi lançado em 19 de junho de 2020 exclusivamente para PlayStation 4.</p>
              <a href="https://www.youtube.com/watch?v=c2o2r2YuxQo" class="btn btn-primary" target="_blank">Se inscrever</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="imgs/estudar.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Mario Bros</h5>
              <p class="card-text"> Mario Bros. é um jogo eletrônico de plataforma para arcades criado por Shigeru Miyamoto, desenvolvido pela Nintendo Research & Development 1 e publicado pela Nintendo em 1983. Foi colocado como um minijogo na serie Super</p>
              <a href="https://www.youtube.com/watch?v=nPOuDZGCZp4" class="btn btn-primary" target="_blank">Se inscrever</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="imgs/estudar.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Minecraft</h5>
              <p class="card-text"> Minecraft é um jogo eletrônico sandbox de sobrevivência criado pelo desenvolvedor sueco Markus "Notch" Persson e posteriormente desenvolvido e publicado pela Mojang Studios, cuja propriedade intelectual foi obtida pela Microsoft em 2014.</p>
              <a href="https://www.youtube.com/watch?v=-MIjyD2flr4&t=273s" class="btn btn-primary" target="_blank">Se inscrever</a>
            </div>
        </div>
        
        <div class="card" style="width: 18rem;">
            <img src="imgs/estudar.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">God of War</h5>
              <p class="card-text"> God of War é um jogo eletrônico de ação-aventura desenvolvido pela Santa Monica Studio e publicado pela Sony Interactive Entertainment. Foi lançado em 20 de abril de 2018 para PlayStation 4 e em 14 de janeiro de 2022 para Microsoft Windows.</p>
              <a href="https://www.youtube.com/watch?v=NhTytzzAkNM" class="btn btn-primary" target="_blank">Se inscrever</a>
            </div> <br> <br>
        </div> <br><br> <br>

        

        
    </div>

    <div class="card text-bg-dark">
            <img src="imgs/ideia.jpg" class="card-img" alt="..." width="550px" height="550px">
            <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
        </div>
        <br> <br>
    <div class="card-group row row-cols-1 row-cols-md-3 g-4">
        <div class="card" style="width: 18rem;">
            <img src="imgs/estudar.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Counter-Strike: Global Offensive</h5>
              <p class="card-text"> Counter-Strike: Global Offensive é um jogo online desenvolvido pela Valve Corporation e pela Hidden Path Entertainment, sendo uma sequência de Counter-Strike: Source. É o quarto título principal da franquia</p>
              <a href="https://www.youtube.com/watch?v=c2o2r2YuxQo" class="btn btn-primary" target="_blank">Veja a melhor gameplay!</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="imgs/estudar.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Fortnite</h5>
              <p class="card-text"> Fortnite é um jogo eletrônico multijogador online revelado originalmente em 2011, desenvolvido pela Epic Games e lançado como diferentes modos de jogo que compartilham a mesma jogabilidade e motor gráfico de jogo.</p>
              <a href="https://www.youtube.com/watch?v=c2o2r2YuxQo" class="btn btn-primary" target="_blank">Veja a melhor gameplay!</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="imgs/estudar.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">League of Legends</h5>
              <p class="card-text"> League of Legends é um jogo eletrônico do gênero multiplayer online battle arena desenvolvido e publicado pela Riot Games. Foi lançado em outubro de 2009 para Microsoft Windows e em março de 2013 para macOS</p>
              <a href="https://www.youtube.com/watch?v=c2o2r2YuxQo" class="btn btn-primary" target="_blank">Veja a melhor gameplay!</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="imgs/estudar.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Red Dead Redemption</h5>
              <p class="card-text"> Red Dead Redemption é um jogo eletrônico de ação-aventura desenvolvido pela Rockstar San Diego e publicado pela Rockstar Games. Ele foi lançado em maio de 2010 para PlayStation 3 e Xbox 360, sendo um sucessor espiritual de Red Dead Revolver lançado em 2004</p>
              <a href="https://www.youtube.com/watch?v=c2o2r2YuxQo" class="btn btn-primary" target="_blank">Veja a melhor gameplay!</a>
            </div>
        </div>
        
    </div>


    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>