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
        <title>Faça download e divirta-se!</title>
        <link rel="stylesheet" type="text/css" href="style.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="dota2iconTitle.png">
    </head>

    <body>
    <?php $pHeader->printHeader()?>
        <h1 class="title">Veremos como baixar o jogo!</h1>
        <div class="download_flex_container">
            <div class="download_flex_box">
                <p>1º Passo - Devemos acessar a página da steam<br><a href="http://steamcommunity.com/" target="_blank"><img src="img/download/steam.PNG" class="download_flex_box_img"></a></p>
            </div>
            <div class="download_flex_box">
                <p>2º Passo - Agora iremos em loja<br><a href="http://store.steampowered.com/" target="_blank"><img src="img/download/loja.PNG" class="download_flex_box_img" ></a></p>
            </div>
            <div class="download_flex_box">
                <p>3º Passo - Iremos usar a barra de pesquisa e pesquisar por dota<br><img src="img/download/pesquisar.PNG" class="download_flex_box_img" ></p>
            </div>
            <div class="download_flex_box">
                <p>4º Passo - Basta descer um pouco a tela e clicar em Jogar, aparecerá uma tela para instalar o jogo e pronto, espere o download terminar e poderá passar raiva e ser feliz!<br><a href="http://store.steampowered.com/app/570/Dota_2/" target="_blank"><img src="img/download/baixar.PNG" class="download_flex_box_img" ></a></p>
            </div>
        </div>
        
        <?php $pFooter->printFooter()?>
        <script type="text/javascript" src="script.js"></script>
    </body>


</html>