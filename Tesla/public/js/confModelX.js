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

let btnInfo = document.querySelector(".more_info")
let infos1 = document.querySelector("#desc1")
let infos2 = document.querySelector("#desc2")
let infos3 = document.querySelector("#desc3")
let infos4 = document.querySelector("#desc4")
let infos5 = document.querySelector("#desc5")
let infos6 = document.querySelector("#desc6")
let infos7 = document.querySelector("#desc7")


btnInfo.addEventListener("click", function(){
    infos1.classList.toggle("invisible")
    infos2.classList.toggle("invisible")
    infos3.classList.toggle("invisible")
    infos4.classList.toggle("invisible")    
    infos5.classList.toggle("invisible")
    infos6.classList.toggle("invisible")
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

        //SOLUTION PAS OPTIMALE MAIS CA MARCHE : JE FAIS TOUS LES TESTS AU CHARGEMENT PUIS JE LES REFAIT QUAND UN ELEMENT CHANGE//
if(document.getElementById('modelPlaid').checked){
    modeleChoisi = document.getElementById('modelPlaid').value;
    document.getElementById('afficheModel').innerHTML = modeleChoisi
    
}
if(document.getElementById('modelXstandart').checked){
    modeleChoisi = document.getElementById('modelXstandart').value;
    document.getElementById('afficheModel').innerHTML = modeleChoisi
}



if(document.getElementById('blanc').checked){
    couleurChoisie = document.getElementById('blanc').value;
    document.getElementById('afficheCouleur').innerHTML = couleurChoisie
}
if(document.getElementById('bleu').checked){
    couleurChoisie = document.getElementById('bleu').value;
    document.getElementById('afficheCouleur').innerHTML = couleurChoisie
}
if(document.getElementById('gris').checked){
    couleurChoisie = document.getElementById('gris').value;
    document.getElementById('afficheCouleur').innerHTML = couleurChoisie
}
if(document.getElementById('noir').checked){
    couleurChoisie = document.getElementById('noir').value;
    document.getElementById('afficheCouleur').innerHTML = couleurChoisie
}
if(document.getElementById('rouge').checked){
    couleurChoisie = document.getElementById('rouge').value;
    document.getElementById('afficheCouleur').innerHTML = couleurChoisie
}


if(document.getElementById('jantes1').checked){
    janteschoisies = document.getElementById('jantes1').value;
    document.getElementById('afficheJante').innerHTML = janteschoisies
}
if(document.getElementById('jantes2').checked){
    janteschoisies = document.getElementById('jantes2').value;
    document.getElementById('afficheJante').innerHTML = janteschoisies
}

if(document.getElementById('interieur1').checked){
    interieurChoisi = document.getElementById('interieur1').value;
    document.getElementById('afficheInterieur').innerHTML = interieurChoisi
}
if(document.getElementById('interieur2').checked){
    interieurChoisi = document.getElementById('interieur2').value;
    document.getElementById('afficheInterieur').innerHTML = interieurChoisi
}
if(document.getElementById('interieur3').checked){
    interieurChoisi = document.getElementById('interieur3').value;
    document.getElementById('afficheInterieur').innerHTML = interieurChoisi
}

if(document.getElementById('checkAutoPilot').checked){
    autopilotchoisi = document.getElementById('checkAutoPilot').value;
    document.getElementById('afficheAutoPilot').innerHTML = autopilotchoisi
}
if(document.getElementById('checkSelfDriving').checked){
    autonomeChoisi = document.getElementById('checkSelfDriving').value;
    document.getElementById('afficheConduite').innerHTML = autonomeChoisi
}

if(document.getElementById('checkRecharge').checked){
    rechargeChoisi = document.getElementById('checkRecharge').value;
    document.getElementById('afficheRecharge').innerHTML = rechargeChoisi
}











window.addEventListener('change',function(){
    if(document.getElementById('modelPlaid').checked){
        modeleChoisi = document.getElementById('modelPlaid').value;
        document.getElementById('afficheModel').innerHTML = modeleChoisi
        
    }
    if(document.getElementById('modelXstandart').checked){
        modeleChoisi = document.getElementById('modelXstandart').value;
        document.getElementById('afficheModel').innerHTML = modeleChoisi
        
    }

    if(document.getElementById('blanc').checked){
        modeleChoisi = document.getElementById('blanc').value;
        document.getElementById('afficheCouleur').innerHTML = modeleChoisi
    }
    if(document.getElementById('bleu').checked){
        modeleChoisi = document.getElementById('bleu').value;
        document.getElementById('afficheCouleur').innerHTML = modeleChoisi
    }
    if(document.getElementById('gris').checked){
        modeleChoisi = document.getElementById('gris').value;
        document.getElementById('afficheCouleur').innerHTML = modeleChoisi
    }
    if(document.getElementById('noir').checked){
        modeleChoisi = document.getElementById('noir').value;
        document.getElementById('afficheCouleur').innerHTML = modeleChoisi
    }
    if(document.getElementById('rouge').checked){
        modeleChoisi = document.getElementById('rouge').value;
        document.getElementById('afficheCouleur').innerHTML = modeleChoisi
    }
    if(document.getElementById('jantes1').checked){
        janteschoisies = document.getElementById('jantes1').value;
        document.getElementById('afficheJante').innerHTML = janteschoisies
    }
    if(document.getElementById('jantes2').checked){
        janteschoisies = document.getElementById('jantes2').value;
        document.getElementById('afficheJante').innerHTML = janteschoisies
    }

    if(document.getElementById('interieur1').checked){
        interieurChoisi = document.getElementById('interieur1').value;
        document.getElementById('afficheInterieur').innerHTML = interieurChoisi
    }
    if(document.getElementById('interieur2').checked){
        interieurChoisi = document.getElementById('interieur2').value;
        document.getElementById('afficheInterieur').innerHTML = interieurChoisi
    }
    if(document.getElementById('interieur3').checked){
        interieurChoisi = document.getElementById('interieur3').value;
        document.getElementById('afficheInterieur').innerHTML = interieurChoisi
    }

    if(document.getElementById('checkAutoPilot').checked){
        autopilotchoisi = document.getElementById('checkAutoPilot').value;
        document.getElementById('afficheAutoPilot').innerHTML = autopilotchoisi
    }
    if(document.getElementById('checkSelfDriving').checked){
        autonomeChoisi = document.getElementById('checkSelfDriving').value;
        document.getElementById('afficheConduite').innerHTML = autonomeChoisi
    }
    
    if(document.getElementById('checkRecharge').checked){
        rechargeChoisi = document.getElementById('checkRecharge').value;
        document.getElementById('afficheRecharge').innerHTML = rechargeChoisi
    }
})


//GENERER PDF//
const pdfkit = require('pdfkit');
const fs = require('fs')

const pdfDocument = new pdfkit

pdfDocument.pipe(fs.createWriteStream("commande.pdf"))

pdfDocument.text("Hello World")
    .fontSize(25)

pdfDocument.end()

 









// let white = document.getElementById("W")
// let blue = document.getElementById("Blue")
// let grey = document.getElementById("G")
// let black = document.getElementById("Black")
// let red = document.getElementById("R")

// let colors = [white,blue,grey,black,red]

// console.log(white)

// for(let i = 0; i < colors.length; i++)
// {
    
//     colors[i].addEventListener("click",function(){
//         for(let j = 0; j < colors.length; j++)
//         {
//             i.classList.remove("checkedColor")
//             if(i==j)
//             {
//                 i.classList.add("checkedColor")
//                 console.log(i)
//             }
                
//         }
        

        
//     })
// }
