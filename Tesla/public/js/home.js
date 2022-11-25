const body = document.querySelector('body')

window.addEventListener('scroll', function () {
    let position = window.scrollY / (body.clientHeight - window.innerHeight);

    let barre = position * 100


    document.getElementById("movement").style.height = barre + "%"
    document.getElementById("GP").style.top = barre + "%"
})





