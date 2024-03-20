function abrirNav() {
    var menuOculto = document.getElementById("menuOculto")
    if (menuOculto) {
        menuOculto.style.width = "250px"
    }
}

function fecharNav() {
    var menuOculto = document.getElementById("menuOculto")
    if (menuOculto) {
        menuOculto.style.width = "0"
    }
}