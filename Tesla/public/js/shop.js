



//   //Sélection du bon article quand on clique sur ajouter au panier (meilleures ventes)
//   //le bouton ajouter au panier des meilleures ventes change en fonction du radio coché : ya 6 boutons et ils passent d'opacité 0 à opacité 1, ya toujours un seul bouton visible, celui de l'item affiché 
  
  
  // if(document.getElementById('radio1').checked){
  //   document.getElementById('btn_add-1').classList.add("visible");
  //   document.getElementById('btn_add-2').classList.remove("visible");
  //   document.getElementById('btn_add-3').classList.remove("visible");
  //   document.getElementById('btn_add-4').classList.remove("visible");
  //   document.getElementById('btn_add-5').classList.remove("visible");
  // }

  // if(document.getElementById('radio2').checked){
  //   document.getElementById('btn_add-1').classList.remove("visible");
  //   document.getElementById('btn_add-2').classList.add("visible");
  //   document.getElementById('btn_add-3').classList.remove("visible");
  //   document.getElementById('btn_add-4').classList.remove("visible");
  //   document.getElementById('btn_add-5').classList.remove("visible");
  // }
  
  // if(document.getElementById('radio3').checked){
  //   document.getElementById('btn_add-1').classList.remove("visible");
  //   document.getElementById('btn_add-2').classList.remove("visible");
  //   document.getElementById('btn_add-3').classList.add("visible");
  //   document.getElementById('btn_add-4').classList.remove("visible");
  //   document.getElementById('btn_add-5').classList.remove("visible");
  // }
  
  // if(document.getElementById('radio4').checked){
  //   document.getElementById('btn_add-1').classList.remove("visible");
  //   document.getElementById('btn_add-2').classList.remove("visible");
  //   document.getElementById('btn_add-3').classList.remove("visible");
  //   document.getElementById('btn_add-4').classList.add("visible");
  //   document.getElementById('btn_add-5').classList.remove("visible");
  // }
  
  // if(document.getElementById('radio5').checked){
  //   document.getElementById('btn_add-1').classList.remove("visible");
  //   document.getElementById('btn_add-2').classList.remove("visible");
  //   document.getElementById('btn_add-3').classList.remove("visible");
  //   document.getElementById('btn_add-4').classList.remove("visible");
  //   document.getElementById('btn_add-5').classList.add("visible");
  // }

//   document.getElementById('btn_add-1').addEventListener('click',function(){
//     console.log('zza');
//   })




// window.addEventListener('change',function(){

//   if(document.getElementById('radio1').checked){
//     document.getElementById('btn_add-1').classList.add("visible");
//     document.getElementById('btn_add-2').classList.remove("visible");
//     document.getElementById('btn_add-3').classList.remove("visible");
//     document.getElementById('btn_add-4').classList.remove("visible");
//     document.getElementById('btn_add-5').classList.remove("visible");
//   }

//   if(document.getElementById('radio2').checked){
//     document.getElementById('btn_add-1').classList.remove("visible");
//     document.getElementById('btn_add-2').classList.add("visible");
//     document.getElementById('btn_add-3').classList.remove("visible");
//     document.getElementById('btn_add-4').classList.remove("visible");
//     document.getElementById('btn_add-5').classList.remove("visible");
//   }

//   if(document.getElementById('radio3').checked){
//     document.getElementById('btn_add-1').classList.remove("visible");
//     document.getElementById('btn_add-2').classList.remove("visible");
//     document.getElementById('btn_add-3').classList.add("visible");
//     document.getElementById('btn_add-4').classList.remove("visible");
//     document.getElementById('btn_add-5').classList.remove("visible");
//   }

//   if(document.getElementById('radio4').checked){
//     document.getElementById('btn_add-1').classList.remove("visible");
//     document.getElementById('btn_add-2').classList.remove("visible");
//     document.getElementById('btn_add-3').classList.remove("visible");
//     document.getElementById('btn_add-4').classList.add("visible");
//     document.getElementById('btn_add-5').classList.remove("visible");
//   }

//   if(document.getElementById('radio5').checked){
//     document.getElementById('btn_add-1').classList.remove("visible");
//     document.getElementById('btn_add-2').classList.remove("visible");
//     document.getElementById('btn_add-3').classList.remove("visible");
//     document.getElementById('btn_add-4').classList.remove("visible");
//     document.getElementById('btn_add-5').classList.add("visible");
//   }
// })


let moins = document.getElementById('compteur__moins')
let plus = document.getElementById('compteur__plus')
let nombre = document.getElementById('nb__choisi')
let kuant = document.getElementById('qte')



kuant.value = nombre.innerHTML

moins.addEventListener('click', function(){
  
  nombre.innerHTML--;

  if(nombre.innerHTML<= 1 ){
    nombre.innerHTML = 1

  }
  kuant.value= nombre.innerHTML
  console.log(kuant.value)
})

plus.addEventListener('click', function(){
  nombre.innerHTML++; 
  if(nombre.innerHTML >9){
    nombre.innerHTML = 1
  }
  
  kuant.value= nombre.innerHTML
  console.log(kuant.value)  
})




