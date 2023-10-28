const darkMode = () => {
    let darkBack = document.querySelector('.dark-back');

    let htmlEl = document.querySelector("html");
    let theme = localStorage.getItem("theme");

    if (theme && theme === "dark") {
        htmlEl.classList.add(theme);
    }

    let sunBtns = document.querySelectorAll(".sun");

    sunBtns.forEach((el) =>
        el.addEventListener("click", () => {
            htmlEl.classList.toggle("dark");

            if (htmlEl.classList.contains("dark")) {
                localStorage.setItem("theme", "dark");
                el.setAttribute("fill", "white");
                // darkBack.hidden=false;
                darkBack.style.display="initial";
            } else {
                localStorage.setItem("theme", "light");
                el.setAttribute("fill", "black");
                darkBack.style.display="none";
                // darkBack.hidden=true;
                
            }
        })
    );
};

export default darkMode;
