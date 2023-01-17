const body = document.querySelector('body')

let carrouselModelX = ["images/01.png","images/02.png","images/03.png","images/04.png"]

window.addEventListener('scroll', function(){
    let position = window.scrollY / (body.clientHeight - window.innerHeight);

    let barre = position * 100
    

    document.getElementById("movement").style.height = barre/2.6987477201895126 + "%"
    document.getElementById("GP").style.top = barre/2.6987477201895126 + "%" 

   
})

let j=0
setInterval(function(){ 
    document.getElementById("MS").src = carrouselModelX[j]; 
    j = (j+1)%(carrouselModelX.length);
},1000000)

let btnInfo1 = document.getElementById("more_info1")
let btnInfo2 = document.getElementById("more_info2")
let btnInfo3 = document.getElementById("more_info3")
let btnInfo4 = document.getElementById("more_info4")
let btnInfo5 = document.getElementById("more_info5")
let btnInfo6 = document.getElementById("more_info6")
let btnInfo7 = document.getElementById("more_info7")

let infos1 = document.querySelector("#desc1")
let infos2 = document.querySelector("#desc2")
let infos3 = document.querySelector("#desc3")
let infos4 = document.querySelector("#desc4")
let infos5 = document.querySelector("#desc5")
let infos6 = document.querySelector("#desc6")
let infos7 = document.querySelector("#desc7")

btnInfo1.addEventListener("click", function(){
    infos1.classList.toggle("invisible")
})

btnInfo2.addEventListener("click", function(){
    infos2.classList.toggle("invisible")
})

btnInfo3.addEventListener("click", function(){
    infos3.classList.toggle("invisible")
})

btnInfo4.addEventListener("click", function(){
    infos4.classList.toggle("invisible")
})

btnInfo5.addEventListener("click", function(){
    infos5.classList.toggle("invisible")
})

btnInfo6.addEventListener("click", function(){
    infos6.classList.toggle("invisible")
})

btnInfo7.addEventListener("click", function(){
    infos7.classList.toggle("invisible")
})

//Affichage des options cochées//
let modeleChoisi;
let couleurChoisie;
let janteschoisies; 
let interieurChoisi;
let autopilotchoisi;
let autonomeChoisi;
let rechargeChoisi;
let crochetChoisi;

let tous_les_boutons = document.querySelectorAll("label__clickable")


        //SOLUTION PAS OPTIMALE MAIS CA MARCHE : JE FAIS TOUS LES TESTS AU CHARGEMENT PUIS JE LES REFAIT QUAND UN ELEMENT CHANGE//
if(document.getElementById('modelPlaid').checked){
    modeleChoisi = document.getElementById('modelPlaid').value; //je prends la valeur du bouton coché
    document.getElementById('afficheModel').innerHTML = modeleChoisi //je donne cette valeur au résumé en bas
    document.getElementById('bouton_modelX_plaid').style.backgroundColor="rgb(101, 77, 255)" //je met le bouton en couleur pour montrer qu'il est coché
}
else{
    document.getElementById('bouton_modelX_plaid').style.backgroundColor="#121212"}

if(document.getElementById('modelXstandart').checked){
    modeleChoisi = document.getElementById('modelXstandart').value;
    document.getElementById('afficheModel').innerHTML = modeleChoisi
    document.getElementById('bouton_modelX').style.backgroundColor="rgb(101, 77, 255)"
}
else{
    document.getElementById('bouton_modelX').style.backgroundColor="#121212"}


if(document.getElementById('blanc').checked){
    couleurChoisie = document.getElementById('blanc').value;
    document.getElementById('afficheCouleur').innerHTML = couleurChoisie
    document.getElementById("white").style.border = " solid 5px rgb(101, 77, 255)"
}
else{document.getElementById("white").style.border = " solid 1px #FFF"}

if(document.getElementById('bleu').checked){
    couleurChoisie = document.getElementById('bleu').value;
    document.getElementById('afficheCouleur').innerHTML = couleurChoisie
    document.getElementById("blue").style.border = " solid 5px rgb(101, 77, 255)"
}
else{document.getElementById("blue").style.border = " solid 1px #FFF"}

if(document.getElementById('gris').checked){
    couleurChoisie = document.getElementById('gris').value;
    document.getElementById('afficheCouleur').innerHTML = couleurChoisie
    document.getElementById("grey").style.border = " solid 5px rgb(101, 77, 255)"
}
else{document.getElementById("grey").style.border = " solid 1px #FFF"}

if(document.getElementById('noir').checked){
    couleurChoisie = document.getElementById('noir').value;
    document.getElementById('afficheCouleur').innerHTML = couleurChoisie
    document.getElementById("black").style.border = " solid 5px rgb(101, 77, 255)"
}
else{document.getElementById("black").style.border = " solid 1px #FFF"}

