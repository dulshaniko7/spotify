const h = document.querySelector('#h');

const play = document.querySelector('.play');
const pause = document.querySelector('.pause');

play.addEventListener("click", function () {

    play.style.display = "none";
    pause.style.display = "inline-block";
});

pause.addEventListener("click", function () {
    pause.style.display = "none";
    play.style.display = "inline-block"
})