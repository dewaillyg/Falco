const input = document.getElementsByClassName("input");
const reveal = document.querySelectorAll(".eye");
const password = document.getElementsByClassName("input-password");
const checkIcon = document.querySelector(".fa-check");
const checkBox = document.querySelector("#mention");

for (let i = 0; i < input.length; i++) {
    input[i].addEventListener("click", function() {
        for (let i = 0; i < input.length; i++) {
            input[i].classList.remove("div-active");
        }
        input[i].classList.add("div-active");
    });
}

for (let i = 0; i < reveal.length; i++) {
    reveal[i].addEventListener("click", function() {
        if (reveal[i].classList[2] == "fa-eye-slash") {
            reveal[i].classList.remove("fa-eye-slash");
            reveal[i].classList.add("fa-eye");
            password[i].type = "text";
        } else {
            reveal[i].classList.add("fa-eye-slash");
            reveal[i].classList.remove("fa-eye");
            password[i].type = "password";
        }
    });
}

checkBox.addEventListener("click", function() {
    checkIcon.style.opacity == 0 ?
    checkIcon.style.opacity = 1 :
    checkIcon.style.opacity = 0;
});