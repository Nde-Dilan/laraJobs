const mobileNav = ()=>{
    let barIcon = document.querySelector('.header__bars')
    let mobileMenu = document.querySelector('.mobile-nav')
    let mobileLinks = document.querySelectorAll('.mobile-nav__link')
    let isMobileNavOpen = false;    
const styleProps = (display,overflowY,isOpen)=>{
         mobileMenu.style.display = display;
         document.body.style.overflowY=overflowY;
        isMobileNavOpen=isOpen;
 }
barIcon.addEventListener('click',()=>{
isMobileNavOpen ? styleProps('none','auto',false) : styleProps('flex','hidden',true);
});
mobileLinks.forEach((el)=>{
    el.addEventListener('click',()=>{
        styleProps('none','auto',false);
        isMobileNavOpen=false;
    });
});
}

export default mobileNav;