if(document.getElementById('rouge').checked){
    couleurChoisie = document.getElementById('rouge').value;
    document.getElementById('afficheCouleur').innerHTML = couleurChoisie
    document.getElementById("red").style.border = " solid 5px rgb(101, 77, 255)"
}
else{document.getElementById("red").style.border = " solid 1px #FFF"}


if(document.getElementById('jantes1').checked){
    janteschoisies = document.getElementById('jantes1').value;
    document.getElementById('afficheJante').innerHTML = janteschoisies
    document.getElementById('bouton_jantes1').style.backgroundColor="rgb(101, 77, 255)"
}
else{
    document.getElementById('bouton_jantes1').style.backgroundColor="#121212"}


if(document.getElementById('jantes2').checked){
    janteschoisies = document.getElementById('jantes2').value;
    document.getElementById('afficheJante').innerHTML = janteschoisies
    document.getElementById('bouton_jantes2').style.backgroundColor="rgb(101, 77, 255)"
}
else{
    document.getElementById('bouton_jantes2').style.backgroundColor="#121212"}

if(document.getElementById('interieur1').checked){
    interieurChoisi = document.getElementById('interieur1').value;
    document.getElementById('afficheInterieur').innerHTML = interieurChoisi
    document.getElementById('bouton_interieur_1').style.border = " solid 5px rgb(101, 77, 255)"
}
else{document.getElementById('bouton_interieur_1').style.border = " solid 1px #FFF"}

if(document.getElementById('interieur2').checked){
    interieurChoisi = document.getElementById('interieur2').value;
    document.getElementById('afficheInterieur').innerHTML = interieurChoisi
    document.getElementById('bouton_interieur_2').style.border = " solid 5px rgb(101, 77, 255)"
}
else{document.getElementById('bouton_interieur_2').style.border = " solid 1px #FFF"}
if(document.getElementById('interieur3').checked){
    interieurChoisi = document.getElementById('interieur3').value;
    document.getElementById('afficheInterieur').innerHTML = interieurChoisi
    document.getElementById('bouton_interieur_3').style.border = " solid 5px rgb(101, 77, 255)"
}
else{document.getElementById('bouton_interieur_3').style.border = " solid 1px #FFF"}

if(document.getElementById('checkAutoPilot').checked){
    autopilotchoisi = document.getElementById('checkAutoPilot').value;
    document.getElementById('afficheAutoPilot').innerHTML = autopilotchoisi
}
else{document.getElementById('afficheAutoPilot').innerHTML = "Non"}
if(document.getElementById('checkSelfDriving').checked){
    autonomeChoisi = document.getElementById('checkSelfDriving').value;
    document.getElementById('afficheConduite').innerHTML = autonomeChoisi
}
else{document.getElementById('afficheConduite').innerHTML = "Non"}

if(document.getElementById('checkRecharge').checked){
    rechargeChoisi = document.getElementById('checkRecharge').value;
    document.getElementById('afficheRecharge').innerHTML = rechargeChoisi
}
else{document.getElementById('afficheRecharge').innerHTML = "Non"}

if(document.getElementById('checkCrochet').checked){
    crochetChoisi = document.getElementById('checkCrochet').value;
    document.getElementById('afficheCrochet').innerHTML = crochetChoisi
}
else{document.getElementById('afficheCrochet').innerHTML = "Non"}










