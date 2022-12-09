
var model3 = document.getElementById('btn-model3')
var modelY = document.getElementById('btn-modelY')

var imageModel = document.querySelector('.image-voiture img')


var clickedmY = false
var clickedm3 = false

model3.addEventListener("click", function () {
        model3.classList.toggle('isSelected');
        clickedm3 = true
        imageModel.src = "Models/model3_essai.png";
        if(clickedmY == true){
            modelY.classList.remove('isSelected');
        }
});

modelY.addEventListener("click", function () {
    clickedmY = true;
    modelY.classList.toggle('isSelected');
    imageModel.src = "Models/modely_essai.png";
    if(clickedm3 == true){
        model3.classList.remove('isSelected');
    }
});



// if (clickedmY == false) {
//     modelY.classList.remove('isSelected');
//     console.log("C'est pas toggle")
// }



