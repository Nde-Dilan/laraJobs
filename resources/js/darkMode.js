const darkmode = ()=>{
    // let themeToggleBtns= document.querySelectorAll('#theme-toggle');
    //State variable, store the theme inside the local storage
    let sunBtn = document.querySelectorAll('.sun');
    // let contact__links = document.querySelectorAll('.contact__link');
    let theme = localStorage.getItem('theme');
    //on mount , when you first visit a page or reload the page, the && executes the first falsy value else executes the last statement.
    if(theme) {
    document.body.classList.add(theme)
    // sunBtn.forEach(el=>el.setAttribute('fill','black'))
}
    //handlers
    const handleThemeToggle = ()=>{
        document.body.classList.toggle('dark');
        if ( document.body.classList.contains('light-mode')) {
            sunBtn.forEach(el=>el.setAttribute('fill','black'))
            contact__links.forEach(el=>el.setAttribute('fill','black'))
            localStorage.setItem('theme','light-mode')
        } else {
            sunBtn.forEach(el=>el.setAttribute('fill','white'));
            contact__links.forEach(el=>el.setAttribute('fill','white'));
            localStorage.removeItem('theme')
        }
    }
    themeToggleBtns.forEach(el =>el.addEventListener('click',()=> handleThemeToggle()));
}
export default darkmode;

