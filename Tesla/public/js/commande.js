var removeButton = document.querySelectorAll('.remove');
console.log(removeButton);

for (let i = 0; i < removeButton.length; i++) {

    removeButton[i].addEventListener('click', function () {
        console.log('coucou');
    })
}
