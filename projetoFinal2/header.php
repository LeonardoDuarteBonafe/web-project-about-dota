<?php
class header{
    function printHeader(){
        echo "<header id=\"header\">
            <a href=\"index.php\"><h1 id=\"header_logo\"></h1></a>
            <button id=\"btn_menu_open_id\" class=\"header_menu_btnOpen\"><i class=\"fa fa-bars fa-lg\"></i></button>
            <div class=\"menu\" id=\"menu_id\">
            <a class=\"header_menu_btnClose\" id=\"btn_menu_close_id\"><i class=\"fa fa-times\"></i></a>
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
