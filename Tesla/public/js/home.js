const body = document.querySelector('body')

window.addEventListener('scroll', function () {
    let position = window.scrollY / (body.clientHeight - window.innerHeight);

    let barre = position * 100


    document.getElementById("movement").style.height = barre + "%"
    document.getElementById("GP").style.top = barre + "%"
})

let menuHamburgeur = document.querySelector(".menuH")

window.onload = function () {

    const menu_btn = document.querySelector(".hamburgeur");
    const mobile_menu = document.querySelector('.mobile-nav');
    let img = document.querySelectorAll('.right img');
    let compteur = 0;

    menu_btn.addEventListener('click', function () {
        menu_btn.classList.toggle('is-active');
        mobile_menu.classList.toggle('is-active');
        compteur = compteur + 1
        active = true;
        for (let i = 0; i < img.length; i++) {
            img[i].classList.add("noZindex");
            img[i].classList.remove("see");


        }
        if (compteur % 2 == 0) {
            for (let i = 0; i < img.length; i++) {
                img[i].classList.remove("noZindex");
                img[i].classList.add("see");
            }
        }
    })
}

function create(tag, parent, text = null, classs = null, id = null) { //Function qui permet de crée un élément
    let element = document.createElement(tag)   // On crée un element avec un Tag (exemple: p, h1, h2, article, etc...)
    if (text)           // Si il y a un texte en paramètre on met le text dans l'element
        element.appendChild(document.createTextNode(text))
    parent.appendChild(element) //On affecte un parent a l'element, principe d'arborescence 
    if (classs)         // si dans les paramètres il y a une classe on affecte l'element a une classe
        element.classList.add(classs)
    if (id)             // Si dans les paramètres il y a un id, pareil on affecte l'element a l'id
        element.id = id
    return element  // on retourne l'element
}





