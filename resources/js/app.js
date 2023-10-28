import "./bootstrap";
import Alpine from "alpinejs";
import mobileNav from "./mobile-nav";
import darkMode from "./darkMode";

window.Alpine = Alpine;

Alpine.start();

//Dark Mode
darkMode();
//Mobile Navigation
mobileNav();