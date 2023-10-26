//Mobile or Desktop ?

// JavaScript pour détecter la largeur de l'écran
const screenWidth = window.innerWidth;

// Vérifier si la largeur de l'écran est inférieure à 768 pixels (valeur courante pour les mobiles)
const isMobile = screenWidth < 768;
console.log(screenWidth);
console.log(isMobile);

// Envoi de l'information au serveur via une requête AJAX
const xhr = new XMLHttpRequest();
xhr.open('POST', 'api/device-detect', true); // "/detect-device" est l'URL du point de terminaison sur le serveur
xhr.setRequestHeader('Content-Type', 'application/json');
xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
        console.log('Informations sur l\'appareil envoyées avec succès au serveur.');
    }else{
        console.log("ERROR----------------------->");
    }
};
xhr.send(JSON.stringify({ isMobile: isMobile }));
