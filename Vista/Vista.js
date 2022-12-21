function cambiaClase(num){
    console.log("Holaaaa");
    var cambClase = document.querySelectorAll("div.menu > p input");
    console.log(cambClase);
    for (let i = 0; i<cambClase.length; i++) {
        cambClase[i].className = "cell_menu";
        // cambClase[i].classList.replace("active", "cell_menu");
    }
    // cambClase[num].classList.replace("cell_menu", "active");
    // cambClase[num].className = "active";
    console.log(cambClase.length);
}