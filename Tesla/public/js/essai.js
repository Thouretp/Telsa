
var model3 = document.getElementById('btn-model3')
var modelY = document.getElementById('btn-modelY')
var TextModel = document.getElementById('TextModel')
var labelModel = document.getElementById('modelLabel')

var erreurMail = document.querySelector('.erreursMail')
var erreurTel = document.querySelector('.erreursTel')

var textEmail = document.getElementById('textEmail')
var textTel = document.getElementById('phone');
var textPrenom = document.getElementById('prenom');
var textNom = document.getElementById('nom');

var imageModel = document.querySelector('.image-voiture img')

var clickedmY = false
var clickedm3 = false

model3.addEventListener("click", function () {
    model3.classList.toggle('isSelected');
    clickedm3 = true
    imageModel.src = "Models/model3_essai.png";
    TextModel.value = "Model 3";
    labelModel.remove()
    if (clickedmY == true) {
        modelY.classList.remove('isSelected');
    }
});

modelY.addEventListener("click", function () {
    clickedmY = true;
    modelY.classList.toggle('isSelected');
    imageModel.src = "Models/modely_essai.png";
    TextModel.value = "Model Y";
    labelModel.remove()
    if (clickedm3 == true) {
        model3.classList.remove('isSelected');
    }
});

textPrenom.addEventListener('change', function(){
    textPrenom.value = textPrenom.value[0].toUpperCase() + textPrenom.value.substring(1);;
})

textNom.addEventListener('change', function(){
    textNom.value = textNom.value[0].toUpperCase() + textNom.value.substring(1);;
})

textEmail.addEventListener('change', function () {
    if (isValidEmail(textEmail.value) == false) {
        textEmail.style.color = '#EC2222';
        var uneErreur = create('p', erreurMail, "L'adresse n'est pas valide")
        uneErreur.style.color = '#EC2222';
    } else {
        console.log("Adresse valide")
        textEmail.style.color = '#22EC87';
        erreur.remove()
    }

})

function isValidEmail(email) {
    // Vérifiez si l'adresse e-mail contient un signe "@", des points (.) et des chiffres
    var pattern = /^[a-zA-Z0-9-]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/;
    

    return pattern.test(email);
}

function isValidPhoneNumber(tel){
    var pattern = /^[0-9 -]+[0-9]$/;
    return pattern.test(tel);
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



