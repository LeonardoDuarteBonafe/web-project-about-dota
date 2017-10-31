<?php
class header{
    function printHeader(){
        echo "<header id=\"header\">
            <a href=\"index.php\"><h1 id=\"header_logo\">Um pouco sobre o DOTA 2!</h1></a>
            <button id=\"btn_menu_id\" class=\"btn-menu bg-gradient\"><i class=\"fa fa-bars fa-lg\"></i></button>
            <div class=\"menu\" id=\"menu_id\">
            <a class=\"btn-close\" id=\"btn_close_id\"><i class=\"fa fa-times\"></i></a>
            <ul class=\"container\">
                <li><a href=\"index.php\">Inicio</a></li>
                <li><a href=\"about.php\">Sobre</a></li>
                <li><a href=\"download.php\">Baixe</a></li>
                <li><a href=\"info.php\">Curiosidades</a></li>
                <li><a href=\"form.php\">Formulário</a></li>
            </ul>
            </div>
        </header>";
    }
}
?>
