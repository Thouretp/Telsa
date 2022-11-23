const body = document.querySelector('body')

let carrouselModelX = ["images/01.png","images/02.png","images/03.png","images/04.png"]

window.addEventListener('scroll', function(){
    let position = window.scrollY / (body.clientHeight - window.innerHeight);

    let barre = position * 100
    

    document.getElementById("movement").style.height = barre/2.6987477201895126 + "%"
    document.getElementById("GP").style.top = barre/2.6987477201895126 + "%" 

   console.log(barre)
})

let j=0
setInterval(function(){ console.log(carrouselModelX[j])
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

let white = document.getElementById("W")
let blue = document.getElementById("Blue")
let grey = document.getElementById("G")
let black = document.getElementById("Black")
let red = document.getElementById("R")

let colors = [white,blue,grey,black,red]

for(i of colors)
{
    console.log(i)
    i.addEventListener("click",function(){
        for(j of colors)
        {
            
            if(i==j)
            {
                j.classList.add("invisible")
                
            }
            else{
                j.classList.remove("invisible")
                console.log(j)
            }
        }
        

        
    })
}
