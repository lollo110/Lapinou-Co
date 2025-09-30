let logo = document.querySelector(".logo");

function createCarrot(){
    let carrot = document.createElement("img");
    carrot.src = "./assets/img/carrot_pointer.png";
    carrot.classList.add("carrot");

    carrot.style.left = Math.random() * window.innerWidth + "px";

    let duration = 2 + Math.random() * 3;
    carrot.style.animationDuration = duration + "s";

    document.body.appendChild(carrot);
}

window.addEventListener("pageshow", function(event){
    if(event.persisted){
        window.location.reload();
    }
});

let rain;

document.body.addEventListener('click', function(){
    rain = setInterval(createCarrot, 30);
    logo.classList.add('zoom');

    setTimeout(function(){
        clearInterval(rain);
        window.location.href = "./vue/page_accueil.php";
    }, 4000)
})