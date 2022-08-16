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
        <title>Formulário!</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="dota2iconTitle.png">
    </head>
    <?php $pHeader->printHeader()?>
    <body id="form_body">
        <main class="form">
        <div id="form_title">
            <h1>Bem vindo ao formulário!</h1>
            <p>Agradecemos por nos ajudar respondendo um simples formulário!</p>
        </div>
        
        <form class="form_info">
            <div>
                <p>Nome Completo:<br>
                <input type="text"></p>
                <p>Data de nascimento: <br>
                <input type="date"></p>
            </div>
            <div>
                <p>Curso que está cursando:<br><input type="text"></p>
                <p>Você faz parte de qual diretoria?<br>
                <select>
                    <option>DGP</option>
                    <option>DMK</option>
                    <option>DPJ</option>
                    <option>DAF</option>
                    <option>DOP</option>
                    <option>DAQ</option>
                    <option>DEV</option>
                </select></p>
                <p>O quão bem você está hoje?
                <br>0%<input type="range">100%</p>
                <p>Você tem se sentido bem conosco?<br>
                <input type="radio" name="resposta">Sim <input type="radio" name="resposta"> Não</p>
                <p>Qual é a sua cor favorita? <input type="color" id="form_info_color"><br>Por que é essa cor muito louca: <input type="text"></p>
                <p>Marque as opções que você faça:
                    <br><input type="checkbox">Sorrir
                    <br><input type="checkbox">Pular
                    <br><input type="checkbox">Dançar
                    <br><input type="checkbox">Flutuar
                    <br><input type="checkbox">Voar
                    <br><input type="checkbox">Comer
                    <br><input type="checkbox">Cacarejar
                    <br><input type="checkbox">Viajar
                    </p>
                    <p>Nos envie uma mensagem secreta!<br><input type="password"></p>
                    <div class="form_button_din">
                        <button id="form_button_btn1">Temos uma mensagem pra você, clique aqui para vê-la!</button>
                        <p>Adivinhe o número que irá cair no dado</p>
                        <p><input type="text" id="user_number"><button id="form_button_btn2"> Adivinhar</button></p>
                    </div>
                    <div>
                        <p>Muito obrigado por todo o seu esforço, foi de grande ajuda!</p>
                        <input type="button" id="form_enviar" class="form_button" value="Enviar">
                        <input type="button" id="form_cancelar" class="form_button" value="Não enviar">
                    </div>
            </div>
        </form>
        <p id="banner_download"></p>
        <script type="text/javascript" src="script.js">
        </script>
            <?php $pFooter->printFooter()?>
            <p id="form_background">.</p>
        </main>
    </body>

</html>