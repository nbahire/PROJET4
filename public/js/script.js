window.onload = () => {
    let boutons = document.querySelectorAll(".btn-signal");
    for (let bouton of boutons) {
        bouton.addEventListener("click", activate)
    }
}

function activate() {
    let xmlhttp = new XMLHttpRequest;
    xmlhttp.open('GET', '/PROJET4/public/admin/getComment/' + this.dataset.id)
    xmlhttp.send()
}
