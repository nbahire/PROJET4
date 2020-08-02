window.onload = () => {
    let boutons = document.querySelectorAll(".btn-signal");
    for (let bouton of boutons) {
        bouton.addEventListener("click", activate)
    }
  
}

function activate() {
    console.log('vive les gros nichons');
}
