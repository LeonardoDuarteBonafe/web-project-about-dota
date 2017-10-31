<?php include 'header.php';
$pHeader = new header();
?>
<?php include 'footer.php';
$pFooter = new footer();
?>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <title>Dota 2 - Um mundo divertido!</title>
        <link rel="stylesheet" type="text/css" href="style.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="dota2iconTitle.png">     
    </head>
    
    <body>
        
        <?php $pHeader->printHeader()?>
        <!-- LOGO E TITULO -->
        <div class="banner">
            <img src="img/dota2banner.jpg">
            <h1 class="title">Seja bem-vindo a esse mundo!</h1>
            <p>Dota 2 é um jogo que vem crescendo mais e mais, com sua jogabilidade, sua forma de ser e seu modo de interagir. Venha fazer parte desse time!</p>
            <button id="banner_download">Baixar DOTA 2<i class="fa fa-arrow-circle-right"><a href="download.php"></a></i></button>
        </div>
        
        <!-- ARTIGOS -->
        <main>
            
            <article class="article">
                <a href="http://wiki.teamliquid.net/dota2/The_International" target="_blank"><img src="img/dota2ti.jpg"></a>
                <div>
                    <p>O primeiro The Internacional aconteceu no ano de 2011 na cidade de Cologne - Alemanha! Tinha como prêmio um milhão de dólares. Contou com 16 times participantes, sendo a maioria times chineses. Teve como a primeira campeã mundial a equipe Natus Vincere</p>
                <img src="img/dota2ti1winner.jpg">
                <p>Abaixo temos um pequeno vídeo de um dos momentos mais emocionantes e marcantes dessa primeira edição.</p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/1VkZm0cQ0LM" frameborder="0" allowfullscreen></iframe>
                </div>
            </article>
            
            <article  class="article">
                <a href="http://wiki.teamliquid.net/dota2/Team_Liquid" target="_blank"><img src="img/dota2teamliquid.png"></a>
                <p>Em 2017 a campeã do The Internacional foi a Liquid, ganhando uma premiação total de 10.862.683 de dólares. Os jogadores batalharam no grupo dos perdedores até serem campeões com uma vitória esmagadora de 3x0 contra a Newbee!</p>
                <a href="http://espn.uol.com.br/noticia/718375_dota-2-com-placar-historico-team-liquid-vence-newbee-e-e-campea-do-international-7" target="_blank"><img src="img/dota2ti7winners.jpg" ></a>
            </article>
            
            <article class="article">
                <a href="http://www.dota2.com/heroes/?l=portuguese" target="_blank"><img src="img/dota2heroes.jpg"></a>
                <div>
                    <p>Dota conta com mais de 100 heróis, que são personagens que podem ser escolhidos pelos jogadores. São totalmente <ins>GRATUITOS</ins>. Existem três tipos de classe básica, sendo:</p>
                    <ul>
                        <li>Força</li>
                        <li>Inteligência</li>
                        <li>Agilidade</li>
                    </ul>
                    <p>Cada um desses atributos é realmente muito forte, desde que o usuário saiba como utilizar o seu herói.</p>
                </div>
            </article>
            
            <article class="article">
                <a href="https://www.joindota.com/en/start" target="_blank"><img src="img/joindota.jpg"></a>
                <div>
                    <p>Join Dota é um site em inglês com ótimas informações e links para as transmissões onlines dos jogos que estão acontecendo em tempo real, conhecido como streams. Você pode acessar a página e dar uma procurada, é bem fácil de compreender. Espero que você aproveite!</p>
                </div>
            </article>
        
        </main>    
        <script type="text/javascript" src="script.js"></script>
        <?php $pFooter->printFooter()?>
        
        
    </body>
        

</html>    