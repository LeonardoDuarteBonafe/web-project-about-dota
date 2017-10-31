/* NAVBAR FIXED E TRANSLUCIDA */
var header;
window.addEventListener("scroll", yScroll);        
function yScroll(){
    header= document.getElementById("header");
    yPos = window.pageYOffset;
    if(yPos>header.offsetHeight){      
        header.style.position = "fixed";
        header.style.background = "linear-gradient(to right, rgba(193,33,17, 0.7) , rgba(58,13,8, 0.7)";
    }   
    if(yPos<header.offsetHeight){
        header.style.position = "static";
        header.style.background = "linear-gradient(to left, #C12111 , #3A0D08)";
    }
}

document.getElementById("btn_menu_open_id").onclick = function(){
    document.getElementById("menu_id").style.display = "block";
}

document.getElementById("btn_menu_close_id").onclick = function(){
    document.getElementById("menu_id").style.display = "none";
}

document.getElementById("banner_download").onclick = function() {
    location.href="download.php";
}

document.getElementById("form_enviar").onclick = function(){
    alert("Agradecemos o seu envio, irá nos ajudar a melhorar, volte sempre que desejar!");
    location.href="index.php";
}

document.getElementById("form_cancelar").onclick = function(){
    location.href="index.php";
}

document.getElementById("form_button_btn1").onclick = function(){
 alert("Nós te amamos e queremos você conosco todos os dias!");
} 

document.getElementById("form_button_btn2").onclick = function(){
    var randomNumber = Math.floor((Math.random()*6)+1);
    var userNumber = document.getElementById("user_number").value;
    if(randomNumber == userNumber){
        alert("Parabéns, você acertou");
    } else {
        alert("Você errou, mas tente de novo, o número era " + randomNumber);
    }
}