window.addEventListener('change',function(){
    if(document.getElementById('modelPlaid').checked){
        modeleChoisi = document.getElementById('modelPlaid').value; //je prends la valeur du bouton coché
        document.getElementById('afficheModel').innerHTML = modeleChoisi //je donne cette valeur au résumé en bas
        document.getElementById('bouton_modelX_plaid').style.backgroundColor="rgb(101, 77, 255)" //je met le bouton en couleur pour montrer qu'il est coché
    }
    else{
        document.getElementById('bouton_modelX_plaid').style.backgroundColor="#121212"}
    
    if(document.getElementById('modelXstandart').checked){
        modeleChoisi = document.getElementById('modelXstandart').value;
        document.getElementById('afficheModel').innerHTML = modeleChoisi
        document.getElementById('bouton_modelX').style.backgroundColor="rgb(101, 77, 255)"
    }
    else{
        document.getElementById('bouton_modelX').style.backgroundColor="#121212"}
        
    
    if(document.getElementById('blanc').checked){
        couleurChoisie = document.getElementById('blanc').value;
        document.getElementById('afficheCouleur').innerHTML = couleurChoisie
        document.getElementById("white").style.border = " solid 5px rgb(101, 77, 255)"
    }
    else{document.getElementById("white").style.border = " solid 1px #FFF"}
    
    if(document.getElementById('bleu').checked){
        couleurChoisie = document.getElementById('bleu').value;
        document.getElementById('afficheCouleur').innerHTML = couleurChoisie
        document.getElementById("blue").style.border = " solid 5px rgb(101, 77, 255)"
    }
    else{document.getElementById("blue").style.border = " solid 1px #FFF"}
    
    if(document.getElementById('gris').checked){
        couleurChoisie = document.getElementById('gris').value;
        document.getElementById('afficheCouleur').innerHTML = couleurChoisie
        document.getElementById("grey").style.border = " solid 5px rgb(101, 77, 255)"
    }
    else{document.getElementById("grey").style.border = " solid 1px #FFF"}
    
    if(document.getElementById('noir').checked){
        couleurChoisie = document.getElementById('noir').value;
        document.getElementById('afficheCouleur').innerHTML = couleurChoisie
        document.getElementById("black").style.border = " solid 5px rgb(101, 77, 255)"
    }
    else{document.getElementById("black").style.border = " solid 1px #FFF"}
    
    if(document.getElementById('rouge').checked){
        couleurChoisie = document.getElementById('rouge').value;
        document.getElementById('afficheCouleur').innerHTML = couleurChoisie
        document.getElementById("red").style.border = " solid 5px rgb(101, 77, 255)"
    }
    else{document.getElementById("red").style.border = " solid 1px #FFF"}
    
    
    if(document.getElementById('jantes1').checked){
        janteschoisies = document.getElementById('jantes1').value;
        document.getElementById('afficheJante').innerHTML = janteschoisies
        document.getElementById('bouton_jantes1').style.backgroundColor="rgb(101, 77, 255)"
    }
    else{
        document.getElementById('bouton_jantes1').style.backgroundColor="#121212"}
    
    
    if(document.getElementById('jantes2').checked){
        janteschoisies = document.getElementById('jantes2').value;
        document.getElementById('afficheJante').innerHTML = janteschoisies
        document.getElementById('bouton_jantes2').style.backgroundColor="rgb(101, 77, 255)"
    }
    else{
        document.getElementById('bouton_jantes2').style.backgroundColor="#121212"}
    
    if(document.getElementById('interieur1').checked){
        interieurChoisi = document.getElementById('interieur1').value;
        document.getElementById('afficheInterieur').innerHTML = interieurChoisi
        document.getElementById('bouton_interieur_1').style.border = " solid 5px rgb(101, 77, 255)"
    }
    else{document.getElementById('bouton_interieur_1').style.border = " solid 1px #FFF"}
    
    if(document.getElementById('interieur2').checked){
        interieurChoisi = document.getElementById('interieur2').value;
        document.getElementById('afficheInterieur').innerHTML = interieurChoisi
        document.getElementById('bouton_interieur_2').style.border = " solid 5px rgb(101, 77, 255)"
    }
    else{document.getElementById('bouton_interieur_2').style.border = " solid 1px #FFF"}
    if(document.getElementById('interieur3').checked){
        interieurChoisi = document.getElementById('interieur3').value;
        document.getElementById('afficheInterieur').innerHTML = interieurChoisi
        document.getElementById('bouton_interieur_3').style.border = " solid 5px rgb(101, 77, 255)"
    }
    else{document.getElementById('bouton_interieur_3').style.border = " solid 1px #FFF"}

    if(document.getElementById('checkAutoPilot').checked){
        autopilotchoisi = document.getElementById('checkAutoPilot').value;
        document.getElementById('afficheAutoPilot').innerHTML = autopilotchoisi
    }
    else{document.getElementById('afficheAutoPilot').innerHTML = "Non"}
    if(document.getElementById('checkSelfDriving').checked){
        autonomeChoisi = document.getElementById('checkSelfDriving').value;
        document.getElementById('afficheConduite').innerHTML = autonomeChoisi
    }
    else{document.getElementById('afficheConduite').innerHTML = "Non"}
    
    if(document.getElementById('checkRecharge').checked){
        rechargeChoisi = document.getElementById('checkRecharge').value;
        document.getElementById('afficheRecharge').innerHTML = rechargeChoisi
    }
    else{document.getElementById('afficheRecharge').innerHTML = "Non"}

    if(document.getElementById('checkCrochet').checked){
        crochetChoisi = document.getElementById('checkCrochet').value;
        document.getElementById('afficheCrochet').innerHTML = crochetChoisi
    }
    else{document.getElementById('afficheCrochet').innerHTML = "Non"}
})


//GENERER PDF//
const pdfkit = require('pdfkit');
const fs = require('fs')

const pdfDocument = new pdfkit

pdfDocument.pipe(fs.createWriteStream("commande.pdf"))

pdfDocument.text("Hello World")
    .fontSize(25)

pdfDocument.end()
