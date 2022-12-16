function cambiaClase(num){
    var cambClase = document.querySelectorAll("div.menu > form > p input");
    console.log(cambClase);
    for (let i = 0; i<cambClase.length; i++) {
        cambClase[i].classList.replace("active", "cell_menu");
    }
    // cambClase[num].className = "active";
    console.log(cambClase.length);
}