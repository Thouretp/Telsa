let categorie = document.querySelectorAll(".categorie_menu_label")
let categorie_menu_list = document.querySelector(".categorie_menu_list")

categorie.forEach(function(element){
  element.addEventListener("mouseenter", function() {
    categorie_menu_list.classList.remove("noZindex")
  })
  element.addEventListener("mouseleave", function() {
    categorie_menu_list.classList.add("noZindex")
  })
})