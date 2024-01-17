let buttons = document.getElementsByClassName("Button");
for(let i = 0; i < buttons.length; i++){
    buttons[i].addEventListener("click", () => {
        window.open("buyWin.html");
    });
}

function comingSoon(){alert("Coming soon");}
