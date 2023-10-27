import "./bootstrap";
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

//Dark Mode

let htmlEl = document.querySelector("html");
let theme = localStorage.getItem("theme");

if (theme && theme === "dark") {
    htmlEl.classList.add(theme);
}

let sunBtn = document.querySelector(".sun");

sunBtn.addEventListener("click", () => {
    htmlEl.classList.toggle("dark");

    if (htmlEl.classList.contains("dark")) {
        localStorage.setItem("theme", "dark");
        sunBtn.setAttribute("fill", "white");
    } else {
        localStorage.setItem("theme", "light");
        sunBtn.setAttribute("fill", "black");
    }
});
