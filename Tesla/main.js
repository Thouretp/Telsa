const body = document.querySelector('body')

let carrouselModelX = ["images/01.png","images/02.png","images/03.png","images/04.png"]

window.addEventListener('scroll', function(){
    let position = window.scrollY / (body.clientHeight - window.innerHeight);

    let barre = position * 100
    

    document.getElementById("movement").style.height = barre/2.885 + "%"
    document.getElementById("GP").style.top = barre/2.885 + "%"

   
})

let j=0
setInterval(function(){ console.log(carrouselModelX[j])
    document.getElementById("MS").src = carrouselModelX[j]; 
    j = (j+1)%(carrouselModelX.length);
},2500)

let btnInfo = document.querySelector(".more_info")
let infos1 = document.querySelector("#desc1")
let infos2 = document.querySelector("#desc2")


btnInfo.addEventListener("click", function(){
    infos1.classList.toggle("invisible")
    infos2.classList.toggle("invisible")
})



